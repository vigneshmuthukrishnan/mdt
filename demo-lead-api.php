<?php
session_start();

header("Content-Type: application/json; charset=UTF-8");

$leadDbHost = getenv("MDT_LEAD_DB_HOST") ?: "localhost";
$leadDbUser = getenv("MDT_LEAD_DB_USER") ?: "crms_app";
$leadDbPass = getenv("MDT_LEAD_DB_PASS") ?: "Berlin@2171";
$leadDbName = getenv("MDT_LEAD_DB_NAME") ?: "crms";
$leadSmsApiKey = getenv("MDT_LEAD_SMS_API_KEY") ?: "OToE0knDQApg571A";
$leadSmsSenderId = getenv("MDT_LEAD_SMS_SENDER_ID") ?: "MYDREM";
$leadAdminPhone = getenv("MDT_LEAD_ADMIN_PHONE") ?: "7824008877";

function demo_json($payload, $statusCode = 200)
{
    http_response_code($statusCode);
    echo json_encode($payload);
    exit;
}

function demo_normalize_phone($value)
{
    $digits = preg_replace("/\D+/", "", (string) $value);

    if (strlen($digits) === 12 && substr($digits, 0, 2) === "91") {
        $digits = substr($digits, 2);
    }

    return $digits;
}

function demo_mask_phone($value)
{
    $digits = demo_normalize_phone($value);

    return strlen($digits) < 4 ? $digits : str_repeat("X", strlen($digits) - 4) . substr($digits, -4);
}

function demo_open_db($host, $user, $pass, $name)
{
    $connection = @new mysqli($host, $user, $pass, $name);

    if ($connection->connect_error) {
        return null;
    }

    $connection->set_charset("utf8mb4");

    return $connection;
}

function demo_send_sms($apiKey, $senderId, $phone, $message)
{
    $url = "http://app.mydreamstechnology.in/vb/apikey.php?apikey=" . urlencode($apiKey)
        . "&senderid=" . urlencode($senderId)
        . "&number=" . urlencode($phone)
        . "&message=" . urlencode($message);
    $context = stream_context_create(["http" => ["timeout" => 12]]);

    set_error_handler(static function ($severity, $errorMessage, $errorFile, $errorLine) {
        throw new ErrorException($errorMessage, 0, $severity, $errorFile, $errorLine);
    });

    try {
        $response = file_get_contents($url, false, $context);
        $responseBody = trim((string) $response);

        if ($response === false || $responseBody === "") {
            throw new RuntimeException("SMS gateway returned no response.");
        }

        if (preg_match('/(error|invalid|denied|failed|failure|unauthori[sz]ed|not\s+found|insufficient)/i', $responseBody)) {
            throw new RuntimeException("SMS gateway rejected the request.");
        }

        return true;
    } catch (Throwable $exception) {
        error_log("[demo_send_sms] Failed for " . demo_mask_phone($phone) . " | " . $exception->getMessage());

        return false;
    } finally {
        restore_error_handler();
    }
}

function demo_otp_message($name, $otp)
{
    return "Dear " . $name . ", Your OTP for login to " . $otp . ". Valid for 30 minutes. Please do not share this OTP. Regards, My Dreams Technology Team";
}

function demo_admin_message($name, $phone, $service)
{
    return "Hi MDT Admin, You Have Received Lead Client Name - " . $name . " Mobile Number " . $phone . " Enquired For " . $service . ". - Team My Dreams Technology";
}

$action = (string) ($_POST["lead_action"] ?? "");

