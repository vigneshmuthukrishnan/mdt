(function () {
    const modal = document.querySelector("[data-demo-modal]");

    if (!modal) return;

    const otpState = modal.querySelector("[data-demo-otp-state]");
    const thankyouState = modal.querySelector("[data-demo-thankyou-state]");
    const maskedPhone = modal.querySelector("[data-demo-masked-phone]");
    const otpError = modal.querySelector("[data-demo-otp-error]");
    const otpForm = modal.querySelector("[data-demo-otp-form]");
    const otpDigits = Array.from(modal.querySelectorAll("[data-demo-otp-digit]"));
    const closeButtons = modal.querySelectorAll("[data-demo-close]");
    let activeForm = null;

    const setBusy = (button, busy, busyText) => {
        if (!button) return;
        if (!button.dataset.defaultText) button.dataset.defaultText = button.textContent;
        button.disabled = busy;
        button.textContent = busy ? busyText : button.dataset.defaultText;
        button.classList.toggle("opacity-70", busy);
        button.classList.toggle("cursor-wait", busy);
    };

    const showOtpError = message => {
        otpError.textContent = message || "";
        otpError.classList.toggle("hidden", !message);
    };

    const resetOtp = () => {
        otpDigits.forEach(input => { input.value = ""; });
        showOtpError("");
    };

    const openOtp = phone => {
        resetOtp();
        maskedPhone.textContent = phone ? "+91 " + phone : "your mobile number";
        otpState.classList.remove("hidden");
        thankyouState.classList.add("hidden");
        modal.classList.remove("hidden");
        modal.setAttribute("aria-hidden", "false");
        document.body.classList.add("overflow-hidden");
        otpDigits[0]?.focus();
    };

    const showThankyou = () => {
        otpState.classList.add("hidden");
        thankyouState.classList.remove("hidden");
        activeForm?.reset();
    };

    const closeModal = async () => {
        modal.classList.add("hidden");
        modal.setAttribute("aria-hidden", "true");
        document.body.classList.remove("overflow-hidden");
        resetOtp();
        activeForm?.reset();

        const formData = new FormData();
        formData.append("lead_action", "reset");
        fetch("demo-lead-api.php", { method: "POST", body: formData }).catch(() => {});
    };

    const request = async formData => {
        const response = await fetch("demo-lead-api.php", {
            method: "POST",
            headers: { "X-Requested-With": "XMLHttpRequest" },
            body: formData
        });
        const payload = await response.json().catch(() => ({ ok: false, errors: { form: "Unexpected server response. Please try again." } }));

        if (!response.ok || !payload.ok) throw payload;
        return payload;
    };

    const submitLeadForm = async form => {
            if (!form) return;
            activeForm = form;
            const button = form.querySelector("[data-demo-submit], button");
            const errorBox = form.querySelector("[data-demo-form-error]");
            const formData = new FormData();
            const fields = {
                first_name: "fname",
                last_name: "lname",
                phone: "phone",
                email: "email",
                company: "company",
                service: "service",
                message: "message"
            };

            Object.entries(fields).forEach(([name, id]) => {
                formData.append(name, form.querySelector("#" + id)?.value || "");
            });
            formData.append("lead_action", "send_otp");

            if (errorBox) {
                errorBox.textContent = "";
                errorBox.classList.add("hidden");
            }

            setBusy(button, true, "Sending OTP...");

            try {
                const payload = await request(formData);
                openOtp(payload.maskedPhone);
            } catch (payload) {
                const errors = payload?.errors || {};
                const message = errors.form || errors.first_name || errors.phone || errors.email || errors.service || "Please check your details and try again.";
                if (errorBox) {
                    errorBox.textContent = message;
                    errorBox.classList.remove("hidden");
                } else {
                    alert(message);
                }
            } finally {
                setBusy(button, false);
            }
    };

    window.submitDemoLeadForm = submitLeadForm;

    document.querySelectorAll("[data-demo-lead-form], .premium-form, .demo-form").forEach(form => {
        form.addEventListener("submit", event => {
            event.preventDefault();
            submitLeadForm(form);
        });
    });

    otpDigits.forEach((input, index) => {
        input.addEventListener("input", () => {
            input.value = input.value.replace(/\D/g, "").slice(-1);
            if (input.value && otpDigits[index + 1]) otpDigits[index + 1].focus();
        });
        input.addEventListener("keydown", event => {
            if (event.key === "Backspace" && !input.value && otpDigits[index - 1]) otpDigits[index - 1].focus();
        });
        input.addEventListener("paste", event => {
            const digits = event.clipboardData.getData("text").replace(/\D/g, "").slice(0, 6);
            if (!digits) return;
            event.preventDefault();
            otpDigits.forEach((field, digitIndex) => { field.value = digits[digitIndex] || ""; });
            otpDigits[Math.min(digits.length, 6) - 1]?.focus();
        });
    });

    otpForm.addEventListener("submit", async event => {
        event.preventDefault();
        const button = otpForm.querySelector("[data-demo-verify-button]");
        const otp = otpDigits.map(input => input.value).join("");
        const formData = new FormData();
        formData.append("lead_action", "verify_otp");
        formData.append("otp", otp);
        showOtpError("");
        setBusy(button, true, "Verifying...");

        try {
            await request(formData);
            showThankyou();
        } catch (payload) {
            const errors = payload?.errors || {};
            showOtpError(errors.otp || errors.form || "We could not verify the OTP. Please try again.");
        } finally {
            setBusy(button, false);
        }
    });

    closeButtons.forEach(button => button.addEventListener("click", closeModal));
    modal.addEventListener("click", event => {
        if (event.target === modal) closeModal();
    });
    document.addEventListener("keydown", event => {
        if (event.key === "Escape" && !modal.classList.contains("hidden")) closeModal();
    });
})();
