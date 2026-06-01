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

    <!-- Hero Section -->
    <section class="relative pt-16 pb-20 lg:pt-18 lg:pb-32 overflow-hidden bg-gradient-to-br from-gray-50 to-blue-50 dark:from-[#060c18] dark:to-[#0a1128] border-b border-gray-200 dark:border-slate-800/50 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Grid Background -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M54.627 0l.83.83v58.34h-58.34v-.83l56.68-56.68zM53.797 0h.83v.83l-.83-.83z\' fill=\'%232563eb\' fill-opacity=\'0.05\' fill-rule=\'evenodd\'/%3E%3C/svg%3E')] dark:opacity-10 opacity-40"></div>
            
            <!-- Animated Glowing Orbs -->
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-500/30 dark:bg-blue-600/20 rounded-full blur-[100px] animate-[pulse_6s_ease-in-out_infinite]"></div>
            <div class="absolute top-40 -left-20 w-72 h-72 bg-cyan-400/20 dark:bg-cyan-500/10 rounded-full blur-[80px] animate-[pulse_8s_ease-in-out_infinite_alternate]"></div>
            <div class="absolute bottom-0 right-1/3 w-80 h-80 bg-indigo-500/20 dark:bg-indigo-600/15 rounded-full blur-[90px] animate-[pulse_7s_ease-in-out_infinite]"></div>
            
            <!-- Floating Particles -->
            <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-400 rounded-full shadow-[0_0_10px_rgba(96,165,250,0.8)] animate-[ping_3s_cubic-bezier(0,0,0.2,1)_infinite]"></div>
            <div class="absolute top-1/3 right-1/4 w-2 h-2 bg-cyan-400 rounded-full shadow-[0_0_8px_rgba(34,211,238,0.8)] animate-[ping_4s_cubic-bezier(0,0,0.2,1)_infinite_1s]"></div>
            <div class="absolute bottom-1/4 left-1/3 w-4 h-4 bg-indigo-400 rounded-full shadow-[0_0_12px_rgba(129,140,248,0.8)] animate-[ping_5s_cubic-bezier(0,0,0.2,1)_infinite_2s]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Left Content (Text & Buttons) -->
                <div class="lg:col-span-6 xl:col-span-7">
                    <!-- Badge -->
                    <div class="inline-flex items-center space-x-2 bg-white/80 dark:bg-slate-800/80 backdrop-blur-md px-4 py-2 rounded-full border border-blue-100 dark:border-slate-700 shadow-sm mb-8 transform transition-transform hover:-translate-y-1" data-aos="fade-down" data-aos-duration="800">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-600 dark:bg-blue-500"></span>
                        </span>
                        <span class="text-sm font-semibold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-300 tracking-wide uppercase">
                            Most Trusted CPaaS Provider In Tamilnadu
                        </span>
                    </div>
                    
                    <!-- Main Heading -->
                    <h1 class="text-5xl sm:text-6xl lg:text-5xl xl:text-7xl font-black text-gray-900 dark:text-white leading-[1.1] mb-6 font-heading tracking-tight" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        We Are The Fittest <br class="hidden lg:block" />
                        <span class="relative inline-block mt-2">
                            <span class="relative z-10 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 dark:from-blue-400 dark:via-indigo-400 dark:to-cyan-300">
                                Bulk Messaging Partner
                            </span>
                            <!-- Decorative underline -->
                            <svg class="absolute w-full h-4 -bottom-1 left-0 -z-10 text-blue-300 dark:text-blue-600/40" viewBox="0 0 200 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.00021 6.84033C47.851 1.70617 114.737 -1.63753 197.989 6.84033" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                    </h1>
                    
                    <!-- Subheading -->
                    <p class="text-lg sm:text-xl text-gray-600 dark:text-slate-300 mb-10 leading-relaxed max-w-2xl font-medium" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        We Offered High-Quality BulkSMS Service At Affordable Price. We Are Most Reliable, Economical And Fast Deliver Bulk Messaging Partner.
                    </p>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8 max-w-xl" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <!-- Card 1 -->
                        <div class="bg-white/60 dark:bg-slate-800/40 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 rounded-2xl p-4 flex items-center space-x-4 transition-all duration-300 hover:border-blue-500/50 dark:hover:border-blue-500/50 group shadow-[rgba(50,_50,_93,_0.25)_0px_13px_27px_-5px,_rgba(0,_0,_0,_0.3)_0px_8px_16px_-8px] dark:shadow-[rgba(0,_0,_0,_0.5)_0px_13px_27px_-5px] transform hover:-translate-y-2 hover:scale-105 transition-all duration-500" data-tilt data-tilt-max="10">
                            <div class="w-10 h-10 flex-shrink-0 filter drop-shadow-sm group-hover:scale-110 transition-transform duration-300 text-blue-500 dark:text-blue-400 group-hover:text-cyan-500 dark:group-hover:text-cyan-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-full h-full">
                                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z"/>
                                    <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl md:text-3xl font-black text-blue-600 dark:text-cyan-400 font-heading tracking-tight leading-none mb-1 group-hover:text-blue-700 dark:group-hover:text-cyan-300 transition-colors">
                                    98%
                                </div>
                                <div class="text-sm text-gray-600 dark:text-slate-400 font-medium transition-colors duration-300">
                                    SMS Open Rate
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white/60 dark:bg-slate-800/40 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 rounded-2xl p-4 flex items-center space-x-4 transition-all duration-300 hover:border-blue-500/50 dark:hover:border-blue-500/50 group shadow-[rgba(50,_50,_93,_0.25)_0px_13px_27px_-5px,_rgba(0,_0,_0,_0.3)_0px_8px_16px_-8px] dark:shadow-[rgba(0,_0,_0,_0.5)_0px_13px_27px_-5px] transform hover:-translate-y-2 hover:scale-105 transition-all duration-500" data-tilt data-tilt-max="10">
                            <div class="w-10 h-10 flex-shrink-0 filter drop-shadow-sm group-hover:scale-110 transition-transform duration-300 text-blue-500 dark:text-blue-400 group-hover:text-cyan-500 dark:group-hover:text-cyan-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-full h-full">
                                    <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl md:text-3xl font-black text-blue-600 dark:text-cyan-400 font-heading tracking-tight leading-none mb-1 group-hover:text-blue-700 dark:group-hover:text-cyan-300 transition-colors">
                                    &lt;3S
                                </div>
                                <div class="text-sm text-gray-600 dark:text-slate-400 font-medium transition-colors duration-300">
                                    Avg Delivery Time
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white/60 dark:bg-slate-800/40 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 rounded-2xl p-4 flex items-center space-x-4 transition-all duration-300 hover:border-blue-500/50 dark:hover:border-blue-500/50 group shadow-[rgba(50,_50,_93,_0.25)_0px_13px_27px_-5px,_rgba(0,_0,_0,_0.3)_0px_8px_16px_-8px] dark:shadow-[rgba(0,_0,_0,_0.5)_0px_13px_27px_-5px] transform hover:-translate-y-2 hover:scale-105 transition-all duration-500" data-tilt data-tilt-max="10">
                            <div class="w-10 h-10 flex-shrink-0 filter drop-shadow-sm group-hover:scale-110 transition-transform duration-300 text-blue-500 dark:text-blue-400 group-hover:text-cyan-500 dark:group-hover:text-cyan-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-full h-full">
                                    <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"/>
                                    <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd"/>
                                    <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl md:text-3xl font-black text-blue-600 dark:text-cyan-400 font-heading tracking-tight leading-none mb-1 group-hover:text-blue-700 dark:group-hover:text-cyan-300 transition-colors">
                                    ₹0.10
                                </div>
                                <div class="text-sm text-gray-600 dark:text-slate-400 font-medium transition-colors duration-300">
                                    Starting Per SMS
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white/60 dark:bg-slate-800/40 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 rounded-2xl p-4 flex items-center space-x-4 transition-all duration-300 hover:border-blue-500/50 dark:hover:border-blue-500/50 group shadow-[rgba(50,_50,_93,_0.25)_0px_13px_27px_-5px,_rgba(0,_0,_0,_0.3)_0px_8px_16px_-8px] dark:shadow-[rgba(0,_0,_0,_0.5)_0px_13px_27px_-5px] transform hover:-translate-y-2 hover:scale-105 transition-all duration-500" data-tilt data-tilt-max="10">
                            <div class="w-10 h-10 flex-shrink-0 filter drop-shadow-sm group-hover:scale-110 transition-transform duration-300 text-blue-500 dark:text-blue-400 group-hover:text-cyan-500 dark:group-hover:text-cyan-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-full h-full">
                                    <path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 0 1 .75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 0 1 9.75 22.5a.75.75 0 0 1-.75-.75v-4.131A15.838 15.838 0 0 1 6.382 15H2.25a.75.75 0 0 1-.75-.75 6.75 6.75 0 0 1 7.815-6.666ZM15 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" clip-rule="evenodd"/>
                                    <path d="M5.26 17.242a.75.75 0 1 0-.897-1.203 5.243 5.243 0 0 0-2.05 5.022.75.75 0 0 0 .625.627 5.243 5.243 0 0 0 5.022-2.051.75.75 0 1 0-1.202-.897 3.744 3.744 0 0 1-3.008 1.51c0-1.23.592-2.323 1.51-3.008Z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl md:text-3xl font-black text-blue-600 dark:text-cyan-400 font-heading tracking-tight leading-none mb-1 group-hover:text-blue-700 dark:group-hover:text-cyan-300 transition-colors">
                                    5 Cr+
                                </div>
                                <div class="text-sm text-gray-600 dark:text-slate-400 font-medium transition-colors duration-300">
                                    SMS Delivered
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <a href="#" class="group relative inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-300 bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 overflow-hidden shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:shadow-[0_0_30px_rgba(37,99,235,0.6)] transform hover:-translate-y-1">
                            <span class="absolute w-0 h-0 transition-all duration-500 ease-out bg-white rounded-full group-hover:w-56 group-hover:h-56 opacity-10"></span>
                            <span class="relative flex items-center">
                                Start Free Trial
                                <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-gray-900 transition-all duration-300 bg-white border border-gray-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white rounded-xl hover:bg-gray-50 dark:hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 shadow-sm hover:shadow-md transform hover:-translate-y-1">
                            <svg class="w-5 h-5 mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Schedule Demo
                        </a>
                    </div>
                </div>

                <!-- Right Content (Interactive Image/Graphic) -->
                <div class="lg:col-span-6 xl:col-span-5 relative mt-12 lg:mt-0" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200">
                    
                    <!-- Decorative background glow -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/30 to-cyan-400/30 blur-[80px] rounded-full transform scale-110 pointer-events-none -z-10 animate-[pulse_4s_ease-in-out_infinite]"></div>
                    
                    <!-- Main Image Container -->
                    <div class="relative w-full aspect-square max-w-lg mx-auto" data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.2">
                        
                        <!-- Floating Elements Animation Container -->
                        <div class="absolute inset-0 z-20 pointer-events-none">
                            <!-- Notification Bubble 1 -->
                            <div class="absolute -top-6 -right-4 bg-white dark:bg-slate-800 p-4 rounded-2xl shadow-xl border border-gray-100 dark:border-slate-700 backdrop-blur-md animate-[bounce_5s_ease-in-out_infinite]">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/50 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-gray-900 dark:text-white">Delivered</p>
                                        <p class="text-xs text-gray-500 dark:text-slate-400">Just now</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Notification Bubble 2 -->
                            <div class="absolute top-1/2 -left-12 bg-white dark:bg-slate-800 p-3 rounded-2xl shadow-xl border border-gray-100 dark:border-slate-700 backdrop-blur-md animate-[bounce_6s_ease-in-out_infinite_1s]">
                                <div class="flex items-center space-x-2">
                                    <div class="flex -space-x-1">
                                        <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                                        <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                                    </div>
                                    <p class="text-sm font-bold text-gray-900 dark:text-white">10k+ Messages Sent</p>
                                </div>
                            </div>
                            
                            <!-- Delivery Rate Card -->
                            <div class="absolute -bottom-6 right-4 bg-gradient-to-br from-blue-600 to-indigo-700 p-4 rounded-2xl shadow-[0_10px_30px_rgba(37,99,235,0.4)] border border-blue-400/30 backdrop-blur-md animate-[bounce_4s_ease-in-out_infinite_2s] text-white">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-2xl font-black">99.9%</p>
                                        <p class="text-xs text-blue-100 font-medium">Delivery Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image itself inside glassmorphism -->
                        <div class="w-full h-full rounded-[2.5rem] bg-white/50 dark:bg-slate-800/40 backdrop-blur-xl border border-white/60 dark:border-slate-700/50 p-4 shadow-2xl relative z-10 overflow-hidden group">
                            <!-- Inner gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-50/50 dark:to-slate-900/50 mix-blend-overlay z-10 pointer-events-none"></div>
                            <img src="assets/images/My-Dreams-Technology-BulkSMS-Provider.jpeg" alt="Bulk SMS Service Communication" class="w-full h-full object-cover rounded-3xl relative z-0 transform transition-transform duration-700 group-hover:scale-105" onerror="this.src='assets/img/My Dreams Technology-BulkSMS Provider.jpeg'">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Trusted By & Stats Section -->
    <section class="py-12 bg-white dark:bg-[#0a0f1c] relative overflow-hidden transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Trusted By Row -->
            <div class="flex flex-col lg:flex-row items-center pb-10 border-b border-gray-200 dark:border-slate-800/80 gap-10" data-aos="fade-up">
                <div class="text-xs md:text-sm font-bold text-gray-500 dark:text-slate-400 tracking-[0.15em] uppercase text-center lg:text-left shrink-0">
                    Trusted by 100+ Businesses
                </div>
                
                <div class="marquee-container flex-1">
                    <div class="marquee-content flex items-center gap-12">
                        <!-- Set 1 -->
                        <img src="assets/img/brands/alaya.jpg" alt="Alaya" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/aswins.jpg" alt="Aswins" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/gems_gold.jpg" alt="Gems Gold" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/indian_institute_of_management.jpg" alt="IIM" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/indian_railways.jpg" alt="Indian Railways" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/kovai.jpg" alt="Kovai" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/ksr_educational_institutions.jpg" alt="KSR Institutions" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/lucas_tvs.jpg" alt="Lucas TVS" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/novotel.jpg" alt="Novotel" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/rotary_international.jpg" alt="Rotary" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/srivenkateshwaraa.jpg" alt="Sri Venkateshwaraa" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/texvalley.jpg" alt="Texvalley" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        
                        <!-- Set 2 -->
                        <img src="assets/img/brands/alaya.jpg" alt="Alaya" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/aswins.jpg" alt="Aswins" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/gems_gold.jpg" alt="Gems Gold" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/indian_institute_of_management.jpg" alt="IIM" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/indian_railways.jpg" alt="Indian Railways" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/kovai.jpg" alt="Kovai" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/ksr_educational_institutions.jpg" alt="KSR Institutions" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/lucas_tvs.jpg" alt="Lucas TVS" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/novotel.jpg" alt="Novotel" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/rotary_international.jpg" alt="Rotary" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/srivenkateshwaraa.jpg" alt="Sri Venkateshwaraa" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                        <img src="assets/img/brands/texvalley.jpg" alt="Texvalley" class="h-12 w-auto opacity-60 hover:opacity-100 transition-all duration-300 grayscale hover:grayscale-0">
                    </div>
                </div>
            </div>

            <!-- Big Stats Banner -->
            <div class="mt-12 bg-gray-50 dark:bg-[#0c1427] rounded-[2rem] border border-gray-200 dark:border-[#1a2744] p-8 lg:p-12 shadow-sm relative overflow-hidden shadow-[rgba(0,_0,_0,_0.3)_0px_19px_38px,_rgba(0,_0,_0,_0.22)_0px_15px_12px] dark:shadow-[rgba(0,_0,_0,_0.7)_0px_20px_40px] transform hover:-translate-y-2 transition-all duration-500" data-tilt data-tilt-max="3" data-aos="fade-up" data-aos-delay="100">
                <!-- Decorative blue line at top center -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-1.5 bg-blue-500 dark:bg-[#3399ff] rounded-b-md"></div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-0 divide-y sm:divide-y-0 sm:divide-x divide-gray-200 dark:divide-[#1a2744]">
                    <!-- Stat 1 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            10+
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Experience
                        </div>
                    </div>
                    
                    <!-- Stat 2 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            3+
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Branches
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            7+
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Districts Covered in Tamil Nadu
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            98.7%
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            SMS Delivery Success Rate
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-20 bg-white dark:bg-[#0a0f1c] relative overflow-hidden transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.02\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] dark:opacity-100 opacity-10 filter invert dark:invert-0">
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-heading font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300">Why You Need <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-400">My Dreams Technology</span></h2>
                <p class="text-gray-600 dark:text-slate-400 text-lg transition-colors duration-300">We will helps you to build beautiful promotions that stand out you with
                    your customers.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 dark:bg-slate-900/80 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 p-8 rounded-[2rem] hover:border-blue-500 dark:hover:border-slate-500 shadow-sm hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 group shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:shadow-[rgba(0,_0,_0,_0.6)_0px_10px_30px]" style="transform-style: preserve-3d;" data-tilt data-tilt-max="10" data-tilt-glare data-tilt-max-glare="0.1"
                    data-aos="fade-up" data-aos-delay="100">
                    <div style="transform: translateZ(50px);"
                        class="w-16 h-16 bg-white dark:bg-slate-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300 shadow-sm dark:shadow-lg dark:shadow-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-blue-500 dark:text-blue-400 group-hover:text-white w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" style="transform: translateZ(30px);">Pay As Per Use</h3>
                    <p class="text-gray-600 dark:text-slate-400 leading-relaxed transition-colors duration-300" style="transform: translateZ(20px);">Pay Only As Per Use. Our Packages Are Designed Very
                        Economical That Fits Right into SME Business Organizations.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 dark:bg-slate-900/80 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 p-8 rounded-[2rem] hover:border-purple-500 dark:hover:border-slate-500 shadow-sm hover:shadow-2xl hover:shadow-purple-900/20 transition-all duration-500 group shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:shadow-[rgba(0,_0,_0,_0.6)_0px_10px_30px]" style="transform-style: preserve-3d;" data-tilt data-tilt-max="10" data-tilt-glare data-tilt-max-glare="0.1"
                    data-aos="fade-up" data-aos-delay="200">
                    <div style="transform: translateZ(50px);"
                        class="w-16 h-16 bg-white dark:bg-slate-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-600 transition-colors duration-300 shadow-sm dark:shadow-lg dark:shadow-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-purple-500 dark:text-purple-400 group-hover:text-white w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors" style="transform: translateZ(30px);">Dedicated Support</h3>
                    <p class="text-gray-600 dark:text-slate-400 leading-relaxed transition-colors duration-300" style="transform: translateZ(20px);">Stop Worrying About anything In The Middle Of The Process
                        Our Experts Are Available Round The Clock And Always Happy To Solve Queries.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 dark:bg-slate-900/80 backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 p-8 rounded-[2rem] hover:border-teal-500 dark:hover:border-slate-500 shadow-sm hover:shadow-2xl hover:shadow-teal-900/20 transition-all duration-500 group shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:shadow-[rgba(0,_0,_0,_0.6)_0px_10px_30px]" style="transform-style: preserve-3d;" data-tilt data-tilt-max="10" data-tilt-glare data-tilt-max-glare="0.1"
                    data-aos="fade-up" data-aos-delay="300">
                    <div style="transform: translateZ(50px);"
                        class="w-16 h-16 bg-white dark:bg-slate-800 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-teal-600 transition-colors duration-300 shadow-sm dark:shadow-lg dark:shadow-black/20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-teal-500 dark:text-teal-400 group-hover:text-white w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors" style="transform: translateZ(30px);">Highly Secured</h3>
                    <p class="text-gray-600 dark:text-slate-400 leading-relaxed transition-colors duration-300" style="transform: translateZ(20px);">Take Every Step To Protect The Privacy Of Your Data. All
                        The Data 128-Bit Encrypted And Stored On Secure Servers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid / Why Choose Us -->
    <section class="py-14 relative overflow-hidden bg-gray-50 dark:bg-[#0a0f1c] border-y border-gray-200 dark:border-slate-800 transition-colors duration-300" id="services">
        <!-- Dark Theme Background Elements -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.02\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] dark:opacity-100 opacity-10 filter invert dark:invert-0">
        </div>
        <div
            class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-200/50 dark:bg-primary-900/20 blur-[120px] rounded-full pointer-events-none transition-colors duration-300">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-cyan-200/50 dark:bg-cyan-900/20 blur-[120px] rounded-full pointer-events-none transition-colors duration-300">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mb-20" data-aos="fade-up">
                <!-- Left -->
                <div>
                    <h2 class="text-3xl md:text-4xl lg:text-4xl font-heading font-black text-gray-900 dark:text-white leading-tight transition-colors duration-300">
                        We Have A Wide Array Of <br class="hidden lg:block" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-blue-400 dark:to-cyan-400">Services
                            In Our Kitty!</span>
                    </h2>
                </div>
                <!-- Right -->
                <div class="flex flex-col lg:items-start lg:border-l border-gray-200 dark:border-slate-700/50 lg:pl-12 transition-colors duration-300">
                    <p class="text-gray-600 dark:text-slate-400 text-lg md:text-xl mb-8 leading-relaxed max-w-lg transition-colors duration-300">
                        We Love To Help SME Companies To Grow Their Business Across Globe With Our Well Established
                        Service.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white px-8 py-4 rounded-full font-bold text-lg transition-all duration-300 shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:shadow-[0_0_35px_rgba(37,99,235,0.6)] transform hover:-translate-y-1">
                        Signup Now <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-2 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1: Bulk SMS -->
                <div class="group flex flex-col bg-slate-900/80 backdrop-blur-sm border border-slate-700/50 rounded-[2rem] overflow-hidden hover:border-slate-500 hover:shadow-2xl hover:shadow-blue-900/20 transition-all duration-500 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:shadow-[rgba(0,_0,_0,_0.6)_0px_10px_30px] transform hover:-translate-y-3 hover:scale-105 perspective-1000" data-tilt data-tilt-max="4" data-tilt-glare="true" data-tilt-max-glare="0.2"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="h-72 bg-gradient-to-b from-slate-800/40 to-slate-900 flex justify-center items-end relative overflow-hidden pt-10">
                        <div
                            class="absolute inset-0 bg-blue-500/5 group-hover:bg-blue-500/10 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 w-3/4 h-1/2 bg-blue-500/20 blur-[60px] rounded-full group-hover:bg-blue-500/30 transition-colors duration-500">
                        </div>

                        <div
                            class="w-60 h-[115%] bg-slate-950 rounded-t-[2rem] border-x-4 border-t-4 border-slate-800 shadow-2xl relative flex flex-col group-hover:-translate-y-4 transition-transform duration-500">
                            <div class="absolute top-0 inset-x-0 h-5 flex justify-center z-20">
                                <div class="w-24 h-full bg-slate-800 rounded-b-xl"></div>
                            </div>
                            <!-- Screen Content -->
                            <div class="flex-1 bg-[#f0f2f5] mt-6 flex flex-col relative overflow-hidden">
                                <div class="bg-white p-3 flex items-center shadow-sm z-10">
                                    <div
                                        class="w-6 h-6 rounded-full bg-purple-500 flex items-center justify-center text-white text-[10px] font-bold">
                                        M</div>
                                    <div class="ml-2 text-xs font-bold text-gray-800">CP-MYDREM</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto text-gray-400 text-[10px] w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd"/></svg>
                                </div>
                                <div class="flex-1 p-3 space-y-3 bg-[#e4e5e8] flex flex-col">
                                    <div class="text-center text-gray-500 text-[8px] my-1 font-medium">Today 12:03 PM
                                    </div>
                                    <div
                                        class="bg-white text-gray-800 p-2.5 rounded-2xl rounded-tl-sm max-w-[85%] leading-relaxed shadow-sm text-[9px] self-start border border-gray-100">
                                        Dear Muthu, Your OTP for login is <strong class="text-blue-600">220690</strong>.
                                        Valid for 30 minutes. Please do not share this OTP.
                                    </div>
                                    <div
                                        class="bg-white text-gray-800 p-2.5 rounded-2xl rounded-tl-sm max-w-[85%] leading-relaxed shadow-sm text-[9px] self-start border border-gray-100">
                                        Dear Customer, Thank You For Showing Interest in our service.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-8 flex-1 flex flex-col items-center text-center bg-slate-900/90 relative z-10 border-t border-slate-700/50">
                        <h3
                            class="text-2xl font-bold text-white mb-3 font-heading group-hover:text-blue-400 transition-colors">
                            Bulk SMS</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Reach Thousands With Fast, Reliable
                            Messaging For Promotions, Alerts, and OTPs. Send BulkSMS Instantly With Fast, Reliable
                            Delivery.</p>
                    </div>
                </div>

                <!-- Service 2: WhatsApp API -->
                <div class="group flex flex-col bg-slate-900/80 backdrop-blur-sm border border-slate-700/50 rounded-[2rem] overflow-hidden hover:border-slate-500 hover:shadow-2xl hover:shadow-green-900/20 transition-all duration-500 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:shadow-[rgba(0,_0,_0,_0.6)_0px_10px_30px] transform hover:-translate-y-3 hover:scale-105 perspective-1000" data-tilt data-tilt-max="4" data-tilt-glare="true" data-tilt-max-glare="0.2"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="h-72 bg-gradient-to-b from-slate-800/40 to-slate-900 flex justify-center items-end relative overflow-hidden pt-10">
                        <div
                            class="absolute inset-0 bg-green-500/5 group-hover:bg-green-500/10 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 w-3/4 h-1/2 bg-green-500/20 blur-[60px] rounded-full group-hover:bg-green-500/30 transition-colors duration-500">
                        </div>

                        <div
                            class="w-60 h-[115%] bg-slate-950 rounded-t-[2rem] border-x-4 border-t-4 border-slate-800 shadow-2xl relative flex flex-col group-hover:-translate-y-4 transition-transform duration-500">
                            <div class="absolute top-0 inset-x-0 h-5 flex justify-center z-20">
                                <div class="w-24 h-full bg-slate-800 rounded-b-xl"></div>
                            </div>
                            <!-- Screen Content -->
                            <div
                                class="flex-1 bg-[#efeae2] mt-6 flex flex-col relative overflow-hidden bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
                                <div class="bg-[#00a884] p-3 flex items-center shadow-sm z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white text-[12px] mr-2 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"/></svg>
                                    <div
                                        class="w-7 h-7 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
                                        <img src="assets/logo.png" class="w-5" alt="logo" />
                                    </div>
                                    <div class="ml-2 flex flex-col overflow-hidden">
                                        <span
                                            class="text-[11px] font-bold text-white flex items-center leading-tight whitespace-nowrap">My
                                            Dreams Tech <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-[9px] text-white ml-1 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg></span>
                                        <span class="text-[8px] text-white/90 leading-tight">Official Business
                                            Account</span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto text-white text-[12px] w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd"/></svg>
                                </div>
                                <div class="flex-1 p-2.5 space-y-2 bg-transparent flex flex-col">
                                    <div
                                        class="text-center bg-white/70 mx-auto px-3 py-1 rounded-lg text-gray-600 text-[8px] my-1 font-medium shadow-sm">
                                        Today</div>

                                    <div
                                        class="bg-white p-2.5 rounded-xl rounded-tl-sm max-w-[90%] leading-relaxed shadow-sm text-gray-800 self-start text-[9px]">
                                        <div
                                            class="w-full h-14 bg-green-50 rounded mb-2 flex items-center justify-center border border-green-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-green-500 text-2xl w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z"/></svg>
                                        </div>
                                        <strong class="text-[10px]">Automate & Scale! 🚀</strong><br>
                                        Engage with the WhatsApp Business API. Fast, secure, and reliable.
                                        <div class="text-[7px] text-gray-400 text-right mt-1.5">12:05 PM</div>
                                    </div>

                                    <div class="flex flex-col space-y-1.5 w-[90%] self-start">
                                        <button
                                            class="bg-white text-[#00a884] border border-gray-100 rounded-lg py-1.5 text-center shadow-sm font-bold text-[9px]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-1.5 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M15.75 2.25H21a.75.75 0 0 1 .75.75v5.25a.75.75 0 0 1-1.5 0V4.81L8.03 17.03a.75.75 0 0 1-1.06-1.06L19.19 3.75h-3.44a.75.75 0 0 1 0-1.5Zm-10.5 4.5a1.5 1.5 0 0 0-1.5 1.5v10.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5V10.5a.75.75 0 0 1 1.5 0v8.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V8.25a3 3 0 0 1 3-3h8.25a.75.75 0 0 1 0 1.5H5.25Z" clip-rule="evenodd"/></svg>Visit Website</button>
                                        <button
                                            class="bg-white text-[#00a884] border border-gray-100 rounded-lg py-1.5 text-center shadow-sm font-bold text-[9px]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-1.5 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"/></svg>Call Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-8 flex-1 flex flex-col items-center text-center bg-slate-900/90 relative z-10 border-t border-slate-700/50">
                        <h3
                            class="text-2xl font-bold text-white mb-3 font-heading group-hover:text-green-400 transition-colors">
                            Business WhatsApp API</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Automate And Scale Customer Engagement
                            With The WhatsApp Business API Fast, Secure, And Reliable Messaging! Enhance Customer
                            Engagement.</p>
                    </div>
                </div>

                <!-- Service 3: RCS -->
                <div class="group flex flex-col bg-slate-900/80 backdrop-blur-sm border border-slate-700/50 rounded-[2rem] overflow-hidden hover:border-slate-500 hover:shadow-2xl hover:shadow-cyan-900/20 transition-all duration-500 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:shadow-[rgba(0,_0,_0,_0.6)_0px_10px_30px] transform hover:-translate-y-3 hover:scale-105 perspective-1000" data-tilt data-tilt-max="4" data-tilt-glare="true" data-tilt-max-glare="0.2"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="h-72 bg-gradient-to-b from-slate-800/40 to-slate-900 flex justify-center items-end relative overflow-hidden pt-10">
                        <div
                            class="absolute inset-0 bg-cyan-500/5 group-hover:bg-cyan-500/10 transition-colors duration-500">
                        </div>
                        <div
                            class="absolute bottom-0 w-3/4 h-1/2 bg-cyan-500/20 blur-[60px] rounded-full group-hover:bg-cyan-500/30 transition-colors duration-500">
                        </div>

                        <div
                            class="w-60 h-[115%] bg-slate-950 rounded-t-[2rem] border-x-4 border-t-4 border-slate-800 shadow-2xl relative flex flex-col group-hover:-translate-y-4 transition-transform duration-500">
                            <div class="absolute top-0 inset-x-0 h-5 flex justify-center z-20">
                                <div class="w-24 h-full bg-slate-800 rounded-b-xl"></div>
                            </div>
                            <!-- Screen Content -->
                            <div class="flex-1 bg-gray-50 mt-6 flex flex-col relative overflow-hidden">
                                <div class="bg-white p-3 flex items-center shadow-sm border-b border-gray-100 z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-gray-500 text-[12px] mr-2 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"/></svg>
                                    <div
                                        class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 text-[10px] shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd"/></svg>
                                    </div>
                                    <div class="ml-2 flex flex-col">
                                        <span
                                            class="text-[11px] font-bold text-gray-800 flex items-center leading-tight">My
                                            Dreams Tech <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-[9px] text-blue-500 ml-1 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg></span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-auto text-gray-500 text-[12px] mr-3 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-gray-500 text-[12px] w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd"/></svg>
                                </div>
                                <div class="flex-1 p-3 space-y-2.5 flex flex-col bg-gray-100/50">
                                    <div class="text-center text-gray-400 text-[8px] my-1 font-medium">Today 10:30 AM
                                    </div>

                                    <!-- Rich Card -->
                                    <div
                                        class="bg-white rounded-2xl max-w-[90%] shadow-md border border-gray-100 overflow-hidden self-start">
                                        <div
                                            class="h-16 bg-gradient-to-r from-blue-500 to-cyan-500 relative flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-white text-3xl opacity-80 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 0 1 .75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 0 1 9.75 22.5a.75.75 0 0 1-.75-.75v-4.131A15.838 15.838 0 0 1 6.382 15H2.25a.75.75 0 0 1-.75-.75 6.75 6.75 0 0 1 7.815-6.666ZM15 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" clip-rule="evenodd"/>
        <path d="M5.26 17.242a.75.75 0 1 0-.897-1.203 5.243 5.243 0 0 0-2.05 5.022.75.75 0 0 0 .625.627 5.243 5.243 0 0 0 5.022-2.051.75.75 0 1 0-1.202-.897 3.744 3.744 0 0 1-3.008 1.51c0-1.23.592-2.323 1.51-3.008Z"/></svg>
                                        </div>
                                        <div class="p-3">
                                            <div class="font-bold text-gray-800 mb-1 text-[11px]">Upgrade to RCS</div>
                                            <div class="text-[9px] text-gray-500 leading-snug mb-2">Elevate customer
                                                engagement with interactive buttons & rich media.</div>
                                            <div class="flex space-x-2 mt-2">
                                                <button
                                                    class="flex-1 bg-blue-50 text-blue-600 rounded-lg py-1.5 text-center font-bold text-[9px] border border-blue-100">Explore</button>
                                                <button
                                                    class="flex-1 bg-blue-600 text-white rounded-lg py-1.5 text-center font-bold text-[9px] shadow-md shadow-blue-500/30">Buy
                                                    Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-8 flex-1 flex flex-col items-center text-center bg-slate-900/90 relative z-10 border-t border-slate-700/50">
                        <h3
                            class="text-2xl font-bold text-white mb-3 font-heading group-hover:text-cyan-400 transition-colors">
                            RCS - Rich Media</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">Enhance Messaging With Interactive
                            Buttons, and Secure Business Communication! Next-Gen messaging With Rich Media Real Time
                            Engagement.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Split Content Section -->
    <section class="py-24 bg-white dark:bg-[#0a0f1c] relative overflow-hidden border-t border-gray-200 dark:border-slate-800/50 transition-colors duration-300">
        <!-- Ambient Backgrounds -->
        <div class="absolute top-1/4 left-0 w-96 h-96 bg-blue-100 dark:bg-blue-600/10 rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-blob pointer-events-none transition-colors duration-300"></div>
        <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-purple-100 dark:bg-purple-600/10 rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-blob animation-delay-2000 pointer-events-none transition-colors duration-300"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- First Split -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
                <div data-aos="fade-right">
                    <div class="relative w-full max-w-lg mx-auto" style="transform-style: preserve-3d; perspective: 1000px;" data-tilt data-tilt-max="6" data-tilt-perspective="1000" data-tilt-glare data-tilt-max-glare="0.2">
                        <!-- Abstract Background Shapes -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/30 to-purple-500/30 blur-3xl rounded-[4rem] transform rotate-12 -z-10 animate-[pulse_6s_ease-in-out_infinite]"></div>
                        <!-- Back Image/Card -->
                        <div class="absolute top-6 -left-6 w-full h-full bg-gradient-to-br from-white to-gray-50 dark:from-slate-800 dark:to-slate-900 rounded-[2rem] shadow-xl border border-gray-200 dark:border-slate-700 opacity-60 transform -rotate-3" style="transform: translateZ(-30px);"></div>
                        <!-- Main Image Container -->
                        <div class="relative bg-white/80 dark:bg-slate-800/80 p-3 rounded-[2rem] shadow-2xl border border-white/60 dark:border-slate-700/50 backdrop-blur-xl overflow-hidden group" style="transform: translateZ(40px);">
                            <img src="https://mydreamstechnology.in/assets/img/MDT-Home%20%20page%20About%20us.jpg"
                                alt="Cloud Infrastructure"
                                class="w-full h-auto rounded-[1.5rem] object-cover transform transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="inline-flex items-center space-x-2 bg-gray-100 dark:bg-slate-800/50 border border-gray-200 dark:border-slate-700 rounded-full px-4 py-1.5 mb-6 backdrop-blur-md transition-colors duration-300">
                        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                        <span class="text-xs font-semibold text-gray-700 dark:text-slate-300 tracking-wider uppercase transition-colors duration-300">Our Journey</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-heading font-bold text-gray-900 dark:text-white mb-6 leading-tight transition-colors duration-300">Story
                        Behind Our Successful Journey And How We <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-500">Differentiate With Others</span></h2>
                    <p class="text-gray-600 dark:text-slate-400 mb-6 leading-relaxed transition-colors duration-300">
                        My Dreams Technology Is One Of Tamilnadu Leading BulkSMS Service Providers With 1000+ Happy SME Clients Over 10 Years Of Experience And We Presence 3+ Major Districts In Tamilnadu. We Love To Help Business People Grow Their Business With Our Trademark BulkSMS Services, OTP SMS, SMS API, Business WhatsApp API, WhatsApp Broadcast, WhatsApp Chat Automation, Voice Call, Message Marketing and IVR Service.
                    </p>
                    <!-- <p class="text-gray-600 dark:text-slate-400 mb-6 leading-relaxed transition-colors duration-300">
                        Our Clientele Are Happy With Our Owing To Our Continuous Support, Real-Time Delivery Reports,
                        Pay For What You Use Features, And Our Reachability Through All The Network Carriers Available.
                        Valuable Customer Relationships Are Established Easily With Our Service Let's Join Our With Us
                    </p>
                    <p class="text-gray-600 dark:text-slate-400 mb-8 leading-relaxed transition-colors duration-300">
                        Our independent consultants, free from the internal demands of traditional firms, can focus on
                        what really matters: delivering lasting impact. Our consultants opt in to the projects they
                        genuinely want to work on, committing wholeheartedly.
                    </p> -->
                    <!-- <a href="#"
                        class="text-blue-600 dark:text-blue-400 font-bold hover:text-blue-500 dark:hover:text-blue-300 transition-colors inline-flex items-center group">
                        Let's Join Our Team <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-2 transform group-hover:translate-x-1 transition-transform w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                    </a> -->
            <div class="mt-12 bg-gray-50 dark:bg-[#0c1427] rounded-[2rem] border border-gray-200 dark:border-[#1a2744] p-8 lg:p-12 shadow-sm relative overflow-hidden shadow-[rgba(0,_0,_0,_0.3)_0px_19px_38px,_rgba(0,_0,_0,_0.22)_0px_15px_12px] dark:shadow-[rgba(0,_0,_0,_0.7)_0px_20px_40px] transform hover:-translate-y-2 transition-all duration-500" data-tilt data-tilt-max="3" data-aos="fade-up" data-aos-delay="100">
                <!-- Decorative blue line at top center -->
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-24 h-1.5 bg-blue-500 dark:bg-[#3399ff] rounded-b-md"></div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-0 divide-y sm:divide-y-0 sm:divide-x divide-gray-200 dark:divide-[#1a2744]">
                    <!-- Stat 1 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            100+
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Meetings
                        </div>
                    </div>
                    
                    <!-- Stat 2 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            25+
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Experts
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            24/7
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Support
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="flex flex-col items-center text-center px-4 pt-6 sm:pt-0">
                        <div class="text-4xl lg:text-5xl font-black text-blue-600 dark:text-[#3399ff] font-heading mb-3 tracking-tight">
                            10+
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-medium">
                            Products
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>

            <!-- Second Split -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" class="order-2 lg:order-1">
                    <div class="inline-flex items-center space-x-2 bg-gray-100 dark:bg-slate-800/50 border border-gray-200 dark:border-slate-700 rounded-full px-4 py-1.5 mb-6 backdrop-blur-md transition-colors duration-300">
                        <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span>
                        <span class="text-xs font-semibold text-gray-700 dark:text-slate-300 tracking-wider uppercase transition-colors duration-300">Growth</span>
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-heading font-bold text-gray-900 dark:text-white mb-6 leading-tight transition-colors duration-300">How
                        BulkSMS Help To <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-500">Grow Our Business</span></h2>
                    <p class="text-gray-600 dark:text-slate-400 mb-6 leading-relaxed transition-colors duration-300">
                        We are very well known for our Swiftness and Dependency. Our efficient BulkSMS Service promises
                        to deliver your messages to any number of recipients, anytime anywhere.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-500 dark:text-blue-400 mt-1 mr-3 text-lg transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg>
                            <span class="text-gray-700 dark:text-slate-300 font-medium transition-colors duration-300">Send Sensitive Information OTP, Greetings, Paid
                                Alert, Due Reminders, etc.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-500 dark:text-blue-400 mt-1 mr-3 text-lg transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg>
                            <span class="text-gray-700 dark:text-slate-300 font-medium transition-colors duration-300">Reach Out Thousands Of Your Target Audience In
                                Single Click.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-500 dark:text-blue-400 mt-1 mr-3 text-lg transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg>
                            <span class="text-gray-700 dark:text-slate-300 font-medium transition-colors duration-300">Develop Trust And Build Business Relationships With
                                Customers.</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="text-blue-600 dark:text-blue-400 font-bold hover:text-blue-500 dark:hover:text-blue-300 transition-colors inline-flex items-center group">
                        Let's Join Our Team <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-2 transform group-hover:translate-x-1 transition-transform w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
                <div data-aos="fade-left" class="order-1 lg:order-2">
                    <div class="relative w-full max-w-lg mx-auto" style="transform-style: preserve-3d; perspective: 1000px;" data-tilt data-tilt-max="6" data-tilt-perspective="1000" data-tilt-glare data-tilt-max-glare="0.2">
                        <!-- Abstract Background Shapes -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-cyan-500/30 to-blue-500/30 blur-3xl rounded-[4rem] transform rotate-12 -z-10 animate-[pulse_6s_ease-in-out_infinite]"></div>
                        <!-- Back Image/Card -->
                        <div class="absolute top-6 -right-6 w-full h-full bg-gradient-to-bl from-white to-gray-50 dark:from-slate-800 dark:to-slate-900 rounded-[2rem] shadow-xl border border-gray-200 dark:border-slate-700 opacity-60 transform rotate-3" style="transform: translateZ(-30px);"></div>
                        <!-- Main Image Container -->
                        <div class="relative bg-white/80 dark:bg-slate-800/80 p-3 rounded-[2rem] shadow-2xl border border-white/60 dark:border-slate-700/50 backdrop-blur-xl overflow-hidden group" style="transform: translateZ(40px);">
                            <img src="https://mydreamstechnology.in/assets/img/My%20Dreams%20-%20Bulk%20SMS%20Service1.png"
                                alt="Cloud Infrastructure"
                                class="w-full h-auto rounded-[1.5rem] object-cover transform transition-transform duration-700 group-hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Smart Messaging / Free Demo Section -->
    <section class="py-24 bg-white dark:bg-[#0a0f1c] relative overflow-hidden border-t border-gray-200 dark:border-slate-800/50 transition-colors duration-300">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-200/50 dark:bg-blue-900/20 blur-[120px] rounded-full pointer-events-none transition-colors duration-300"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-cyan-200/50 dark:bg-cyan-900/20 blur-[120px] rounded-full pointer-events-none transition-colors duration-300"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div data-aos="fade-right">
                    <div class="inline-flex items-center space-x-2 border border-blue-500/30 rounded-full px-4 py-1.5 mb-6 backdrop-blur-md transition-colors duration-300">
                        <span class="text-xs font-semibold text-blue-500 tracking-wider uppercase transition-colors duration-300">Get a Free Demo</span>
                    </div>
                    
                    <h2 class="text-4xl lg:text-6xl font-heading font-black text-gray-900 dark:text-white mb-6 leading-tight transition-colors duration-300">
                        Start Growing <br/>
                        Your Business <br/>
                        with <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Smart</span> <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">Messaging</span> <br/>
                        Today
                    </h2>
                    
                    <p class="text-gray-600 dark:text-slate-400 text-lg mb-10 leading-relaxed transition-colors duration-300 max-w-lg">
                        Talk to our Tamil Nadu-based experts and discover the right messaging solution for your business. Free consultation, no commitments.
                    </p>

                    <div class="space-y-8">
                        <!-- Item 1 -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-slate-800 border border-gray-200 dark:border-slate-700/50 flex items-center justify-center shrink-0 mt-1 mr-4 shadow-sm transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-red-500">
                                  <path d="M9.375 3a1.875 1.875 0 000 3.75h1.875v4.5H3.375A1.875 1.875 0 011.5 9.375v-.75c0-1.036.84-1.875 1.875-1.875h3.193A3.375 3.375 0 0112 2.753a3.375 3.375 0 015.432 3.997h3.193c1.035 0 1.875.84 1.875 1.875v.75c0 1.036-.84 1.875-1.875 1.875H12.75v-4.5h1.875a1.875 1.875 0 10-3.75 0v.75a.75.75 0 01-1.5 0v-.75a1.875 1.875 0 00-1.875-1.875zM12.75 12.75v7.5h7.875a1.875 1.875 0 001.875-1.875v-3.75a1.875 1.875 0 00-1.875-1.875H12.75zM3.375 12.75A1.875 1.875 0 001.5 14.625v3.75C1.5 19.41 2.34 20.25 3.375 20.25h7.875v-7.5H3.375z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1 transition-colors duration-300">10% Free SMS Credits</h4>
                                <p class="text-gray-600 dark:text-slate-400 text-sm transition-colors duration-300">Start testing immediately — no credit card required.</p>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-slate-800 border border-gray-200 dark:border-slate-700/50 flex items-center justify-center shrink-0 mt-1 mr-4 shadow-sm transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-yellow-500">
                                  <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1 transition-colors duration-300">Go Live In Within 24 Hours</h4>
                                <p class="text-gray-600 dark:text-slate-400 text-sm transition-colors duration-300">Our team handles setup and DLT registration for you.</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-slate-800 border border-gray-200 dark:border-slate-700/50 flex items-center justify-center shrink-0 mt-1 mr-4 shadow-sm transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-blue-500">
                                  <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1 transition-colors duration-300">Dedicated Account Manager</h4>
                                <p class="text-gray-600 dark:text-slate-400 text-sm transition-colors duration-300">One point of contact available round the clock in Tamil.</p>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex items-start">
                            <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-slate-800 border border-gray-200 dark:border-slate-700/50 flex items-center justify-center shrink-0 mt-1 mr-4 shadow-sm transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-green-500">
                                  <path fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z" clip-rule="evenodd" />
                                  <path fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-900 dark:text-white font-bold text-lg mb-1 transition-colors duration-300">Live Dashboard & Reports</h4>
                                <p class="text-gray-600 dark:text-slate-400 text-sm transition-colors duration-300">Track every message, click, and conversion in real time.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content / Form -->
                <div data-aos="fade-left">
                    <div class="bg-gray-50 dark:bg-[#121b30] backdrop-blur-sm border border-gray-200 dark:border-slate-700/50 p-8 rounded-[2rem] shadow-[rgba(0,_0,_0,_0.1)_0px_10px_50px] dark:shadow-[rgba(0,_0,_0,_0.5)_0px_10px_50px] transition-colors duration-300 relative overflow-hidden">
                        <!-- Top blue accent line -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-400"></div>

                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 font-heading transition-colors duration-300 flex items-center">
                            Book a Free Demo <span class="ml-2 text-xl">🚀</span>
                        </h3>
                        <p class="text-gray-600 dark:text-slate-400 text-sm mb-8 transition-colors duration-300">Fill in your details — our team calls you within 2 hours.</p>

                        <form class="space-y-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">First Name *</label>
                                    <input type="text" placeholder="Arjun" class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">Last Name</label>
                                    <input type="text" placeholder="Kumar" class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">Mobile Number *</label>
                                    <input type="tel" placeholder="+91 98765 43210" class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">Business Email</label>
                                    <input type="email" placeholder="you@company.com" class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                </div>
                            </div>

                            <div class="relative">
                                <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">Service You're Interested In *</label>
                                <select class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 appearance-none" required>
                                    <option value="" disabled selected>— Select a Service —</option>
                                    <option value="bulk-sms">Bulk SMS</option>
                                    <option value="whatsapp-api">WhatsApp Business API</option>
                                    <option value="rcs">RCS Messaging</option>
                                    <option value="voice-calls">Voice Calls / IVR</option>
                                </select>
                                <div class="pointer-events-none absolute bottom-0 right-0 flex items-center px-4 pb-3.5 text-gray-500 dark:text-slate-400">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">Company / Business Name</label>
                                <input type="text" placeholder="My Company Pvt Ltd" class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 transition-colors duration-300">Message (Optional)</label>
                                <textarea rows="3" placeholder="Tell us your use case or any questions..." class="w-full bg-white dark:bg-[#0a0f1c] border border-gray-200 dark:border-slate-700/50 rounded-xl px-4 py-3 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3.5 px-6 rounded-xl transition-all duration-300 shadow-[0_0_15px_rgba(59,130,246,0.3)] hover:shadow-[0_0_25px_rgba(59,130,246,0.5)] transform hover:-translate-y-0.5 mt-4 flex items-center justify-center">
                                Book My Free Demo <span class="ml-2">→</span>
                            </button>
                            
                            <p class="text-center text-xs text-gray-500 dark:text-slate-400 mt-4 flex items-center justify-center transition-colors duration-300">
                                <span class="mr-1.5">🔒</span> Your data is 128-bit encrypted and never shared with third parties.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer API Section -->
    <section class="py-24 bg-slate-50 dark:bg-slate-950 relative overflow-hidden transition-colors duration-500" id="developers">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 bg-indigo-50 dark:bg-indigo-900/30 px-4 py-2 rounded-full border border-indigo-100 dark:border-indigo-800/50 mb-8">
                        <span class="text-[10px] font-black text-indigo-600 dark:text-indigo-400 uppercase tracking-widest">For Developers</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-heading font-black text-slate-900 dark:text-white mb-8 leading-tight tracking-tight">
                        Integrate in <span class="text-indigo-600 dark:text-indigo-400">Minutes</span>, Scale for Years.
                    </h2>
                    <p class="text-lg text-slate-500 dark:text-slate-400 mb-12 leading-relaxed">
                        Our developer-first APIs are designed with simplicity and reliability in mind. Robust, RESTful, and ready for global scale.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-slate-900 dark:text-white font-black text-sm uppercase tracking-wider mb-2">High Speed</h4>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Sub-second delivery with 99.99% uptime guarantee.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 dark:bg-indigo-900/30 flex items-center justify-center text-indigo-600 flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-slate-900 dark:text-white font-black text-sm uppercase tracking-wider mb-2">Secure Auth</h4>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Advanced API key management and IP whitelisting.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code Terminal -->
                <div class="relative" data-aos="fade-left">
                    <img src="assets/img/developer.png"
                                alt="Cloud Infrastructure"
                                class="w-full h-auto rounded-[1.5rem] object-cover transform transition-transform duration-700 group-hover:scale-105">
                    <!-- <div class="absolute -inset-4 bg-indigo-500/10 blur-3xl rounded-[3rem] -z-10"></div>
                    <div class="bg-slate-900 rounded-[2.5rem] overflow-hidden border border-slate-800 shadow-2xl">
                        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-800 bg-slate-800/50">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                            </div>
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">send_sms.php</span>
                        </div>
                        <div class="p-8 text-sm font-mono leading-relaxed text-indigo-300 overflow-x-auto">
                            <pre><code><span class="text-indigo-400">$api_key</span> = <span class="text-green-400">'MDT_KEY_...'</span>;
                    <span class="text-indigo-400">$payload</span> = [
                    <span class="text-green-400">'to'</span> => <span class="text-green-400">'919876543210'</span>,
                    <span class="text-green-400">'message'</span> => <span class="text-green-400">'Hello from MDT!'</span>,
                    <span class="text-green-400">'sender'</span> => <span class="text-green-400">'MYDRMS'</span>
                    ];

                    <span class="text-indigo-400">$response</span> = <span class="text-indigo-400">$client</span>->post(<span class="text-green-400">'/v1/send'</span>, [
                        <span class="text-green-400">'json'</span> => <span class="text-indigo-400">$payload</span>
                    ]);</code></pre>
                        </div>
                    </div>-->
                </div> 
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24 bg-white dark:bg-[#060c18] relative transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 px-4 py-2 rounded-full mb-6 border border-blue-100 dark:border-blue-800/50">
                    <span class="w-2 h-2 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    <span class="text-xs font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.2em] font-heading">Our Best Plans</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white font-heading tracking-tight mb-8">Our Best SMS Plans For You</h2>
                <p class="text-gray-600 dark:text-slate-400 text-lg max-w-2xl mx-auto font-medium">Premium BulkSMS Service At Economical Rates. Choose Your Package As Per Budget.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Startup Plan -->
                <div class="premium-card p-10 rounded-[2.5rem] flex flex-col hover-lift group" data-aos="fade-up" data-tilt>
                    <div class="mb-8">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2 font-heading">Startup</h3>
                        <span class="text-xs font-bold text-blue-500 uppercase tracking-widest">Life Time Validity</span>
                    </div>
                    <div class="mb-10">
                        <div class="text-4xl font-black text-gray-900 dark:text-white mb-2 font-heading">₹ 2,950</div>
                        <div class="text-sm font-bold text-gray-500 dark:text-slate-400 uppercase tracking-widest">10,000 SMS</div>
                    </div>
                    <ul class="space-y-4 mb-12 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> Instant Delivery
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> Web Application
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> 99.9% Uptime
                        </li>
                    </ul>
                    <a href="index.php#book-free-demo" class="w-full py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
                </div>

                <!-- Basic Plan -->
                <div class="premium-card p-10 rounded-[2.5rem] flex flex-col hover-lift group" data-aos="fade-up" data-aos-delay="100" data-tilt>
                    <div class="mb-8">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2 font-heading">Basic</h3>
                        <span class="text-xs font-bold text-blue-500 uppercase tracking-widest">Life Time Validity</span>
                    </div>
                    <div class="mb-10">
                        <div class="text-4xl font-black text-gray-900 dark:text-white mb-2 font-heading">₹ 5,900</div>
                        <div class="text-sm font-bold text-gray-500 dark:text-slate-400 uppercase tracking-widest">25,000 SMS</div>
                    </div>
                    <ul class="space-y-4 mb-12 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> Instant Delivery
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> Web Application
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> 99.9% Uptime
                        </li>
                    </ul>
                    <a href="index.php#book-free-demo" class="w-full py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
                </div>

                <!-- Advance Plan -->
                <div class="pricing-card-popular p-10 rounded-[3rem] flex flex-col hover-lift shadow-[0_30px_60px_-15px_rgba(30,64,175,0.5)] transform lg:scale-110" data-aos="fade-up" data-aos-delay="200" data-tilt>
                    <div class="absolute -top-4 right-10 px-4 py-1 bg-white text-blue-700 text-xs font-black rounded-full shadow-lg uppercase tracking-widest">Best Choice</div>
                    <div class="mb-8">
                        <h3 class="text-2xl font-black text-white mb-2 font-heading">Advance</h3>
                        <span class="text-xs font-bold text-blue-200 uppercase tracking-widest">Life Time Validity</span>
                    </div>
                    <div class="mb-10">
                        <div class="text-4xl font-black text-white mb-2 font-heading">₹ 8,260</div>
                        <div class="text-sm font-bold text-blue-100 uppercase tracking-widest">50,000 SMS</div>
                    </div>
                    <ul class="space-y-4 mb-12 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-white">
                            <i class="las la-check-circle text-blue-300 text-xl"></i> Instant Delivery
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-white">
                            <i class="las la-check-circle text-blue-300 text-xl"></i> Web Application
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-white">
                            <i class="las la-check-circle text-blue-300 text-xl"></i> 99.9% Uptime
                        </li>
                    </ul>
                    <a href="index.php#book-free-demo" class="w-full py-4 bg-white text-blue-700 rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
                </div>

                <!-- Money Saver Plan -->
                <div class="premium-card p-10 rounded-[2.5rem] flex flex-col hover-lift group" data-aos="fade-up" data-aos-delay="300" data-tilt>
                    <div class="mb-8">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-2 font-heading">Money Saver</h3>
                        <span class="text-xs font-bold text-blue-500 uppercase tracking-widest">Life Time Validity</span>
                    </div>
                    <div class="mb-10">
                        <div class="text-4xl font-black text-gray-900 dark:text-white mb-2 font-heading">₹ 15,340</div>
                        <div class="text-sm font-bold text-gray-500 dark:text-slate-400 uppercase tracking-widest">1,00,000 SMS</div>
                    </div>
                    <ul class="space-y-4 mb-12 flex-grow">
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> Instant Delivery
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> Web Application
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-gray-600 dark:text-slate-400">
                            <i class="las la-check-circle text-blue-500 text-xl"></i> 99.9% Uptime
                        </li>
                    </ul>
                    <a href="index.php#book-free-demo" class="w-full py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
                </div>
            </div>

            <div class="mt-32 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="premium-card p-10 rounded-[2.5rem] hover-lift group" data-aos="fade-up">
                    <h4 class="text-xl font-black text-gray-900 dark:text-white mb-4 font-heading">Free Account Setup</h4>
                    <p class="text-gray-500 dark:text-slate-400 font-medium leading-relaxed">Set Up Your Account Instantly Zero Cost. We Charge Only For SMS Credits.</p>
                </div>
                <div class="premium-card p-10 rounded-[2.5rem] hover-lift group" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="text-xl font-black text-gray-900 dark:text-white mb-4 font-heading">DLT Support</h4>
                    <p class="text-gray-500 dark:text-slate-400 font-medium leading-relaxed">Our Team Will Take Care of All DLT Registration Process And Approval.</p>
                </div>
                <div class="premium-card p-10 rounded-[2.5rem] hover-lift group" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="text-xl font-black text-gray-900 dark:text-white mb-4 font-heading">0% Cutting</h4>
                    <p class="text-gray-500 dark:text-slate-400 font-medium leading-relaxed">We found many companies Offering SMS At very low costs. We ensure 100% Delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Smart Messaging Solutions Section -->
    <section class="py-24 bg-white dark:bg-[#0a0f1c] relative overflow-hidden border-t border-gray-200 dark:border-slate-800/50 transition-colors duration-300">
        <!-- Ambient Backgrounds -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-100 dark:bg-blue-600/10 rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-blob pointer-events-none transition-colors duration-300"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-100 dark:bg-purple-600/10 rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-blob animation-delay-2000 pointer-events-none transition-colors duration-300"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center space-x-2 bg-gray-100 dark:bg-slate-800/50 border border-gray-200 dark:border-slate-700 rounded-full px-4 py-1.5 mb-6 backdrop-blur-md transition-colors duration-300">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-700 dark:text-slate-300 tracking-wider uppercase transition-colors duration-300">Industries We Serve</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-heading font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">Smart Messaging Solutions for Every <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-500">Business</span></h2>
                <p class="text-gray-600 dark:text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed transition-colors duration-300">Transform Communication With Smart, Automated, and Scalable Messaging Solutions for Every Industry.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5 lg:gap-6">
                <!-- Health Care -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-hand-holding-medical text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Health Care</h3>
                    </div>
                </div>

                <!-- Banking Service -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="150">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-university text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Banking Service</h3>
                    </div>
                </div>

                <!-- Educational Institutions -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-user-graduate text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Educational Institutions</h3>
                    </div>
                </div>

                <!-- Govt & Public Utilities -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="250">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-landmark text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Govt & Public Utilities</h3>
                    </div>
                </div>

                <!-- Advertising Agency -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z"/></svg>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Advertising Agency</h3>
                    </div>
                </div>

                <!-- Tours & Travel -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="350">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-plane-departure text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Tours & Travel</h3>
                    </div>
                </div>

                <!-- Hotel & Restaurant -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-hotel text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Hotel & Restaurant</h3>
                    </div>
                </div>

                <!-- Real Estate -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="450">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-home text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Real Estate</h3>
                    </div>
                </div>

                <!-- Logistics & Transportation -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-truck text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Logistics & Transportation</h3>
                    </div>
                </div>

                <!-- E-Commerce -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="550">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-6 flex flex-col items-center justify-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-shopping-cart text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[14px] md:text-[15px] group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">E-Commerce</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="py-24 bg-white dark:bg-[#0a0f1c] relative overflow-hidden border-t border-gray-200 dark:border-slate-800/50 transition-colors duration-300">
        <!-- Ambient Backgrounds -->
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-100 dark:bg-blue-600/10 rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-blob pointer-events-none transition-colors duration-300"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-purple-100 dark:bg-purple-600/10 rounded-full mix-blend-screen filter blur-[100px] opacity-70 animate-blob animation-delay-2000 pointer-events-none transition-colors duration-300"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center space-x-2 bg-gray-100 dark:bg-slate-800/50 border border-gray-200 dark:border-slate-700 rounded-full px-4 py-1.5 mb-6 backdrop-blur-md transition-colors duration-300">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-xs font-semibold text-gray-700 dark:text-slate-300 tracking-wider uppercase transition-colors duration-300">Features</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-heading font-bold text-gray-900 dark:text-white mb-6 transition-colors duration-300">How We Stand <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-500">Differ With Others?</span></h2>
                <p class="text-gray-600 dark:text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed transition-colors duration-300">We Are The Most Trustworthy, Competent And Swift BulkSMS Service For Your Business Growth</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-rupee-sign text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[1.15rem] mb-3 group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Zero Setup Cost</h3>
                        <p class="text-gray-600 dark:text-slate-400 text-[14px] leading-relaxed transition-colors duration-300">Setup The Account Instantly WithOut Any Set-Up Charges. Free of Cost!</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-desktop text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[1.15rem] mb-3 group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Powerful Dashboard</h3>
                        <p class="text-gray-600 dark:text-slate-400 text-[14px] leading-relaxed transition-colors duration-300">Enjoy our User Friendly Customized Dashboard. The UI Of Our Portal Is Pretty Simple And Easy.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 0 1 .359.852L12.982 9.75h7.268a.75.75 0 0 1 .548 1.262l-10.5 11.25a.75.75 0 0 1-1.272-.71l1.992-7.302H3.75a.75.75 0 0 1-.548-1.262l10.5-11.25a.75.75 0 0 1 .913-.143Z" clip-rule="evenodd"/></svg>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[1.15rem] mb-3 group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Instant Delivery</h3>
                        <p class="text-gray-600 dark:text-slate-400 text-[14px] leading-relaxed transition-colors duration-300">High-Priority SMS Get Delivered Instantly. Ensure Ultrafast Delivery without Any Fuss!</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="400">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <i class="fas fa-chart-line text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300"></i>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[1.15rem] mb-3 group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">Live Reports</h3>
                        <p class="text-gray-600 dark:text-slate-400 text-[14px] leading-relaxed transition-colors duration-300">Analyze Updated SMS Live Reports And Real-Time Performance Metrics.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="500">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[1.15rem] mb-3 group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">High Security</h3>
                        <p class="text-gray-600 dark:text-slate-400 text-[14px] leading-relaxed transition-colors duration-300">We Take Every Step To Protect Your Data. All The Data Is Encrypted And Stored On Secure Servers.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="relative group cursor-pointer" data-aos="fade-up" data-aos-delay="600">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl blur opacity-10 dark:opacity-0 group-hover:opacity-20 dark:group-hover:opacity-30 transition duration-500"></div>
                    <div class="relative h-full bg-gray-50 dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200 dark:border-slate-800 group-hover:border-blue-500/50 dark:group-hover:border-slate-600 rounded-2xl p-8 flex flex-col items-center text-center transition-all duration-300">
                        <div class="w-16 h-16 rounded-full bg-white dark:bg-slate-800/80 border border-gray-100 dark:border-slate-700 flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-[0_0_20px_rgba(59,130,246,0.2)] dark:group-hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-2xl text-blue-600 dark:text-blue-400 group-hover:text-blue-500 dark:group-hover:text-blue-300 transition-colors duration-300 w-[1em] h-[1em] inline-block shrink-0 align-middle filter drop-shadow-md transition-transform hover:scale-110" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd"/></svg>
                        </div>
                        <h3 class="text-gray-900 dark:text-slate-200 font-bold text-[1.15rem] mb-3 group-hover:text-blue-600 dark:group-hover:text-white transition-colors duration-300">24*7 Support</h3>
                        <p class="text-gray-600 dark:text-slate-400 text-[14px] leading-relaxed transition-colors duration-300">Our Experts Are Available Round The Clock And Always Happy To Help Your Queries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative transition-colors duration-300 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 dark:from-slate-900 dark:to-slate-800 transition-colors duration-300"></div>
        <!-- Decorative Glow in dark mode -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 dark:from-blue-500/10 dark:to-purple-500/10 blur-3xl transition-colors duration-300 pointer-events-none"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10 dark:opacity-5 transition-opacity duration-300">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-in">
            <h2 class="text-4xl md:text-5xl font-heading font-black text-white mb-6">Unlock Endless Possibilities!
                <br>Join the MDT Family Today
            </h2>
            <p class="text-blue-50 dark:text-slate-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto transition-colors duration-300">
                We Promise to Deliver the Best Quality Service for Your Business Growth. Experience Seamless, Smart, and
                Engaging Customer Interactions.
            </p>
            <a href="#"
                class="bg-white dark:bg-blue-500 text-blue-700 dark:text-white hover:bg-gray-50 dark:hover:bg-blue-600 px-10 py-4 rounded-full font-bold text-lg transition-all shadow-xl hover:shadow-2xl transform hover:-translate-y-1 inline-block border border-transparent dark:border-blue-400/30">
                Get Started Now
            </a>
        </div>
    </section>

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
                    $('#navbar').addClass('py-2 shadow-lg bg-white/95 dark:bg-dark/95').removeClass('py-4');
                } else {
                    $('#navbar').removeClass('py-2 shadow-lg bg-white/95 dark:bg-dark/95').addClass('py-4');
                }
            });
        });
    </script>
</body>
</html>