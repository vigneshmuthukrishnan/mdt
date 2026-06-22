<!-- Header -->
<header class="fixed w-full top-0 z-50 bg-white/90 dark:bg-[#020617]/90 backdrop-blur-xl border-b border-slate-200/50 dark:border-white/5 transition-all duration-500" id="navbar">
    <style>
        #mobile-menu {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: none;
            opacity: 0;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(8px);
            transition: opacity 300ms ease;
        }

        #mobile-menu.mobile-menu-open {
            display: block !important;
            opacity: 1;
        }

        #mobile-menu-panel {
            position: absolute;
            top: 0;
            right: 0;
            height: 100vh;
            height: 100dvh;
            width: min(20rem, 100%);
            transform: translateX(100%);
            transition: transform 300ms ease;
        }

        #mobile-menu.mobile-menu-open #mobile-menu-panel {
            transform: translateX(0);
        }

        @media (min-width: 1024px) {
            #mobile-menu {
                display: none !important;
            }
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="group flex items-center gap-3">
                    <!-- <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-500/20 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div> -->
                    <img src="assets/img/My Dreams2-logo.png" alt="MDT" class="h-8 w-auto dark:brightness-0 dark:invert">
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex space-x-10 items-center">
                <!-- Products Mega Menu -->
                <div class="relative group py-8">
                    <button class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-bold text-sm tracking-wide uppercase transition-colors flex items-center gap-1">
                        Products 
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <!-- Mega Menu Dropdown -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 top-full w-[800px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 z-50">
                        <div class="bg-white dark:bg-[#0f172a] rounded-3xl shadow-2xl p-10 border border-slate-100 dark:border-white/10 mt-2 grid grid-cols-3 gap-10">
                            <!-- Column 1 -->
                            <div class="space-y-8">
                                <h4 class="text-[11px] font-black text-slate-400 dark:text-slate-500 uppercase tracking-[0.2em] mb-4">Messaging</h4>
                                <a href="bulksmsservice.php" class="flex items-start group/item">
                                    <div class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-900/20 flex items-center justify-center mr-4 shrink-0 group-hover/item:bg-indigo-600 group-hover/item:text-white transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-slate-900 dark:text-white mb-1">Bulk Messaging</h5>
                                        <p class="text-[11px] text-slate-500 leading-relaxed">High-volume SMS delivery with real-time analytics.</p>
                                    </div>
                                </a>
                                <a href="otpsms.php" class="flex items-start group/item">
                                    <div class="w-10 h-10 rounded-xl bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center mr-4 shrink-0 group-hover/item:bg-purple-600 group-hover/item:text-white transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-slate-900 dark:text-white mb-1">OTP & Security</h5>
                                        <p class="text-[11px] text-slate-500 leading-relaxed">Secure 2FA and transactional verification APIs.</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Column 2 -->
                            <div class="space-y-8">
                                <h4 class="text-[11px] font-black text-slate-400 dark:text-slate-500 uppercase tracking-[0.2em] mb-4">Channels</h4>
                                <a href="whatsapp.php" class="flex items-start group/item">
                                    <div class="w-10 h-10 rounded-xl bg-green-50 dark:bg-green-900/20 flex items-center justify-center mr-4 shrink-0 group-hover/item:bg-green-600 group-hover/item:text-white transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-slate-900 dark:text-white mb-1">WhatsApp API</h5>
                                        <p class="text-[11px] text-slate-500 leading-relaxed">Official Business API for automated engagement.</p>
                                    </div>
                                </a>
                                <a href="contact.php" class="flex items-start group/item">
                                    <div class="w-10 h-10 rounded-xl bg-blue-50 dark:bg-blue-900/20 flex items-center justify-center mr-4 shrink-0 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-slate-900 dark:text-white mb-1">RCS Messaging</h5>
                                        <p class="text-[11px] text-slate-500 leading-relaxed">Rich media communication with branding elements.</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Column 3 -->
                            <div class="space-y-8">
                                <h4 class="text-[11px] font-black text-slate-400 dark:text-slate-500 uppercase tracking-[0.2em] mb-4">Voice</h4>
                                <a href="voicecall.php" class="flex items-start group/item">
                                    <div class="w-10 h-10 rounded-xl bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center mr-4 shrink-0 group-hover/item:bg-orange-600 group-hover/item:text-white transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-slate-900 dark:text-white mb-1">Voice Service</h5>
                                        <p class="text-[11px] text-slate-500 leading-relaxed">Automated voice broadcasting and alerts.</p>
                                    </div>
                                </a>
                                <a href="ivrserviceprovider.php" class="flex items-start group/item">
                                    <div class="w-10 h-10 rounded-xl bg-teal-50 dark:bg-teal-900/20 flex items-center justify-center mr-4 shrink-0 group-hover/item:bg-teal-600 group-hover/item:text-white transition-all duration-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="text-sm font-bold text-slate-900 dark:text-white mb-1">IVR Systems</h5>
                                        <p class="text-[11px] text-slate-500 leading-relaxed">Intelligent call routing and virtual reception.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="pricing.php" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-bold text-sm tracking-wide uppercase transition-colors">Solutions</a>
                <a href="resellerservice.php" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-bold text-sm tracking-wide uppercase transition-colors">Become partner</a>
                <a href="pricing.php" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-bold text-sm tracking-wide uppercase transition-colors">Resource</a>
                <a href="pricing.php" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-bold text-sm tracking-wide uppercase transition-colors">Pricing</a>
                <a href="contact.php" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-bold text-sm tracking-wide uppercase transition-colors">Contact Us</a>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-6">
                <div class="hidden lg:flex items-center">
                    <!-- <a href="index.php#book-free-demo" class="text-sm font-bold text-slate-600 dark:text-slate-300 hover:text-indigo-600 transition-colors mr-6">Sign In</a> -->
                    <a href="https://calendly.com/mydreamstechnology/bookademo" class="bg-indigo-600 hover:bg-indigo-700 text-white px-7 py-3 rounded-full font-black text-xs uppercase tracking-widest transition-all shadow-[0_10px_20px_-5px_rgba(79,70,229,0.3)] hover:shadow-[0_15px_25px_-5px_rgba(79,70,229,0.4)] hover:-translate-y-0.5 active:scale-95">
                        7824998877
                    </a>
                    &nbsp;
                    <a href="index.php#book-free-demo" class="bg-indigo-600 hover:bg-indigo-700 text-white px-7 py-3 rounded-full font-black text-xs uppercase tracking-widest transition-all shadow-[0_10px_20px_-5px_rgba(79,70,229,0.3)] hover:shadow-[0_15px_25px_-5px_rgba(79,70,229,0.4)] hover:-translate-y-0.5 active:scale-95">
                        Get Started
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button type="button" id="mobile-menu-btn" class="lg:hidden text-slate-600 dark:text-slate-300 hover:text-indigo-600 p-2 transition-colors" aria-controls="mobile-menu" aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300 lg:hidden" aria-hidden="true">
        <div id="mobile-menu-panel" class="absolute right-0 top-0 h-full w-full max-w-xs bg-white dark:bg-[#020617] shadow-2xl transform translate-x-full transition-transform duration-300 overflow-y-auto flex flex-col">
            <div class="p-6 border-b border-slate-100 dark:border-white/5 flex justify-between items-center">
                <img src="assets/img/My Dreams2-logo.png" alt="Logo" class="h-6 w-auto">
                <button id="close-mobile-menu" class="text-slate-400 hover:text-indigo-600 transition-colors p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            
            <div class="p-6 flex-1 space-y-8">
                <nav class="space-y-7">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4">Products</p>
                        <div class="space-y-5">
                            <div>
                                <p class="mb-3 text-[11px] font-black uppercase tracking-[0.18em] text-slate-400 dark:text-slate-500">Messaging</p>
                                <div class="space-y-2">
                                    <a href="bulksmsservice.php" class="flex items-start rounded-2xl p-3 transition-colors hover:bg-indigo-50 dark:hover:bg-indigo-900/20">
                                        <span class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600 dark:bg-indigo-900/20 dark:text-indigo-300">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                                        </span>
                                        <span><span class="block text-sm font-bold text-slate-900 dark:text-white">Bulk Messaging</span><span class="mt-1 block text-xs leading-5 text-slate-500">High-volume SMS delivery.</span></span>
                                    </a>
                                    <a href="otpsms.php" class="flex items-start rounded-2xl p-3 transition-colors hover:bg-purple-50 dark:hover:bg-purple-900/20">
                                        <span class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-purple-600 dark:bg-purple-900/20 dark:text-purple-300">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                                        </span>
                                        <span><span class="block text-sm font-bold text-slate-900 dark:text-white">OTP &amp; Security</span><span class="mt-1 block text-xs leading-5 text-slate-500">Secure verification APIs.</span></span>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <p class="mb-3 text-[11px] font-black uppercase tracking-[0.18em] text-slate-400 dark:text-slate-500">Channels</p>
                                <div class="space-y-2">
                                    <a href="whatsapp.php" class="flex items-start rounded-2xl p-3 transition-colors hover:bg-green-50 dark:hover:bg-green-900/20">
                                        <span class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-50 text-green-600 dark:bg-green-900/20 dark:text-green-300">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
                                        </span>
                                        <span><span class="block text-sm font-bold text-slate-900 dark:text-white">WhatsApp API</span><span class="mt-1 block text-xs leading-5 text-slate-500">Official Business API.</span></span>
                                    </a>
                                    <a href="contact.php" class="flex items-start rounded-2xl p-3 transition-colors hover:bg-blue-50 dark:hover:bg-blue-900/20">
                                        <span class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-blue-600 dark:bg-blue-900/20 dark:text-blue-300">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                        </span>
                                        <span><span class="block text-sm font-bold text-slate-900 dark:text-white">RCS Messaging</span><span class="mt-1 block text-xs leading-5 text-slate-500">Rich media communication.</span></span>
                                    </a>
                                </div>
                            </div>

                            <div>
                                <p class="mb-3 text-[11px] font-black uppercase tracking-[0.18em] text-slate-400 dark:text-slate-500">Voice</p>
                                <div class="space-y-2">
                                    <a href="voicecall.php" class="flex items-start rounded-2xl p-3 transition-colors hover:bg-orange-50 dark:hover:bg-orange-900/20">
                                        <span class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-orange-600 dark:bg-orange-900/20 dark:text-orange-300">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/></svg>
                                        </span>
                                        <span><span class="block text-sm font-bold text-slate-900 dark:text-white">Voice Service</span><span class="mt-1 block text-xs leading-5 text-slate-500">Automated voice alerts.</span></span>
                                    </a>
                                    <a href="ivrserviceprovider.php" class="flex items-start rounded-2xl p-3 transition-colors hover:bg-teal-50 dark:hover:bg-teal-900/20">
                                        <span class="mr-3 flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-teal-50 text-teal-600 dark:bg-teal-900/20 dark:text-teal-300">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                        </span>
                                        <span><span class="block text-sm font-bold text-slate-900 dark:text-white">IVR Systems</span><span class="mt-1 block text-xs leading-5 text-slate-500">Intelligent call routing.</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-slate-100 pt-5 dark:border-white/5">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4">Main Menu</p>
                        <a href="pricing.php" class="block rounded-xl py-3 text-lg font-bold text-slate-900 transition-colors hover:text-indigo-600 dark:text-white">Solutions</a>
                        <a href="resellerservice.php" class="block rounded-xl py-3 text-lg font-bold text-slate-900 transition-colors hover:text-indigo-600 dark:text-white">Become partner</a>
                        <a href="pricing.php" class="block rounded-xl py-3 text-lg font-bold text-slate-900 transition-colors hover:text-indigo-600 dark:text-white">Resource</a>
                        <a href="pricing.php" class="block rounded-xl py-3 text-lg font-bold text-slate-900 transition-colors hover:text-indigo-600 dark:text-white">Pricing</a>
                        <a href="contact.php" class="block rounded-xl py-3 text-lg font-bold text-slate-900 transition-colors hover:text-indigo-600 dark:text-white">Contact Us</a>
                    </div>
                </nav>
            </div>
            <div class="p-6 bg-slate-50 dark:bg-white/5">
                <a href="https://calendly.com/mydreamstechnology/bookademo" class="block w-full text-center bg-indigo-600 text-white py-4 rounded-2xl font-black transition-all shadow-lg mb-4">7824998877 </a>
                <a href="index.php#book-free-demo" class="block w-full text-center bg-indigo-600 text-white py-4 rounded-2xl font-black transition-all shadow-lg mb-4">Get Started</a>
                <p class="text-center text-xs text-slate-500">Trusted by 1000+ Businesses</p>
            </div>
        </div>
    </div>
</header>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-FT5DXRPHMJ"></script> 
<script> 
    window.dataLayer = window.dataLayer || []; 
    function gtag(){
        dataLayer.push(arguments);
    } 
    gtag('js', new Date()); 
    gtag('config', 'G-FT5DXRPHMJ'); 
</script>

<script>
    !function(f,b,e,v,n,t,s){
        if(f.fbq)return;
        n=f.fbq=function(){
            n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)
        };
        if(!f._fbq)
            f._fbq=n;
            n.push=n;
            n.loaded=!0;
            n.version='2.0';
            n.queue=[];
            t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)
        }(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '409970812203963');
    fbq('track', 'PageView');
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=409970812203963&ev=PageView&noscript=1"/>
</noscript>

