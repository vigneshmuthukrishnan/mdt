<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Dreams Technology is a leading CPaaS provider in Tamilnadu offering Bulk SMS, WhatsApp Business API, and RCS Messaging services.">
    <title>My Dreams Technology - Bulk SMS & WhatsApp API Service Provider</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Line Awesome & Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        indigo: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                            950: '#1e1b4b',
                        },
                        slate: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                            950: '#020617',
                        },
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'blob': 'blob 7s infinite',
                        'pulse-slow': 'pulse 6s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'spin-slow': 'spin 12s linear infinite',
                        'dash': 'dash 20s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        dash: {
                            'to': { 'stroke-dashoffset': '1000' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; scroll-behavior: smooth; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }
        
        .dark .glass-card {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .text-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #4f46e5 50%, #7c3aed 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .step-line::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 100%;
            width: 100%;
            height: 2px;
            background: repeating-linear-gradient(to right, #cbd5e1 0, #cbd5e1 5px, transparent 5px, transparent 10px);
            z-index: -1;
        }

        @media (max-width: 1024px) {
            .step-line::after { display: none; }
        }

        .marquee-container {
            mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
            overflow: hidden;
        }

        .marquee-content {
            display: flex;
            gap: 1.5rem;
            animation: scroll 30s linear infinite;
            width: max-content;
        }

        .marquee-content:hover {
            animation-play-state: paused;
        }

        .hover-glow:hover {
            box-shadow: 0 0 20px rgba(37, 99, 235, 0.4);
            border-color: rgba(37, 99, 235, 0.5);
        }

        .reveal-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .reveal-up.active {
            opacity: 1;
            transform: translateY(0);
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .pricing-card-popular {
            background: linear-gradient(145deg, #1e40af, #1e3a8a);
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased pt-20">

    <!-- Header -->
    <?php include("header.php"); ?>

    <?php include("homepage-main.php"); ?>

    <!-- Footer -->
    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <script src="assets/js/vendors/jquery-3.7.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
            });

            // FAQ Toggle
            $('button').on('click', function() {
                const content = $(this).next();
                const icon = $(this).find('i');
                
                content.slideToggle();
                icon.toggleClass('rotate-45');
            });
            
            // Dynamic Navbar
            $(window).scroll(function() {
                if ($(window).scrollTop() > 50) {
                    $('#navbar').addClass('shadow-lg bg-white/95 dark:bg-dark/95');
                } else {
                    $('#navbar').removeClass('shadow-lg bg-white/95 dark:bg-dark/95');
                }
            });
        });
    </script>
</body>
</html>
