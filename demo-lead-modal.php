<div class="fixed inset-0 z-[100] hidden overflow-y-auto bg-slate-950/70 p-4 backdrop-blur-sm" data-demo-modal aria-hidden="true">
    <div class="flex min-h-full items-center justify-center">
        <div class="relative w-full max-w-md rounded-3xl border border-white/20 bg-white p-6 shadow-2xl dark:bg-slate-900 sm:p-8" role="dialog" aria-modal="true" aria-labelledby="demo-modal-title">
            <button type="button" class="absolute right-4 top-4 rounded-full bg-slate-100 p-2 text-slate-500 transition hover:bg-slate-200 dark:bg-slate-800 dark:text-slate-300" data-demo-close aria-label="Close">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>
            </button>

            <div data-demo-otp-state>
                <div class="inline-flex rounded-2xl bg-blue-50 p-3 text-blue-600 dark:bg-blue-950/60 dark:text-cyan-300">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10V7a5 5 0 0 1 10 0v3m-11 0h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2Zm6 4v3"/></svg>
                </div>
                <h2 id="demo-modal-title" class="mt-5 font-heading text-2xl font-black text-slate-950 dark:text-white">Verify Your Mobile Number</h2>
                <p class="mt-2 text-sm leading-6 text-slate-500 dark:text-slate-400">Enter the 6-digit OTP sent to <strong data-demo-masked-phone></strong>.</p>
                <p class="mt-3 hidden rounded-xl border border-rose-200 bg-rose-50 px-3 py-2 text-sm font-semibold text-rose-700" data-demo-otp-error></p>
                <form class="mt-5" data-demo-otp-form>
                    <div class="flex justify-center gap-2">
                        <?php for ($otpIndex = 0; $otpIndex < 6; $otpIndex++): ?>
                            <input type="text" inputmode="numeric" maxlength="1" class="h-12 w-11 rounded-xl border border-slate-200 bg-white text-center text-xl font-black text-slate-900 outline-none transition focus:border-blue-500 focus:ring-4 focus:ring-blue-500/15 dark:border-slate-700 dark:bg-slate-800 dark:text-white" data-demo-otp-digit>
                        <?php endfor; ?>
                    </div>
                    <button type="submit" class="mt-6 w-full rounded-xl bg-gradient-to-r from-blue-600 to-indigo-700 px-5 py-3 font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-1" data-demo-verify-button>Verify OTP</button>
                </form>
            </div>

            <div class="hidden text-center" data-demo-thankyou-state>
                <div class="mx-auto inline-flex rounded-full bg-green-100 p-4 text-green-600 dark:bg-green-950/60 dark:text-green-300">
                    <svg class="h-10 w-10" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L19 6"/></svg>
                </div>
                <h2 class="mt-5 font-heading text-2xl font-black text-slate-950 dark:text-white">Thank You!</h2>
                <p class="mt-2 text-sm leading-6 text-slate-500 dark:text-slate-400">Your mobile number has been verified successfully. Our team will call you within 2 hours.</p>
                <button type="button" class="mt-6 w-full rounded-xl bg-gradient-to-r from-blue-600 to-indigo-700 px-5 py-3 font-bold text-white shadow-lg shadow-blue-600/20 transition hover:-translate-y-1" data-demo-close>Close</button>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/demo-lead-flow.js"></script>
