<?php
$homeIcon = static function (string $name, string $class = 'h-6 w-6'): string {
    $paths = [
        'message' => '<path d="M7 8h10M7 12h7m-9 8 3.5-3H19a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2v3Z"/>',
        'bolt' => '<path d="m13 2-9 12h7l-1 8 9-12h-7l1-8Z"/>',
        'coin' => '<path d="M12 6v12m3-9.5c-.7-.6-1.7-1-3-1-1.9 0-3.5 1-3.5 2.3S10.1 12 12 12s3.5 1 3.5 2.3-1.6 2.2-3.5 2.2c-1.3 0-2.3-.4-3-1M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18Z"/>',
        'rocket' => '<path d="M14.5 5.5c2-2 4.3-2.4 6.5-2.5-.1 2.2-.5 4.5-2.5 6.5l-4 4-4-4 4-4Zm-5 5-3 .5-3 3 5-.5m5 2 .5 5 3-3 .5-3m-8 2-2 4 4-2"/>',
        'shield' => '<path d="M12 3 19 6v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6l7-3Zm-3 9 2 2 4-4"/>',
        'chart' => '<path d="M4 19V5m0 14h16M7 15l4-4 3 3 5-6"/>',
        'whatsapp' => '<path d="M20 11.5a8 8 0 0 1-11.8 7L4 20l1.5-4.1A8 8 0 1 1 20 11.5Zm-10.7-4c-.2-.4-.4-.4-.7-.4h-.5c-.3 0-.7.1-.9.4-.3.3-1 1-1 2.4s1 2.8 1.2 3c.1.2 2 3.2 5 4.3 2.5.9 3 .7 3.6.6.5-.1 1.8-.7 2-1.5.3-.7.3-1.3.2-1.5-.1-.1-.3-.2-.7-.4l-2-.9c-.3-.1-.6-.2-.8.2-.2.3-.8.9-1 1.1-.2.2-.4.2-.7.1-.4-.2-1.5-.6-2.8-1.7-1-1-1.7-2-1.9-2.4-.2-.3 0-.5.1-.7l.5-.6c.2-.2.2-.4.3-.6.1-.2.1-.4 0-.6l-.9-2Z"/>',
        'lock' => '<path d="M7 10V7a5 5 0 0 1 10 0v3m-11 0h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2Zm6 4v3"/>',
        'phone' => '<path d="M6.6 3h3l1.5 4-2 1.5a15 15 0 0 0 6.4 6.4l1.5-2 4 1.5v3c0 1.7-1.3 3-3 3A15 15 0 0 1 3.6 6c0-1.7 1.3-3 3-3Z"/>',
        'cloud' => '<path d="M7 18h10a4 4 0 1 0-.8-7.9A5.5 5.5 0 0 0 5.6 12 3 3 0 0 0 7 18Z"/>',
        'sparkles' => '<path d="m12 3 1.4 4.6L18 9l-4.6 1.4L12 15l-1.4-4.6L6 9l4.6-1.4L12 3Zm6 12 .7 2.3L21 18l-2.3.7L18 21l-.7-2.3L15 18l2.3-.7L18 15ZM5 14l.7 2.3L8 17l-2.3.7L5 20l-.7-2.3L2 17l2.3-.7L5 14Z"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'user' => '<path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm7 9a7 7 0 0 0-14 0"/>',
        'card' => '<path d="M3 6h18v12H3V6Zm0 4h18M7 15h3"/>',
        'upload' => '<path d="M12 16V4m0 0L8 8m4-4 4 4M5 14v5h14v-5"/>',
        'send' => '<path d="m21 3-7.5 18-3.2-7.3L3 10.5 21 3Zm-10.7 10.7L15 9"/>',
        'building' => '<path d="M4 21V5l8-3 8 3v16M8 9h1m3 0h1m3 0h1m-9 4h1m3 0h1m3 0h1m-5 8v-4h2v4"/>',
        'store' => '<path d="M4 10v10h16V10M3 10l2-6h14l2 6M3 10a3 3 0 0 0 6 0 3 3 0 0 0 6 0 3 3 0 0 0 6 0"/>',
        'heart' => '<path d="M20.8 8.5c0 5-8.8 10-8.8 10s-8.8-5-8.8-10A4.5 4.5 0 0 1 12 5.8a4.5 4.5 0 0 1 8.8 2.7Z"/>',
        'book' => '<path d="M4 5a3 3 0 0 1 3-2h5v17H7a3 3 0 0 0-3 1V5Zm16 0a3 3 0 0 0-3-2h-5v17h5a3 3 0 0 1 3 1V5Z"/>',
        'home' => '<path d="m3 11 9-8 9 8M5 10v10h14V10m-9 10v-6h4v6"/>',
        'hotel' => '<path d="M4 20V6h16v14M7 10h3m4 0h3m-10 4h3m4 0h3m-6 6v-3h2v3"/>',
        'landmark' => '<path d="m3 10 9-6 9 6M5 10h14M6 10v8m4-8v8m4-8v8m4-8v8M4 21h16M3 18h18"/>',
        'megaphone' => '<path d="m4 13 13-5v8L4 11v2Zm0-2H2v5h4l2 5h3l-2-5m8-6c2 1 3 2.5 3 4s-1 3-3 4"/>',
        'plane' => '<path d="m22 2-8 20-3-9-9-3 20-8Zm-11 11 5-5"/>',
        'truck' => '<path d="M3 5h11v11H3V5Zm11 4h4l3 3v4h-7V9ZM7 19a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm10 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>',
        'gift' => '<path d="M4 10h16v11H4V10Zm-1-4h18v4H3V6Zm9 0v15m0-15H8.5A2.5 2.5 0 1 1 12 3.7V6Zm0 0h3.5A2.5 2.5 0 1 0 12 3.7V6Z"/>',
        'handshake' => '<path d="m8 12 3-3 3 3m-8 2 3 3c.8.8 2 .8 2.8 0l.2-.2.2.2c.8.8 2 .8 2.8 0l3-3M3 7l3-2 4 4m11-2-3-2-4 4M2 8l4 7m16-7-4 7"/>',
        'calendar' => '<path d="M5 4h14a2 2 0 0 1 2 2v14H3V6a2 2 0 0 1 2-2Zm3-2v4m8-4v4M3 9h18m-12 4h2m3 0h2m-7 4h2"/>',
    ];

    return '<svg class="' . $class . '" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">' . $paths[$name] . '</svg>';
};

