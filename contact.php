<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact My Dreams Technology for sales and support.">
    <meta name="author" content="My Dreams Technology">
    <title>Contact - My Dreams Technology</title>
    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    
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
                        secondary: '#2563eb',
                        dark: '#0f172a',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        shimmer: {
                            '100%': { transform: 'translateX(100%)' },
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
            background: linear-gradient(to right, #3b82f6, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-[#060c18] text-gray-800 dark:text-gray-300 antialiased pt-20 transition-colors duration-300">

    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Hero / Breadcrumb Section -->
    <section class="relative pt-24 pb-32 bg-gradient-to-br from-gray-900 to-[#0a1128] overflow-hidden border-b border-white/5 transition-colors duration-300">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <!-- Grid Background -->
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M54.627 0l.83.83v58.34h-58.34v-.83l56.68-56.68zM53.797 0h.83v.83l-.83-.83z\' fill=\'%233b82f6\' fill-opacity=\'0.1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E')] opacity-30"></div>
            
            <!-- Animated Glowing Orbs -->
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] animate-[pulse_6s_ease-in-out_infinite]"></div>
            <div class="absolute top-40 -left-20 w-72 h-72 bg-indigo-500/10 rounded-full blur-[80px] animate-[pulse_8s_ease-in-out_infinite_alternate]"></div>
            
            <!-- Floating Particles -->
            <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-400 rounded-full shadow-[0_0_10px_rgba(59,130,246,0.8)] animate-[ping_3s_cubic-bezier(0,0,0.2,1)_infinite]"></div>
            <div class="absolute top-1/3 right-1/4 w-2 h-2 bg-indigo-400 rounded-full shadow-[0_0_8px_rgba(99,102,241,0.8)] animate-[ping_4s_cubic-bezier(0,0,0.2,1)_infinite_1s]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto mb-20" data-aos="fade-up">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-2 bg-white/5 backdrop-blur-md px-4 py-2 rounded-full border border-white/10 shadow-sm mb-8 transform transition-transform hover:-translate-y-1">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    <span class="text-sm font-semibold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-300 tracking-wide uppercase">
                        Sales & Helpdesk
                    </span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-[1.1] mb-6 font-heading tracking-tight">
                    Let’s Connect – Discover How Our <br class="hidden lg:block" />
                    <span class="relative inline-block mt-2">
                        <span class="relative z-10 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-indigo-400 to-blue-300">
                            Products Help Grow Your Business
                        </span>
                        <svg class="absolute w-full h-4 -bottom-1 left-0 -z-10 text-blue-600/40" viewBox="0 0 200 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.00021 6.84033C47.851 1.70617 114.737 -1.63753 197.989 6.84033" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                </h1>
                
                <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-medium leading-relaxed">
                    Have Questions About Our Products Or Services? Looking For Expert Support? We’re Here To Help!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Address -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[2.5rem] p-10 hover:bg-white/10 transition-all duration-500 group" data-aos="fade-up" data-tilt>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-1 bg-blue-500 rounded-full group-hover:w-16 transition-all duration-500"></div>
                        <h6 class="text-sm font-black text-white uppercase tracking-[0.2em] font-heading">Office Address</h6>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xl font-bold text-white font-heading">Registered Address</p>
                        <p class="text-gray-400 text-lg leading-relaxed font-medium">No.10 168, Bharathidasan Street, Thuvkudimalai, Thiruverumbur,</p>
                        <p class="text-indigo-400 font-bold">Trichy, Tamil Nadu 620022.</p>
                    </div>
                </div>

                <!-- Hotline -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[2.5rem] p-10 hover:bg-white/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100" data-tilt>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-1 bg-blue-500 rounded-full group-hover:w-16 transition-all duration-500"></div>
                        <h6 class="text-sm font-black text-white uppercase tracking-[0.2em] font-heading">Hotline</h6>
                    </div>
                    <div class="space-y-6">
                        <a href="tel:+917824998877" class="block text-3xl font-black text-white hover:text-blue-400 transition-colors font-heading tracking-tight">+91 78249 98877</a>
                        <a href="mailto:support@mydreamstechnology.in" class="inline-flex items-center text-gray-400 hover:text-blue-400 transition-colors text-lg font-medium group/mail">
                            support@mydreamstechnology.in
                            <svg class="w-5 h-5 ml-2 transform group-hover/mail:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Social -->
                <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-[2.5rem] p-10 hover:bg-white/10 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200" data-tilt>
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-1 bg-blue-500 rounded-full group-hover:w-16 transition-all duration-500"></div>
                        <h6 class="text-sm font-black text-white uppercase tracking-[0.2em] font-heading">Social Media</h6>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://www.facebook.com/mydreamstechnology/" class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center text-white border border-white/10 hover:bg-blue-600 hover:scale-110 hover:-rotate-6 transition-all duration-300"><i class="lab la-facebook-f text-2xl"></i></a>
                        <a href="https://www.instagram.com/mydreamstechnology/" class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center text-white border border-white/10 hover:bg-pink-600 hover:scale-110 hover:rotate-6 transition-all duration-300"><i class="lab la-instagram text-2xl"></i></a>
                        <a href="#" class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center text-white border border-white/10 hover:bg-blue-700 hover:scale-110 hover:-rotate-6 transition-all duration-300"><i class="lab la-linkedin-in text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-24 bg-white dark:bg-[#060c18] relative transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Form Side -->
                <div class="premium-card p-8 md:p-14 rounded-[3rem] shadow-2xl relative overflow-hidden group" data-aos="fade-right">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 blur-[40px] rounded-full group-hover:bg-blue-500/20 transition-all duration-700"></div>
                    
                    <h2 class="text-3xl md:text-4xl font-black text-gray-900 dark:text-white mb-4 font-heading tracking-tight">Send Us a Message</h2>
                    <p class="text-gray-500 dark:text-slate-400 mb-10 font-medium leading-relaxed">Your email address will not be published. Required fields are marked *</p>
                    
                    <form action="action.php" method="post" class="space-y-8 relative z-10">
                        <input type="hidden" id="contact_page" name="contact_page" value="1">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="block text-sm font-black text-gray-700 dark:text-slate-300 uppercase tracking-wider ml-1">Full Name *</label>
                                <input type="text" placeholder="Your Name" name="username" class="w-full px-6 py-4 rounded-2xl border border-gray-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 backdrop-blur-sm focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all dark:text-white" required>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-black text-gray-700 dark:text-slate-300 uppercase tracking-wider ml-1">Company *</label>
                                <input type="text" placeholder="Company Name" class="w-full px-6 py-4 rounded-2xl border border-gray-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 backdrop-blur-sm focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all dark:text-white" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="block text-sm font-black text-gray-700 dark:text-slate-300 uppercase tracking-wider ml-1">Mobile No *</label>
                                <input type="tel" id="phone" name="mobile" placeholder="10 Digit Number" class="w-full px-6 py-4 rounded-2xl border border-gray-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 backdrop-blur-sm focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all dark:text-white" maxlength="10" minlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-sm font-black text-gray-700 dark:text-slate-300 uppercase tracking-wider ml-1">Email Address *</label>
                                <input type="email" name="email" placeholder="email@example.com" class="w-full px-6 py-4 rounded-2xl border border-gray-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 backdrop-blur-sm focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all dark:text-white" required>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-black text-gray-700 dark:text-slate-300 uppercase tracking-wider ml-1">Services *</label>
                            <div class="relative">
                                <select class="w-full px-6 py-4 rounded-2xl border border-gray-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50 backdrop-blur-sm focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 outline-none transition-all appearance-none dark:text-white cursor-pointer" name="register_ticket" required>
                                    <option value="" class="dark:bg-slate-900">You need..</option>
                                    <option value="BulkSMS Service" class="dark:bg-slate-900">1. BulkSMS Service</option>
                                    <option value="Official Business WhatsApp" class="dark:bg-slate-900">2. Official Business WhatsApp</option>
                                    <option value="IVR Service" class="dark:bg-slate-900">3. IVR Service</option>
                                    <option value="Voice Call Service" class="dark:bg-slate-900">4. Voice Call Service</option>
                                    <option value="RCS - Rich Media" class="dark:bg-slate-900">5. RCS - Rich Media</option>
                                </select>
                                <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                                    <i class="las la-angle-down text-xl"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-blue-50 dark:bg-blue-900/20 rounded-2xl border border-blue-100 dark:border-blue-800/50 transition-colors">
                            <input type="checkbox" id="agree" class="mt-1 w-5 h-5 rounded-lg border-gray-300 text-blue-600 focus:ring-blue-500 cursor-pointer" required>
                            <label for="agree" class="text-sm font-medium text-blue-800 dark:text-blue-300 leading-relaxed cursor-pointer">
                                By submitting the above information, you agree to receive promotional communications from our brand on different channels like RCS/SMS/Voice/WhatsApp/Email.
                            </label>
                        </div>
                        
                        <button type="submit" class="group relative w-full md:w-auto px-10 py-5 bg-blue-600 text-white rounded-[1.25rem] font-black text-lg overflow-hidden transition-all hover:bg-blue-700 hover:scale-[1.02] active:scale-95 shadow-[0_10px_30px_-10px_rgba(37,99,235,0.5)]">
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></span>
                            <span class="relative flex items-center justify-center gap-3">
                                Submit Message 
                                <svg class="w-6 h-6 transform transition-transform group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Illustration Side -->
                <div class="relative" data-aos="zoom-in" data-aos-delay="200">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/10 to-indigo-500/10 blur-[100px] rounded-full animate-pulse-slow"></div>
                    <div class="relative z-10" data-tilt data-tilt-max="5">
                        <img src="assets/img/contact.png" alt="Contact Illustration" class="w-full max-w-[550px] mx-auto h-auto drop-shadow-[0_20px_50px_rgba(59,130,246,0.3)] animate-float">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Team Section -->
    <section class="py-24 bg-gray-50 dark:bg-[#0a0f1c] overflow-hidden transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div class="flex items-center space-x-2 mb-6">
                        <span class="w-3 h-3 rounded-full bg-blue-500 animate-ping"></span>
                        <span class="text-sm font-black text-blue-600 dark:text-blue-400 uppercase tracking-widest font-heading">Support Heroes</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white mb-8 font-heading tracking-tight leading-tight">
                        24/7 Superhero <br class="hidden md:block" /> Our Support Team Ready to Assist
                    </h2>
                </div>
                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Stat Card 1 -->
                    <div class="premium-card p-10 rounded-[2.5rem] text-center hover-lift group" data-aos="fade-up" data-tilt>
                        <div class="w-20 h-20 bg-blue-50 dark:bg-blue-900/30 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                            <img src="assets/img/support-5-1.png" alt="Book Demo" class="w-12 h-12 group-hover:brightness-110 transition-all">
                        </div>
                        <h6 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading">Book A Demo</h6>
                        <p class="text-gray-500 dark:text-slate-400 text-sm font-medium mb-8">Explore Our Application</p>
                        <a href="https://calendly.com/mydreamstechnology/bookademo" target="_blank" class="block py-4 px-6 rounded-2xl border-2 border-blue-600 text-blue-600 dark:text-blue-400 font-black hover:bg-blue-600 hover:text-white transition-all duration-300 text-sm">Schedule Now</a>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="premium-card p-10 rounded-[2.5rem] text-center hover-lift group" data-aos="fade-up" data-aos-delay="100" data-tilt>
                        <div class="w-20 h-20 bg-whatsapp/10 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                            <img src="assets/img/support-5-2.png" alt="WhatsApp Chat" class="w-12 h-12 group-hover:brightness-110 transition-all">
                        </div>
                        <h6 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading">WhatsApp Chat</h6>
                        <p class="text-gray-500 dark:text-slate-400 text-sm font-medium mb-8">Chat With Our Expert</p>
                        <a href="https://wa.me/917824998877" target="_blank" class="block py-4 px-6 rounded-2xl border-2 border-whatsapp text-whatsapp font-black hover:bg-whatsapp hover:text-white transition-all duration-300 text-sm">Chat Now</a>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="premium-card p-10 rounded-[2.5rem] text-center hover-lift group" data-aos="fade-up" data-aos-delay="200" data-tilt>
                        <div class="w-20 h-20 bg-blue-50 dark:bg-blue-900/30 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                            <img src="assets/img/support-5-3.png" alt="Call Support" class="w-12 h-12 group-hover:brightness-110 transition-all">
                        </div>
                        <h6 class="text-xl font-bold text-gray-900 dark:text-white mb-3 font-heading">Get in touch</h6>
                        <p class="text-gray-500 dark:text-slate-400 text-sm font-medium mb-8">Let's Talk To Us</p>
                        <a href="tel:+917824998877" class="block py-4 px-6 rounded-2xl border-2 border-indigo-600 text-indigo-600 dark:text-indigo-400 font-black hover:bg-indigo-600 hover:text-white transition-all duration-300 text-sm whitespace-nowrap">7824 998877</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Branches Section -->
    <section class="py-24 bg-white dark:bg-[#060c18] relative transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-900/30 px-4 py-2 rounded-full mb-4 border border-blue-100 dark:border-blue-800/50">
                    <span class="w-2 h-2 rounded-full bg-blue-600 dark:bg-blue-400 animate-pulse"></span>
                    <span class="text-xs font-black text-blue-600 dark:text-blue-400 uppercase tracking-[0.2em] font-heading">Our Network</span>
                </span>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 dark:text-white font-heading tracking-tight">Get the Help You Need Now</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Chennai -->
                <div class="premium-card p-12 rounded-[3rem] text-center hover-lift group" data-aos="fade-up" data-tilt>
                    <div class="w-24 h-24 bg-blue-50 dark:bg-blue-900/30 rounded-[2rem] flex items-center justify-center mx-auto mb-10 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-location1-50.png" alt="Chennai" class="w-12 h-12 group-hover:brightness-110 dark:brightness-0 dark:invert transition-all">
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-6 font-heading tracking-tight">Chennai</h3>
                    <p class="text-gray-500 dark:text-slate-400 leading-relaxed font-medium text-lg">
                        3rd Mainroad, CIT Nagar West, Nandanam, Chennai - 600035
                    </p>
                </div>

                <!-- Puducherry -->
                <div class="premium-card p-12 rounded-[3rem] text-center hover-lift group" data-aos="fade-up" data-aos-delay="100" data-tilt>
                    <div class="w-24 h-24 bg-amber-50 dark:bg-amber-900/20 rounded-[2rem] flex items-center justify-center mx-auto mb-10 group-hover:scale-110 group-hover:-rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-location2-50.png" alt="Puducherry" class="w-12 h-12 group-hover:brightness-110 dark:brightness-0 dark:invert transition-all">
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-6 font-heading tracking-tight">Puducherry</h3>
                    <p class="text-gray-500 dark:text-slate-400 leading-relaxed font-medium text-lg">
                        No 38, 1st Cross Rd, Krishna Nagar, Lawspet, Puducherry - 605008.
                    </p>
                </div>

                <!-- Trichy -->
                <div class="premium-card p-12 rounded-[3rem] text-center hover-lift group" data-aos="fade-up" data-aos-delay="200" data-tilt>
                    <div class="w-24 h-24 bg-emerald-50 dark:bg-emerald-900/20 rounded-[2rem] flex items-center justify-center mx-auto mb-10 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-inner">
                        <img src="assets/img/icons8-location3-50.png" alt="Trichy" class="w-12 h-12 group-hover:brightness-110 dark:brightness-0 dark:invert transition-all">
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-6 font-heading tracking-tight">Trichy</h3>
                    <p class="text-gray-500 dark:text-slate-400 leading-relaxed font-medium text-lg">
                        No.10, 3rd Street, Kailashnagar, Kattur, Trichy - 620019
                    </p>
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
                        Why Wait? Join the MDT Family Today and Elevate Your Business!
                    </p>
                    <div class="relative z-10">
                        <a href="signup.php" class="inline-flex items-center justify-center px-10 py-5 text-lg font-black text-blue-700 bg-white rounded-2xl hover:bg-blue-50 transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_rgba(255,255,255,0.3)]">
                            Get Started
                            <svg class="w-6 h-6 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
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
                            <span class="text-gray-600 dark:text-slate-300 font-medium group-hover:text-gray-900 dark:group-hover:text-white transition-colors">Support in <?php echo $loc; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- BENTO ITEM 3: SEO Links -->
                <div class="lg:col-span-3 bg-white dark:bg-slate-900/80 backdrop-blur-xl border border-gray-200/80 dark:border-slate-800/80 rounded-[3rem] p-10 flex flex-col md:flex-row items-center gap-10 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-blue-500/10 blur-[60px] rounded-full"></div>
                    
                    <div class="md:w-1/3 relative z-10 text-center md:text-left">
                        <h3 class="text-2xl font-black text-gray-900 dark:text-white mb-4 font-heading tracking-tight">Service Coverage</h3>
                        <p class="text-gray-500 dark:text-slate-400 text-sm leading-relaxed mb-6">Our dedicated support team is ready to assist you across Tamilnadu, 24/7.</p>
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