<script>
    // Mobile menu toggle functionality
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-mobile-menu');
        const menu = document.getElementById('mobile-menu');
        const menuPanel = document.getElementById('mobile-menu-panel');

        if (!btn || !menu || !menuPanel) return;

        if (menu.parentElement !== document.body) {
            document.body.appendChild(menu);
        }

        function openMenu() {
            menu.classList.remove('hidden');
            menu.setAttribute('aria-hidden', 'false');
            btn.setAttribute('aria-expanded', 'true');
            requestAnimationFrame(() => {
                menu.classList.add('mobile-menu-open');
                menu.classList.remove('opacity-0');
                menuPanel.classList.remove('translate-x-full');
            });
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            menu.classList.remove('mobile-menu-open');
            menu.classList.add('opacity-0');
            menu.setAttribute('aria-hidden', 'true');
            btn.setAttribute('aria-expanded', 'false');
            menuPanel.classList.add('translate-x-full');
            setTimeout(() => {
                menu.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        btn.addEventListener('click', openMenu);
        if(closeBtn) closeBtn.addEventListener('click', closeMenu);
        menu.addEventListener('click', (e) => {
            if(e.target === menu) closeMenu();
        });
        document.addEventListener('keydown', (e) => {
            if(e.key === 'Escape' && menu.classList.contains('mobile-menu-open')) closeMenu();
        });
    });
</script>