$products = [
    ['message', 'Bulk SMS Service', 'Send lakhs of promotional and transactional SMS in seconds. Best-in-class delivery with real-time reports.', 'https://www.mydreamstechnology.in/bulksmsservice.php', 'Explore Bulk SMS', ['DND & Non-DND coverage', 'Promotional & Transactional SMS', 'Real-time delivery reports', 'Scheduled messaging', 'Unicode / Multi-language support']],
    ['whatsapp', 'WhatsApp Business API', 'Official Meta-approved API for automated, interactive customer conversations at scale.', 'https://www.mydreamstechnology.in/whatsapp.php', 'Explore WhatsApp API', ['Broadcast messages to opted-in users', 'Rich media: images, docs, buttons', 'Chatbot & auto-reply flows', 'Two-way conversations', 'Green tick verification support']],
    ['lock', 'OTP SMS & SMS API', 'Blazing-fast OTP delivery with 99.9% uptime. Integrate with any platform in minutes.', 'https://www.mydreamstechnology.in/otpsms.php', 'Explore OTP SMS', ['Sub-second OTP delivery', 'REST API with HTTP, PHP, Java, .NET', '99.9% uptime SLA', 'Failover routing', 'Free developer documentation']],
    ['phone', 'Voice Call Service', 'Deliver pre-recorded audio messages to thousands of contacts simultaneously - perfect for reminders and alerts.', 'https://www.mydreamstechnology.in/voicecall.php', 'Explore Voice Calls', ['Bulk voice broadcasting', 'Customisable caller ID', 'Regional language support', 'Automated call scheduling', 'Call analytics & reports']],
    ['cloud', 'IVR & Cloud Telephony', 'Build smart call flows with multi-level IVR, missed call alerts, and virtual phone numbers - no hardware needed.', 'https://www.mydreamstechnology.in/ivrserviceprovider.php', 'Explore IVR', ['Multi-level IVR menus', 'Missed call alert service', 'Virtual & toll-free numbers', 'Call recording & routing', 'CRM integration ready']],
    ['sparkles', 'RCS - Rich Media Messaging', 'Next-generation messaging with branded sender profiles, carousels, action buttons, and verified delivery.', 'https://www.mydreamstechnology.in/contact.php', 'Explore RCS', ['Branded business messages', 'Interactive cards & carousels', 'Action buttons & quick replies', 'Read receipts & engagement tracking', 'Google Messages powered']],
];

$industries = [
    ['heart', 'Healthcare'], ['building', 'Banking & Finance'], ['book', 'Education'],
    ['landmark', 'Govt & Public Utilities'], ['megaphone', 'Advertising Agency'], ['plane', 'Tours & Travel'],
    ['hotel', 'Hotels & Restaurants'], ['home', 'Real Estate'], ['truck', 'Logistics & Transport'], ['store', 'E-Commerce'],
];
?>

<style>
    .premium-home { isolation: isolate; }
    .premium-home .premium-grid {
        background-image: linear-gradient(rgba(37, 99, 235, .055) 1px, transparent 1px), linear-gradient(90deg, rgba(37, 99, 235, .055) 1px, transparent 1px);
        background-size: 34px 34px;
        mask-image: linear-gradient(to bottom, rgba(0, 0, 0, .9), transparent);
        -webkit-mask-image: linear-gradient(to bottom, rgba(0, 0, 0, .9), transparent);
    }
    .premium-home .premium-panel {
        box-shadow: 0 24px 70px -26px rgba(15, 23, 42, .35), 0 14px 28px -20px rgba(37, 99, 235, .3);
    }
    .premium-home .premium-card {
        position: relative;
        overflow: hidden;
        box-shadow: 0 16px 45px -30px rgba(15, 23, 42, .55);
        transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
    }
    .premium-home .premium-card::before {
        content: "";
        position: absolute;
        inset: 0 auto auto 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, #2563eb, #06b6d4, transparent);
        opacity: .78;
    }
    .premium-home .premium-card:hover {
        transform: translateY(-8px);
        border-color: rgba(59, 130, 246, .55);
        box-shadow: 0 26px 60px -30px rgba(37, 99, 235, .5);
    }
    .premium-home .premium-stat {
        box-shadow: 0 14px 38px -30px rgba(37, 99, 235, .7);
        transition: transform .3s ease, box-shadow .3s ease;
    }
    .premium-home .premium-stat:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 44px -28px rgba(37, 99, 235, .8);
    }
    .premium-home .premium-icon {
        box-shadow: inset 0 1px rgba(255, 255, 255, .7), 0 12px 20px -14px rgba(37, 99, 235, .75);
    }
    .premium-home .premium-form input,
    .premium-home .premium-form textarea,
    .premium-home .premium-form select {
        transition: border-color .25s ease, box-shadow .25s ease, transform .25s ease;
    }
    .premium-home .premium-form input:focus,
    .premium-home .premium-form textarea:focus,
    .premium-home .premium-form select:focus {
        outline: none;
        border-color: #60a5fa;
        box-shadow: 0 0 0 4px rgba(96, 165, 250, .18);
        transform: translateY(-1px);
    }
    .dark .premium-home .premium-grid { opacity: .52; }
    .dark .premium-home .premium-panel { box-shadow: 0 26px 80px -32px rgba(0, 0, 0, .9), 0 16px 36px -26px rgba(34, 211, 238, .35); }
    .premium-toast {
        position: fixed;
        right: 1.5rem;
        bottom: 1.5rem;
        z-index: 100;
        transform: translateY(5rem);
        opacity: 0;
        transition: transform .35s ease, opacity .35s ease;
    }
    .premium-toast.show { transform: translateY(0); opacity: 1; }
    .premium-home .reviews-marquee {
        overflow: hidden;
        mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
    }
    .premium-home .reviews-track {
        display: flex;
        width: max-content;
        animation: reviews-scroll 34s linear infinite;
    }
    .premium-home .reviews-track:hover { animation-play-state: paused; }
    .premium-home .review-slide { width: min(22rem, calc(100vw - 3rem)); flex-shrink: 0; }
    @keyframes reviews-scroll {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }
    @media (prefers-reduced-motion: reduce) {
        .premium-home .reviews-track { animation-play-state: paused; }
    }