if ($action === "send_otp") {
    $firstName = trim((string) ($_POST["first_name"] ?? ""));
    $lastName = trim((string) ($_POST["last_name"] ?? ""));
    $name = trim($firstName . " " . $lastName);
    $phone = demo_normalize_phone($_POST["phone"] ?? "");
    $email = trim((string) ($_POST["email"] ?? ""));
    $company = trim((string) ($_POST["company"] ?? ""));
    $service = trim((string) ($_POST["service"] ?? ""));
    $message = trim((string) ($_POST["message"] ?? ""));
    $errors = [];

    if ($firstName === "") {
        $errors["first_name"] = "Please enter your first name.";
    }

    if (!preg_match("/^\d{10}$/", $phone)) {
        $errors["phone"] = "Please enter a valid 10-digit mobile number.";
    }

    if ($email !== "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Please enter a valid email address.";
    }

    if ($service === "") {
        $errors["service"] = "Please select a service.";
    }

    if ($errors) {
        demo_json(["ok" => false, "errors" => $errors], 422);
    }

    $connection = demo_open_db($leadDbHost, $leadDbUser, $leadDbPass, $leadDbName);

    if (!$connection) {
        demo_json(["ok" => false, "errors" => ["form" => "We could not start OTP verification right now. Please try again in a moment."]], 500);
    }

    $otp = random_int(100000, 999999);
    $verification = 0;
    $createdAt = date("Y-m-d H:i:s");
    $deleteStatement = $connection->prepare("DELETE FROM tbl_sms_lead WHERE phone = ?");

    if ($deleteStatement) {
        $deleteStatement->bind_param("s", $phone);
        $deleteStatement->execute();
        $deleteStatement->close();
    }

    $insertStatement = $connection->prepare("
        INSERT INTO tbl_sms_lead
        (name, phone, email, company_name, looking_for, otp, verification, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if (!$insertStatement) {
        $connection->close();
        demo_json(["ok" => false, "errors" => ["form" => "We could not save your enquiry right now. Please try again in a moment."]], 500);
    }

    $insertStatement->bind_param("sssssiis", $name, $phone, $email, $company, $service, $otp, $verification, $createdAt);
    $saved = $insertStatement->execute();
    $insertStatement->close();
    $connection->close();

    if (!$saved) {
        demo_json(["ok" => false, "errors" => ["form" => "We could not save your enquiry right now. Please try again in a moment."]], 500);
    }

    if (!demo_send_sms($leadSmsApiKey, $leadSmsSenderId, $phone, demo_otp_message($name, $otp))) {
        demo_json(["ok" => false, "errors" => ["form" => "We could not send the OTP right now. Please try again in a moment."]], 500);
    }

    $_SESSION["demo_lead_pending"] = [
        "name" => $name,
        "phone" => $phone,
        "email" => $email,
        "company" => $company,
        "service" => $service,
        "message" => $message,
    ];

    demo_json([
        "ok" => true,
        "state" => "otp",
        "message" => "A 6-digit OTP has been sent to your mobile number.",
        "maskedPhone" => demo_mask_phone($phone),
    ]);
}

if ($action === "verify_otp") {
    $pending = $_SESSION["demo_lead_pending"] ?? null;
    $otp = preg_replace("/\D+/", "", (string) ($_POST["otp"] ?? ""));

    if (!$pending || empty($pending["phone"])) {
        demo_json(["ok" => false, "errors" => ["form" => "Your OTP session expired. Please submit the form again."]], 440);
    }

    if (!preg_match("/^\d{6}$/", $otp)) {
        demo_json(["ok" => false, "errors" => ["otp" => "Please enter the complete 6-digit OTP."]], 422);
    }

    $connection = demo_open_db($leadDbHost, $leadDbUser, $leadDbPass, $leadDbName);

    if (!$connection) {
        demo_json(["ok" => false, "errors" => ["otp" => "We could not verify the OTP right now. Please try again."]], 500);
    }

    $selectStatement = $connection->prepare("SELECT otp FROM tbl_sms_lead WHERE phone = ? LIMIT 1");

    if (!$selectStatement) {
        $connection->close();
        demo_json(["ok" => false, "errors" => ["otp" => "We could not verify the OTP right now. Please try again."]], 500);
    }

    $selectStatement->bind_param("s", $pending["phone"]);
    $selectStatement->execute();
    $selectStatement->bind_result($storedOtp);
    $found = $selectStatement->fetch();
    $selectStatement->close();

    if (!$found || (string) $storedOtp !== $otp) {
        $connection->close();
        demo_json(["ok" => false, "errors" => ["otp" => "Incorrect OTP. Please try again."]], 422);
    }

    $updateStatement = $connection->prepare("UPDATE tbl_sms_lead SET verification = 1 WHERE phone = ?");

    if ($updateStatement) {
        $updateStatement->bind_param("s", $pending["phone"]);
        $updateStatement->execute();
        $updateStatement->close();
    }

    $connection->close();
    demo_send_sms($leadSmsApiKey, $leadSmsSenderId, $leadAdminPhone, demo_admin_message($pending["name"], $pending["phone"], $pending["service"]));
    unset($_SESSION["demo_lead_pending"]);

    demo_json(["ok" => true, "state" => "thankyou"]);
}

if ($action === "reset") {
    unset($_SESSION["demo_lead_pending"]);
    demo_json(["ok" => true, "state" => "form"]);
}

demo_json(["ok" => false, "errors" => ["form" => "Invalid request."]], 400);
