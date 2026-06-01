<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Dreams Technology">
    <meta name="author" content="My Dreams Technology">
    <meta name="keywords" content="My Dreams Technology">
    <title>Pricing | My Dreams Technology</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="canonical" href="https://www.mydreamstechnology.in/pricing.php" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Line Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    
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
                        primary: '#3b82f6',
                        secondary: '#10b981',
                        dark: '#0f172a',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <style>
        body { font-family: 'Inter', sans-serif; -webkit-font-smoothing: antialiased; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        
        .premium-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.05);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .dark .premium-card {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.1);
        }

        .text-gradient {
            background: linear-gradient(to right, #3b82f6, #60a5fa, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .pricing-card-popular {
            background: linear-gradient(145deg, #1e40af, #1e3a8a);
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-[#060c18] text-gray-800 dark:text-gray-300 antialiased pt-20 transition-colors duration-300">

    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Hero -->
    <section class="relative pt-24 pb-40 bg-[#020617] overflow-hidden border-b border-white/5 transition-colors duration-300">
        <!-- Modernized Hero Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Background Image with dynamic styling -->
            <div class="absolute inset-0 opacity-40 mix-blend-plus-lighter">
                <img src="assets/img/shape/pre-net-bg.png" alt="Background Net" class="w-full h-full object-cover scale-110 transform -rotate-3 brightness-75">
            </div>
            
            <!-- Sophisticated Overlays -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#020617] via-transparent to-[#020617]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#020617] via-transparent to-[#020617]"></div>
            
            <!-- Animated Glowing Accents -->
            <div class="absolute top-0 right-1/4 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] animate-[pulse_10s_ease-in-out_infinite]"></div>
            <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] bg-indigo-600/10 rounded-full blur-[100px] animate-[pulse_8s_ease-in-out_infinite_alternate]"></div>
            
            <!-- Glassmorphic Light Line -->
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-5xl mx-auto" data-aos="fade-up">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-md px-4 py-2 rounded-full border border-white/10 shadow-sm mb-8 transform transition-transform hover:-translate-y-1">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    <span class="text-sm font-semibold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-300 tracking-wide uppercase">
                        Economical Packages
                    </span>
                </div>

                <h1 class="text-5xl md:text-6xl xl:text-7xl font-black text-white leading-[1.1] mb-8 font-heading tracking-tight">
                    Fast. Secure. Reliable. <br />
                    <span class="text-gradient">BulkSMS</span> Service.
                </h1>
                
                <div class="flex flex-wrap items-center justify-center gap-6 mb-12">
                    <div class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-xl border border-white/10">
                        <i class="las la-check-circle text-blue-400 text-xl"></i>
                        <span class="font-bold text-gray-300">Zero Setup Cost</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-xl border border-white/10">
                        <i class="las la-check-circle text-blue-400 text-xl"></i>
                        <span class="font-bold text-gray-300">Free SMS API</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 px-4 py-2 rounded-xl border border-white/10">
                        <i class="las la-check-circle text-blue-400 text-xl"></i>
                        <span class="font-bold text-gray-300">Free DLT Support</span>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-6 justify-center">
                    <a href="signup.php" target="_blank" class="group relative px-10 py-5 bg-blue-600 text-white rounded-2xl font-black text-lg overflow-hidden transition-all hover:bg-blue-500 hover:scale-105 active:scale-95 shadow-[0_20px_40px_-10px_rgba(59,130,246,0.5)]">
                        <span class="relative flex items-center">
                            Schedule Demo
                            <svg class="w-6 h-6 ml-2 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                        </span>
                    </a>
                    <a href="signup.php" target="_blank" class="px-10 py-5 bg-white/5 hover:bg-white/10 text-white border border-white/10 rounded-2xl font-black text-lg backdrop-blur-md transition-all hover:scale-105">
                        Get Started
                    </a>
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
                    <a href="signup.php" class="w-full py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
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
                    <a href="signup.php" class="w-full py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
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
                    <a href="signup.php" class="w-full py-4 bg-white text-blue-700 rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
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
                    <a href="signup.php" class="w-full py-4 bg-gray-900 dark:bg-white dark:text-gray-900 text-white rounded-2xl font-black text-center transition-all hover:scale-105 active:scale-95 shadow-xl">Claim My Offer</a>
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


    <!-- Partner Section -->
    <section class="py-24 bg-gray-50 dark:bg-[#0a0f1c] transition-colors duration-300 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 px-4 py-2 rounded-full mb-6 border border-blue-100 dark:border-blue-800/50">
                    <span class="w-2 h-2 rounded-full bg-blue-600 dark:bg-blue-400"></span>
                    <span class="text-xs font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.2em] font-heading">Fittest Partner</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white font-heading tracking-tight mb-8">Fittest Messaging Partner</h2>
                <p class="text-gray-600 dark:text-slate-400 text-lg max-w-2xl mx-auto font-medium">Let's Join With Most Trusted BulkSMS Service Provider In Tamilnadu</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Items -->
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-pricing-50.png" alt="Zero Setup Cost" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">Zero Setup Cost</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="50">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-support-50.png" alt="Free DLT Support" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">Free DLT Support</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-pay-per-click-50.png" alt="Affordable Price" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">Affordable Price</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="150">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-lifetime-50.png" alt="Lifetime Validity" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">Lifetime Validity</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-dashboard-50.png" alt="Friendly Dashboard" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">Friendly Panel</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-time-50.png" alt="99.9% Uptime" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">99.9% Uptime</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="50">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-access-50.png" alt="24*7 Access" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">24*7 Access</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-delivery-50.png" alt="100% SMS delivery" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">100% Delivery</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="150">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-secure-50.png" alt="100% Secure" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">100% Secure</h4>
                </div>
                <div class="premium-card p-8 rounded-[2rem] flex flex-col items-center text-center hover-lift group" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-6 w-16 h-16 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-support-50.png" alt="Dedicated Support" class="w-10 h-10 group-hover:brightness-110 transition-all dark:invert">
                    </div>
                    <h4 class="text-sm font-black text-gray-900 dark:text-white font-heading tracking-widest uppercase">Expert Support</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Knowledge Section -->
    <section class="py-24 bg-gray-900 dark:bg-[#060c18] overflow-hidden relative transition-colors duration-300">
        <div class="absolute inset-0 bg-blue-900/10 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <div class="inline-flex items-center space-x-2 bg-blue-900/30 px-4 py-2 rounded-full mb-6 border border-blue-500/30">
                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                    <span class="text-xs font-black text-blue-400 uppercase tracking-[0.2em] font-heading">Pro Insights</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-black text-white font-heading tracking-tight mb-8">Things to Know Before Starting</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="bg-white/5 border border-white/10 p-10 rounded-[3rem] backdrop-blur-xl group hover:bg-white/10 transition-all" data-aos="fade-right">
                    <div class="flex justify-between items-start mb-10">
                        <h3 class="text-2xl font-black text-white font-heading">Important Awareness</h3>
                        <span class="text-6xl font-black text-white/5 group-hover:text-white/10 transition-colors">01</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-8 items-start">
                        <div class="w-20 h-20 bg-blue-500/10 rounded-3xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                            <img src="assets/img/ddos-server-1.png" alt="Awareness" class="w-12 h-12">
                        </div>
                        <div>
                            <p class="text-gray-400 leading-relaxed text-justify mb-8 font-medium">
                                Don't Be Fooled By Fake SMS Companies. Selling SMS at cost below industry standards often reveals hidden traps. We reveal the exact trap behind these companies.
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 text-blue-400 font-bold group-hover:translate-x-2 transition-transform">
                                Read Insights <i class="las la-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/10 p-10 rounded-[3rem] backdrop-blur-xl group hover:bg-white/10 transition-all" data-aos="fade-left">
                    <div class="flex justify-between items-start mb-10">
                        <h3 class="text-2xl font-black text-white font-heading">SMS Cutting Warning</h3>
                        <span class="text-6xl font-black text-white/5 group-hover:text-white/10 transition-colors">02</span>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-8 items-start">
                        <div class="w-20 h-20 bg-indigo-500/10 rounded-3xl flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform">
                            <img src="assets/img/ddos-server-2.png" alt="SMS Cutting" class="w-12 h-12">
                        </div>
                        <div>
                            <p class="text-gray-400 leading-relaxed text-justify mb-8 font-medium">
                                Companies may submit only 50% of your credits while updating fake reports. Stay away from such companies. MDT is committed to the industry's BEST SERVICE & SUPPORT.
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 text-blue-400 font-bold group-hover:translate-x-2 transition-transform">
                                Expert Advice <i class="las la-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ultimate Bento Box Section -->
    <section class="py-24 bg-gray-50 dark:bg-[#060c18] relative overflow-hidden transition-colors duration-300">
        <div class="absolute top-0 right-0 w-full h-full overflow-hidden pointer-events-none -z-10">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-30"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 auto-rows-auto">
                
                <!-- BENTO ITEM 1: Massive CTA -->
                <div class="lg:col-span-2 bg-gradient-to-br from-blue-600 to-indigo-800 rounded-[3rem] p-10 md:p-14 relative overflow-hidden group flex flex-col justify-center min-h-[400px]" data-aos="fade-up">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-30 mix-blend-overlay"></div>
                    <div class="absolute -right-20 -top-20 w-80 h-80 bg-blue-400/30 blur-[80px] rounded-full group-hover:bg-blue-400/40 transition-all duration-700"></div>
                    
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 font-heading tracking-tight leading-[1.1] relative z-10">
                        Step Into Success! <br /> Join the MDT Family.
                    </h2>
                    <p class="text-blue-50 text-lg md:text-xl max-w-lg mb-10 relative z-10 font-medium">
                        We Promise to Deliver the Best Pricing and Bulk SMS Service for Your Business Growth!
                    </p>
                    <div class="relative z-10">
                        <a href="signup.php" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-gray-900 bg-white rounded-2xl hover:bg-gray-50 transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_rgba(255,255,255,0.3)]">
                            Get Started Now
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- BENTO ITEM 2: Trusted Locations -->
                <div class="bg-white dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200/80 dark:border-slate-800/80 rounded-[3rem] p-8 md:p-10 flex flex-col relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 blur-[40px] rounded-full"></div>
                    
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-8 font-heading tracking-tight relative z-10">
                        Trusted In Tamilnadu
                    </h3>
                    
                    <div class="flex-1 flex flex-col gap-4 relative z-10 overflow-y-auto pr-2 custom-scrollbar" style="max-height: 300px;">
                        <?php
                        $top_locations = ['Chennai', 'Trichy', 'Coimbatore', 'Salem', 'Madurai', 'Tiruppur', 'Erode'];
                        foreach ($top_locations as $loc): ?>
                        <div class="flex items-center gap-4 group cursor-default">
                            <div class="w-10 h-10 shrink-0 rounded-xl bg-gray-50 dark:bg-slate-800 flex items-center justify-center border border-gray-100 dark:border-slate-700 group-hover:border-blue-500/50 group-hover:bg-blue-500/10 transition-colors">
                                <svg class="w-4 h-4 text-gray-400 dark:text-slate-500 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span class="text-gray-600 dark:text-slate-300 font-medium group-hover:text-gray-900 dark:group-hover:text-white transition-colors">Pricing in <?php echo $loc; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- BENTO ITEM 3: SEO Links -->
                <div class="lg:col-span-3 bg-white dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200/80 dark:border-slate-800/80 rounded-[3rem] p-10 flex flex-col md:flex-row items-center gap-10 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-blue-500/10 blur-[60px] rounded-full"></div>
                    
                    <div class="md:w-1/3 relative z-10 text-center md:text-left">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-4 font-heading tracking-tight">Service Coverage</h3>
                        <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-6">Explore our competitive Bulk SMS pricing across Tamilnadu.</p>
                        <a href="signup.php" class="inline-flex items-center justify-center px-6 py-3 text-sm font-bold text-white bg-gray-900 dark:bg-blue-600 rounded-xl hover:bg-gray-800 dark:hover:bg-blue-700 transition-all duration-300">
                            View All Locations
                        </a>
                    </div>
                    
                    <div class="md:w-2/3 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-y-4 gap-x-6 relative z-10 w-full">
                        <?php
                        $seo_locations = [
                            'Ramanathapuram', 'Sivakasi', 'Nagercoil', 'Kanyakumari', 
                            'Namakkal', 'Karur', 'Pudukkottai', 'Dindigul', 
                            'Kanchipuram', 'Thiruvallur', 'Tiruvarur', 'Villupuram'
                        ];
                        foreach ($seo_locations as $loc): ?>
                        <a href="#" class="text-sm font-medium text-gray-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors flex items-center group">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300 dark:bg-slate-700 mr-2.5 group-hover:bg-blue-500 transition-colors"></span>
                            <?php echo $loc; ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <script src="assets/js/vendors/jquery-3.7.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });

            VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
                max: 15,
                speed: 400,
                glare: true,
                "max-glare": 0.2,
            });
        });
    </script>
</body>
</html>