</style>

<main class="premium-home">
    <div class="sticky top-20 z-40 overflow-hidden bg-gradient-to-r from-blue-700 via-indigo-700 to-blue-700 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-md sm:text-base">
        <div class="absolute inset-0 bg-[linear-gradient(110deg,transparent,rgba(255,255,255,0.12),transparent)]"></div>
        <span class="relative inline-flex flex-wrap items-center justify-center gap-2">
            <?= $homeIcon('gift', 'h-5 w-5 text-cyan-200') ?>
            <span>Limited Time: Get 500 Free SMS Credits on Signup &mdash;</span>
            <a href="https://www.mydreamstechnology.in/signup.php" class="font-black text-cyan-200 underline decoration-cyan-300/70 underline-offset-4 transition hover:text-white">Claim Now &rarr;</a>
        </span>
    </div>

    <section class="relative overflow-hidden border-b border-gray-200 bg-gradient-to-br from-gray-50 to-blue-50 py-12 dark:border-slate-800/50 dark:from-[#060c18] dark:to-[#0a1128] lg:py-16">
        <div class="premium-grid absolute inset-0 pointer-events-none"></div>
        <div class="absolute -right-28 -top-28 h-96 w-96 rounded-full bg-blue-400/20 blur-3xl"></div>
        <div class="absolute -bottom-36 left-1/3 h-80 w-80 rounded-full bg-cyan-300/20 blur-3xl dark:bg-cyan-700/10"></div>
        <svg class="absolute right-[4%] top-10 hidden h-52 w-52 text-blue-300/50 lg:block dark:text-cyan-800/30" fill="none" viewBox="0 0 220 220" aria-hidden="true">
            <circle cx="110" cy="110" r="84" stroke="currentColor" stroke-dasharray="4 10"/>
            <circle cx="110" cy="110" r="58" stroke="currentColor" stroke-dasharray="2 8"/>
            <path d="M110 7v28M110 185v28M7 110h28M185 110h28" stroke="currentColor" stroke-linecap="round"/>
            <circle cx="110" cy="110" r="9" fill="currentColor"/>
        </svg>
        <div class="relative z-10 mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div>
                <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-white/80 px-4 py-2 text-sm font-bold uppercase tracking-wide text-blue-700 shadow-sm dark:border-blue-800 dark:bg-slate-900/70 dark:text-blue-300">
                    <span class="h-2.5 w-2.5 animate-pulse rounded-full bg-green-500"></span>#1 CPaaS Provider in Tamil Nadu
                </div>
                <h1 class="font-heading text-4xl font-black leading-tight text-slate-950 sm:text-5xl lg:text-6xl dark:text-white">Reach Lakhs of Customers with <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">One Click</span> Bulk SMS Messaging</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">My Dreams Technology powers SMEs across Tamil Nadu with Bulk SMS, WhatsApp Business API, IVR, and Voice Call services &mdash; fast, reliable, and DLT-compliant.</p>
                <div class="mt-8 grid max-w-xl grid-cols-2 gap-3">
                    <?php foreach ([['message', '98%', 'SMS Open Rate'], ['bolt', '<3s', 'Avg Delivery Time'], ['coin', '&#8377;0.10', 'Starting Per SMS'], ['rocket', '5 Cr+', 'SMS Delivered']] as [$icon, $number, $label]): ?>
                        <div class="premium-stat flex items-center gap-3 rounded-2xl border border-blue-100 bg-white/80 p-4 shadow-sm backdrop-blur dark:border-slate-700 dark:bg-slate-900/70">
                            <span class="premium-icon rounded-xl bg-blue-50 p-2 text-blue-600 dark:bg-slate-800 dark:text-cyan-400"><?= $homeIcon($icon) ?></span>
                            <div><strong class="block text-xl font-black text-blue-700 dark:text-cyan-300"><?= $number ?></strong><span class="text-xs text-slate-500 dark:text-slate-400"><?= $label ?></span></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="https://www.mydreamstechnology.in/signup.php" class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-6 py-4 font-bold text-white shadow-lg shadow-blue-600/25 transition hover:-translate-y-1 hover:bg-blue-700"><?= $homeIcon('rocket', 'h-5 w-5') ?> Start Free Trial</a>
                    <a href="tel:+917824998877" class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-6 py-4 font-bold text-slate-900 transition hover:-translate-y-1 dark:border-slate-700 dark:bg-slate-800 dark:text-white"><?= $homeIcon('phone', 'h-5 w-5') ?> Call +91 78249 98877</a>
                </div>
                <div class="mt-7 flex flex-wrap gap-x-5 gap-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    <?php foreach (['Zero Setup Cost', 'DLT Compliant', '24/7 Support', 'Pay Per Use'] as $trust): ?>
                        <span class="inline-flex items-center gap-2"><?= $homeIcon('check', 'h-4 w-4 text-green-500') ?> <?= $trust ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="premium-panel relative rounded-[2rem] border border-blue-100 bg-white/80 p-6 shadow-2xl shadow-blue-900/10 backdrop-blur dark:border-slate-700 dark:bg-slate-900/75">
                <svg class="absolute -right-8 -top-9 h-24 w-24 text-blue-500/15 dark:text-cyan-400/15" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 96 96" aria-hidden="true"><path d="M20 28h56v34H45L30 76V62H20V28Z"/><path d="M32 40h32M32 50h22"/><circle cx="48" cy="48" r="43" stroke-dasharray="3 7"/></svg>
                <div class="mb-5 flex items-center justify-between"><div><p class="text-sm font-bold text-blue-600 dark:text-cyan-400">SMS CAMPAIGN PREVIEW</p><p class="mt-1 text-xs text-slate-500">Promotional campaign dashboard</p></div><span class="rounded-full bg-green-100 px-3 py-1 text-xs font-bold text-green-700 dark:bg-green-900/50 dark:text-green-300">Live</span></div>
                <div class="rounded-2xl bg-blue-600 p-5 text-sm leading-7 text-white shadow-lg">Hi Ravi! Get 30% OFF on your next order. Use code <strong>MDT30</strong>. Valid till today midnight. Shop now: bit.ly/xyz</div>
                <p class="mt-3 text-xs text-slate-500">Delivered to 45,000 contacts &middot; 2 minutes ago</p>
                <div class="mt-6 grid grid-cols-3 gap-3">
                    <?php foreach ([['98.7%', 'Delivery'], ['1.2s', 'Avg. Speed'], ['&#8377;0.09', 'Per SMS']] as [$number, $label]): ?>
                        <div class="rounded-xl bg-blue-50 p-3 text-center dark:bg-slate-800"><strong class="block text-lg text-blue-700 dark:text-cyan-300"><?= $number ?></strong><span class="text-xs text-slate-500 dark:text-slate-400"><?= $label ?></span></div>
                    <?php endforeach; ?>
                </div>
                <div class="absolute -right-5 -top-5 rounded-xl border border-green-200 bg-white px-4 py-3 text-xs font-bold text-slate-700 shadow-lg dark:border-green-900 dark:bg-slate-800 dark:text-slate-200"><span class="mr-2 inline-block h-2 w-2 rounded-full bg-green-500"></span>1,24,500 SMS Delivered</div>
                <div class="absolute -bottom-5 -left-5 rounded-xl border border-amber-200 bg-white px-4 py-3 text-xs font-bold text-slate-700 shadow-lg dark:border-amber-900 dark:bg-slate-800 dark:text-slate-200"><span class="mr-2 inline-block h-2 w-2 rounded-full bg-amber-500"></span>Campaign ROI: 12x</div>
            </div>
        </div>
    </section>

    <section class="bg-white py-7 dark:bg-[#0a0f1c]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <p class="mb-6 text-center text-xs font-bold uppercase tracking-[0.2em] text-slate-500">Trusted by 1000+ businesses</p>
            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                <?php foreach ([['heart', 'Healthcare'], ['building', 'Banking'], ['book', 'Education'], ['store', 'E-Commerce'], ['hotel', 'Hotels'], ['home', 'Real Estate']] as [$icon, $label]): ?><div class="premium-stat flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-gray-50 p-3 text-sm font-bold text-slate-600 dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300"><?= $homeIcon($icon, 'h-5 w-5 text-blue-600') ?> <?= $label ?></div><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-10 dark:bg-[#060c18]">
        <div class="mx-auto grid max-w-7xl grid-cols-2 gap-4 px-4 sm:px-6 lg:grid-cols-4 lg:px-8">
            <?php foreach ([['1000+', 'Happy SME Clients Across Tamil Nadu'], ['3+ Yrs', 'Of Trusted Industry Experience'], ['7+', 'Districts Covered in Tamil Nadu'], ['98.7%', 'SMS Delivery Success Rate']] as [$number, $label]): ?>
                <div class="premium-card rounded-2xl border border-blue-100 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900"><strong class="block text-3xl font-black text-blue-600 dark:text-cyan-400"><?= $number ?></strong><span class="mt-2 block text-sm text-slate-500 dark:text-slate-400"><?= $label ?></span></div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="relative overflow-hidden bg-white py-14 lg:py-16 dark:bg-[#0a0f1c]">
        <svg class="absolute -right-20 top-16 h-72 w-72 text-blue-100 dark:text-blue-950" fill="none" stroke="currentColor" viewBox="0 0 240 240" aria-hidden="true"><circle cx="120" cy="120" r="86"/><circle cx="120" cy="120" r="56" stroke-dasharray="5 8"/><path d="m76 124 25 25 63-63"/><path d="M120 18v26M120 196v26M18 120h26M196 120h26"/></svg>
        <div class="mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-2 lg:px-8">
            <div><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Why Bulk SMS</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">The Impact of Bulk SMS<br>on Your Business</h2>
                <div class="mt-5 space-y-4 leading-8 text-slate-600 dark:text-slate-300">
                    <p>Bulk SMS is a powerful business communication tool that allows companies to send thousands of text messages simultaneously to their customers, prospects, or employees &mdash; all from a single dashboard.</p>
                    <p>Whether you're sending <strong class="text-slate-950 dark:text-white">promotional offers, OTP verifications, payment reminders, appointment alerts</strong>, or <strong class="text-slate-950 dark:text-white">emergency notifications</strong>, Bulk SMS delivers your message to any mobile number across all Indian networks in under 3 seconds.</p>
                    <p>My Dreams Technology is Tamil Nadu's most trusted Bulk SMS service provider, offering DLT-compliant messaging, real-time delivery reports, and 24/7 dedicated support &mdash; all at the most competitive pricing in the industry.</p>
                </div>
                <div class="mt-7 space-y-4"><?php foreach ([['bolt', 'Instant Delivery', 'Messages delivered across all networks in under 3 seconds'], ['shield', 'DLT & TRAI Compliant', 'Fully compliant with all TRAI regulations. We handle DLT registration for you - free of cost.'], ['chart', 'Real-Time Reports', 'Live delivery analytics with status updates per recipient']] as [$icon, $title, $text]): ?><div class="flex gap-4"><span class="premium-icon rounded-xl bg-blue-50 p-3 text-blue-600 dark:bg-slate-800 dark:text-cyan-400"><?= $homeIcon($icon) ?></span><div><strong class="text-slate-950 dark:text-white"><?= $title ?></strong><p class="text-sm text-slate-500 dark:text-slate-400"><?= $text ?></p></div></div><?php endforeach; ?></div>
            </div>
            <div class="relative z-10 grid grid-cols-2 gap-4"><?php foreach ([['98%', 'SMS Open Rate vs 20% for email'], ['<3s', 'Average delivery time across all networks'], ['&#8377;0.10', 'Starting price per SMS - no hidden fees'], ['5 Cr+', 'SMS delivered successfully to date']] as [$number, $label]): ?><div class="premium-card rounded-2xl border border-blue-100 bg-blue-50 p-6 dark:border-slate-700 dark:bg-slate-900"><strong class="text-3xl font-black text-blue-700 dark:text-cyan-300"><?= $number ?></strong><p class="mt-2 text-sm text-slate-500 dark:text-slate-400"><?= $label ?></p></div><?php endforeach; ?></div>
        </div>
    </section>

    <section id="products" class="bg-slate-50 py-14 lg:py-16 dark:bg-[#060c18]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Our Products</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">Everything Your Business Needs<br>to Communicate Better</h2><p class="mt-4 text-slate-600 dark:text-slate-300">Six powerful channels under one roof &mdash; choose what fits your business, pay only for what you use.</p></div>
            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($products as [$icon, $title, $text, $url, $linkText, $features]): ?><a href="<?= $url ?>" class="premium-card group rounded-3xl border border-gray-200 bg-white p-7 shadow-sm transition hover:-translate-y-2 hover:border-blue-300 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900 dark:hover:border-blue-700"><span class="premium-icon inline-flex rounded-2xl bg-blue-50 p-4 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white dark:bg-slate-800 dark:text-cyan-400"><?= $homeIcon($icon) ?></span><h3 class="mt-5 text-xl font-bold text-slate-950 dark:text-white"><?= $title ?></h3><p class="mt-3 leading-7 text-slate-600 dark:text-slate-400"><?= $text ?></p><ul class="mt-5 space-y-2 text-sm text-slate-600 dark:text-slate-300"><?php foreach ($features as $feature): ?><li class="flex gap-2"><?= $homeIcon('check', 'h-5 w-5 text-green-500') ?> <?= $feature ?></li><?php endforeach; ?></ul><span class="mt-6 inline-flex font-bold text-blue-600 dark:text-cyan-400"><?= $linkText ?> &rarr;</span></a><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="industries" class="bg-white py-14 lg:py-16 dark:bg-[#0a0f1c]">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Industries We Serve</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">Messaging Solutions for<br>Every Industry</h2><p class="mx-auto mt-4 max-w-2xl text-slate-600 dark:text-slate-300">From healthcare to e-commerce, our platform is trusted by businesses across Tamil Nadu.</p><div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5"><?php foreach ($industries as [$icon, $label]): ?><div class="premium-card rounded-2xl border border-gray-200 bg-gray-50 p-6 dark:border-slate-800 dark:bg-slate-900"><?= $homeIcon($icon, 'mx-auto h-8 w-8 text-blue-600 dark:text-cyan-400') ?><h3 class="mt-4 font-bold text-slate-900 dark:text-white"><?= $label ?></h3></div><?php endforeach; ?></div></div>
    </section>

    <section id="how-it-works" class="bg-slate-50 py-14 lg:py-16 dark:bg-[#060c18]">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Simple Process</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">Go Live in 4 Simple Steps</h2><p class="mx-auto mt-4 max-w-2xl text-slate-600 dark:text-slate-300">No technical expertise needed. Be sending messages to your customers within the hour.</p><div class="mt-12 grid gap-5 md:grid-cols-4"><?php foreach ([['user', 'Create Free Account', 'Sign up in 2 minutes with just your name, email, and phone number. Zero setup cost.'], ['shield', 'Complete DLT Registration', 'We guide you through TRAI DLT compliance - our team handles it at no extra charge.'], ['upload', 'Upload Contacts & Template', 'Import your contact list via CSV or API. Create and get your SMS template approved fast.'], ['send', 'Send & Track Live', 'Launch your campaign and monitor delivery reports in real time from your dashboard.']] as $index => [$icon, $title, $text]): ?><div class="premium-card rounded-3xl border border-blue-100 bg-white p-7 dark:border-slate-800 dark:bg-slate-900"><span class="inline-flex rounded-full bg-blue-50 px-3 py-1 text-sm font-black text-blue-500 dark:bg-slate-800">0<?= $index + 1 ?></span><?= $homeIcon($icon, 'mx-auto mt-4 h-8 w-8 text-blue-600 dark:text-cyan-400') ?><h3 class="mt-4 font-bold text-slate-950 dark:text-white"><?= $title ?></h3><p class="mt-2 text-sm leading-6 text-slate-500 dark:text-slate-400"><?= $text ?></p></div><?php endforeach; ?></div><a href="https://www.mydreamstechnology.in/signup.php" class="mt-10 inline-flex rounded-xl bg-blue-600 px-6 py-4 font-bold text-white shadow-lg shadow-blue-600/25 transition hover:-translate-y-1 hover:bg-blue-700">Get Started Free &rarr;</a></div>
    </section>

    <section id="pricing" class="bg-white py-14 lg:py-16 dark:bg-[#0a0f1c]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><div class="text-center"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Pricing</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">Transparent, Affordable<br>SMS Pricing Plans</h2><p class="mt-4 text-slate-600 dark:text-slate-300">Pay only for what you use. No setup fees. No hidden charges. Cancel anytime.</p></div><div class="mt-12 grid gap-6 lg:grid-cols-3"><?php
        $plans = [
            ['Starter', 'Perfect for small businesses & startups', '&#8377;0.18', 'per SMS &middot; Min. 10,000 credits', ['Promotional SMS', 'DLT Registration Support', 'Basic Dashboard', 'Email Support', 'Real-Time Reports'], 'https://www.mydreamstechnology.in/signup.php', 'Get Started Free'],
            ['Growth', 'Best for growing SMEs', '&#8377;0.13', 'per SMS &middot; Min. 50,000 credits', ['Promotional + Transactional', 'OTP SMS + SMS API', 'DLT Full Setup - Free', 'Advanced Dashboard', 'WhatsApp Support', 'Dedicated Account Manager'], 'https://www.mydreamstechnology.in/signup.php', 'Start Free Trial'],
            ['Enterprise', 'For high-volume businesses', '&#8377;0.10', 'per SMS &middot; Custom volume', ['All Growth features', 'Priority Routing', 'Custom Sender ID', 'Reseller Panel Available', '24/7 Phone Support', 'SLA Agreement'], 'https://www.mydreamstechnology.in/contact.php', 'Contact Sales'],
        ];
        foreach ($plans as $index => [$title, $text, $price, $unit, $features, $url, $button]): ?><div class="premium-card rounded-3xl border <?= $index === 1 ? 'border-blue-600 bg-gradient-to-br from-blue-600 to-indigo-700 text-white shadow-xl shadow-blue-600/20 lg:-translate-y-3' : 'border-gray-200 bg-gray-50 text-slate-950 dark:border-slate-800 dark:bg-slate-900 dark:text-white' ?> p-8"><?php if ($index === 1): ?><span class="rounded-full bg-white/15 px-3 py-1 text-xs font-black uppercase tracking-wider text-cyan-100">Most Popular</span><?php endif; ?><h3 class="mt-4 text-2xl font-black"><?= $title ?></h3><p class="mt-2 <?= $index === 1 ? 'text-blue-100' : 'text-slate-500 dark:text-slate-400' ?>"><?= $text ?></p><p class="mt-8 text-4xl font-black"><?= $price ?></p><p class="mt-2 text-sm <?= $index === 1 ? 'text-blue-100' : 'text-slate-500 dark:text-slate-400' ?>"><?= $unit ?></p><ul class="mt-6 space-y-3 text-sm"><?php foreach ($features as $feature): ?><li class="flex gap-2"><?= $homeIcon('check', 'h-5 w-5 ' . ($index === 1 ? 'text-cyan-200' : 'text-green-500')) ?> <?= $feature ?></li><?php endforeach; ?></ul><a href="<?= $url ?>" class="mt-8 inline-flex rounded-xl <?= $index === 1 ? 'bg-white text-blue-700 shadow-lg' : 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' ?> px-5 py-3 font-bold transition hover:-translate-y-1"><?= $button ?></a></div><?php endforeach; ?></div></div>
    </section>

    <section id="contact" class="relative overflow-hidden bg-gradient-to-br from-blue-700 to-indigo-900 py-14 lg:py-16 text-white">
        <svg class="absolute -left-20 -top-20 h-80 w-80 text-white/10" fill="none" stroke="currentColor" viewBox="0 0 240 240" aria-hidden="true"><circle cx="120" cy="120" r="95" stroke-dasharray="3 9"/><circle cx="120" cy="120" r="65"/><path d="M52 120h136M120 52v136"/></svg>
        <div class="relative z-10 mx-auto grid max-w-7xl gap-10 px-4 sm:px-6 lg:grid-cols-2 lg:px-8"><div><span class="text-sm font-bold uppercase tracking-wider text-cyan-200">Get a Free Demo</span><h2 class="mt-3 font-heading text-4xl font-black">Start Growing Your Business<br>with <span class="text-cyan-200">Smart Messaging</span> Today</h2><p class="mt-5 leading-8 text-blue-100">Talk to our Tamil Nadu-based experts and discover the right messaging solution for your business. Free consultation, no commitments.</p><div class="mt-8 grid gap-4 sm:grid-cols-2"><?php foreach ([['gift', '500 Free SMS Credits', 'Start testing immediately - no credit card required.'], ['bolt', 'Go Live in Under 1 Hour', 'Our team handles setup and DLT registration for you.'], ['handshake', 'Dedicated Account Manager', 'One point of contact available round the clock in Tamil.'], ['chart', 'Live Dashboard & Reports', 'Track every message, click, and conversion in real time.']] as [$icon, $title, $text]): ?><div class="rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur"><span class="text-cyan-200"><?= $homeIcon($icon) ?></span><h3 class="mt-3 font-bold"><?= $title ?></h3><p class="mt-1 text-sm leading-6 text-blue-100"><?= $text ?></p></div><?php endforeach; ?></div></div><form class="premium-form premium-panel rounded-3xl bg-white/95 p-6 text-slate-900 shadow-xl backdrop-blur"><h3 class="text-xl font-black">Book a Free Demo</h3><p class="mt-1 text-sm text-slate-500">Fill in your details &mdash; our team calls you within 2 hours.</p><div class="mt-5 grid gap-4 sm:grid-cols-2"><label class="text-sm font-bold">First Name *<input class="mt-2 w-full rounded-xl border border-gray-200 p-3 font-normal" type="text" placeholder="Arjun" id="fname"></label><label class="text-sm font-bold">Last Name<input class="mt-2 w-full rounded-xl border border-gray-200 p-3 font-normal" type="text" placeholder="Kumar" id="lname"></label><label class="text-sm font-bold">Mobile Number *<input class="mt-2 w-full rounded-xl border border-gray-200 p-3 font-normal" type="tel" placeholder="+91 98765 43210" id="phone"></label><label class="text-sm font-bold">Business Email<input class="mt-2 w-full rounded-xl border border-gray-200 p-3 font-normal" type="email" placeholder="you@company.com" id="email"></label><label class="text-sm font-bold sm:col-span-2">Service You're Interested In *<select class="mt-2 w-full rounded-xl border border-gray-200 bg-white p-3 font-normal" id="service"><option value="">&mdash; Select a Service &mdash;</option><option>Bulk SMS Service</option><option>WhatsApp Business API</option><option>OTP SMS / SMS API</option><option>Voice Call Service</option><option>IVR / Cloud Telephony</option><option>RCS &mdash; Rich Media</option><option>All Services</option></select></label><label class="text-sm font-bold sm:col-span-2">Company / Business Name<input class="mt-2 w-full rounded-xl border border-gray-200 p-3 font-normal" type="text" placeholder="My Company Pvt Ltd" id="company"></label><label class="text-sm font-bold sm:col-span-2">Message (Optional)<textarea class="mt-2 w-full rounded-xl border border-gray-200 p-3 font-normal" rows="3" placeholder="Tell us your use case or any questions..." id="message"></textarea></label><button class="rounded-xl bg-gradient-to-r from-blue-600 to-indigo-700 px-5 py-3 font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-1 sm:col-span-2" type="button" onclick="submitForm()">Book My Free Demo &rarr;</button></div><p class="mt-4 text-center text-xs text-slate-500"><?= $homeIcon('lock', 'mr-1 inline h-4 w-4') ?> Your data is 128-bit encrypted and never shared with third parties.</p></form></div>
    </section>

    <section class="bg-white py-14 lg:py-16 dark:bg-[#0a0f1c]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><div class="text-center"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Client Reviews</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">1000+ Happy Businesses<br>Can't Be Wrong</h2><p class="mt-4 text-slate-600 dark:text-slate-300">Real feedback from SMEs across Tamil Nadu who use My Dreams Technology every day.</p></div><div class="reviews-marquee mt-10"><div class="reviews-track gap-6 py-3"><?php
        $reviews = [
            ['Rajesh Kannan', 'Owner, Kannan Textiles - Coimbatore', '"We switched from another provider to My Dreams Technology and the difference is night and day. Delivery is instant, the dashboard is so easy to use, and their support team is always available. Highly recommended for any Tamil Nadu business!"'],
            ['Sangeetha Priya', 'Owner, SP Jewellery, Coimbatore', '"The WhatsApp Business API integration was done in just a day. Our customer responses went up by 3x. The team speaks Tamil and understands our business needs very well."'],
            ['Dr. Meenakshi', 'Medical Director, Madurai Clinic', '"We use Bulk SMS for appointment reminders and OTP for our patient portal. Extremely reliable. Their pay-as-you-use model is perfect for our clinic\'s budget."'],
            ['Dr. Priya Subramanian', 'Director, Priya Healthcare - Chennai', '"We use My Dreams Technology for our OTP and appointment reminder SMS. The API integration was simple, and our developers were done in a day. The 99.9% delivery rate is not just a claim - we\'ve seen it live in our reports."'],
            ['Suresh Murugan', 'Principal, Sri Venkateswara School - Madurai', '"As a school management, we send attendance alerts, fee reminders and exam notifications daily to thousands of parents. My Dreams Technology handles all of it flawlessly at a price no other provider could match."'],
            ['Ramesh Kumar', 'Founder, Chennai Textiles Pvt Ltd', '"We switched from another provider and the difference is night and day. Messages reach customers instantly and the live reports help us track every campaign. Excellent support team too!"'],
        ];
        foreach (array_merge($reviews, $reviews) as [$name, $role, $review]): ?><article class="review-slide premium-card rounded-3xl border border-gray-200 bg-gray-50 p-7 dark:border-slate-800 dark:bg-slate-900"><p class="text-yellow-500">&starf;&starf;&starf;&starf;&starf;</p><p class="mt-4 leading-7 text-slate-600 dark:text-slate-300"><?= $review ?></p><h3 class="mt-6 font-bold text-slate-950 dark:text-white"><?= $name ?></h3><p class="text-sm text-slate-500"><?= $role ?></p></article><?php endforeach; ?></div></div></div>
    </section>

    <section id="faq" class="bg-slate-50 py-14 lg:py-16 dark:bg-[#060c18]">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8"><div class="text-center"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">FAQ</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">Frequently Asked Questions</h2><p class="mt-4 text-slate-600 dark:text-slate-300">Everything you need to know before getting started.</p></div><div class="mt-10 grid gap-4"><?php
        $faqs = [
            ['What is Bulk SMS Service?', 'Bulk SMS is a service that lets businesses send thousands of text messages simultaneously. It\'s used for promotions, OTPs, payment alerts, appointment reminders, and more - reaching customers on any mobile network instantly.'],
            ['Is DLT registration mandatory?', 'Yes, TRAI mandates DLT (Distributed Ledger Technology) registration for all commercial SMS in India. We assist you through the entire registration process - entity, headers, and templates - at zero extra cost.'],
            ['Do you offer a free trial?', 'Absolutely! Sign up for a free account and receive 500 test credits to explore our platform, test delivery, and check reports - before committing to any paid plan. No credit card required.'],
            ['How fast are messages delivered?', 'Transactional SMS and OTPs are delivered in under 2-3 seconds on average across all major Indian telecom networks including Jio, Airtel, BSNL, and Vi. Promotional messages are delivered based on DND windows as defined by TRAI.'],
            ['Can I integrate SMS API with my app?', 'Yes! Our SMS API supports HTTP, PHP, Java, .NET and more. Developer documentation with sample code is available free. Our technical team is available 24/7 for integration support at no additional charge.'],
            ['What are your pricing plans?', 'We follow a pay-per-use model with no hidden fees. Credits start from as low as &#8377;0.10/SMS for enterprise volumes. Our Starter plan begins at &#8377;0.18/SMS and Growth plan at &#8377;0.13/SMS. Visit our pricing section or call us for a custom quote.'],
        ];
        foreach ($faqs as [$question, $answer]): ?><details class="premium-card group rounded-2xl border border-gray-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900"><summary class="cursor-pointer list-none font-bold text-slate-950 dark:text-white"><?= $question ?></summary><p class="mt-3 leading-7 text-slate-600 dark:text-slate-400"><?= $answer ?></p></details><?php endforeach; ?></div></div>
    </section>

    <section class="relative overflow-hidden bg-white py-14 lg:py-16 text-center dark:bg-[#0a0f1c]">
        <svg class="absolute left-1/2 top-1/2 h-[28rem] w-[28rem] -translate-x-1/2 -translate-y-1/2 text-blue-100/70 dark:text-blue-950/50" fill="none" stroke="currentColor" viewBox="0 0 300 300" aria-hidden="true"><circle cx="150" cy="150" r="118" stroke-dasharray="4 10"/><circle cx="150" cy="150" r="84"/><circle cx="150" cy="150" r="48" stroke-dasharray="3 8"/></svg>
        <div class="relative z-10 mx-auto max-w-3xl px-4"><span class="text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-cyan-400">Ready to Get Started?</span><h2 class="mt-3 font-heading text-4xl font-black text-slate-950 dark:text-white">Grow Your Business With<br><span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">Smart Messaging</span> Today</h2><p class="mt-5 text-slate-600 dark:text-slate-300">Join 1000+ Tamil Nadu businesses already using My Dreams Technology. Setup is free, go live in under an hour.</p><div class="mt-8 flex flex-wrap justify-center gap-4"><a href="https://www.mydreamstechnology.in/signup.php" class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-700 px-7 py-4 font-bold text-white shadow-lg shadow-blue-600/25 transition hover:-translate-y-1"><?= $homeIcon('rocket', 'h-5 w-5') ?> Start Free &mdash; No Card Needed</a><a href="https://calendly.com/mydreamstechnology/bookademo" class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-7 py-4 font-bold text-slate-900 shadow-sm transition hover:-translate-y-1 dark:border-slate-700 dark:bg-slate-800 dark:text-white"><?= $homeIcon('calendar', 'h-5 w-5 text-blue-600 dark:text-cyan-400') ?> Book a Demo</a></div></div>
    </section>
</main>

<div class="premium-toast rounded-2xl border border-green-300 bg-white px-5 py-4 text-sm font-bold text-green-700 shadow-xl dark:border-green-800 dark:bg-slate-900 dark:text-green-300" id="toast">
    <?= $homeIcon('check', 'mr-2 inline h-5 w-5') ?> Thank you! We'll call you within 2 hours.
</div>

<script>
    function submitForm() {
        const fname = document.getElementById('fname').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const service = document.getElementById('service').value;

        if (!fname || !phone || !service) {
            alert('Please fill in Name, Mobile Number, and Service to continue.');
            return;
        }

        const toast = document.getElementById('toast');
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 4000);

        ['fname', 'lname', 'phone', 'email', 'company', 'message'].forEach(id => {
            const element = document.getElementById(id);
            if (element) element.value = '';
        });
        document.getElementById('service').value = '';
    }
</script>
