<main>
    <div class="page-hero bg-bg2 border-b border-white/[0.08] pt-20 pb-10 px-5 lg:px-12 relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-96 h-96 rounded-full pointer-events-none"
            style="background:radial-gradient(circle,rgba(43,110,255,0.08),transparent 70%)"></div>
        <div class="max-w-6xl mx-auto relative z-10">
            <div class="text-xs text-t3 tracking-wide mb-4">About Us › <span class="text-accent2">Get Suggestion</span>
            </div>
            <h1
                class="reveal font-display text-2xl sm:text-3xl lg:text-5xl font-black tracking-[-1.5px] sm:tracking-[-2px] leading-[1.07] mb-4">
                Answer a Few Questions<br>to Pick Your Plan</h1>
            <p class="reveal delay-1 text-t2 text-base lg:text-lg max-w-xl leading-relaxed">These questions help assess
                risk tolerance, financial goals, and investment preferences. Our AI-driven tool picks the plan that's
                matched to you.</p>

        </div>
    </div>
    <section class="bg-bg py-12 lg:py-20 px-5 lg:px-12">
        <div class="max-w-xl mx-auto w-full">
            <div class="bg-bg2 border border-white/[0.08] rounded-2xl p-8 mb-4">
                <div
                    class="flex items-center justify-center w-7 h-7 rounded-full bg-accent/15 border border-accent/30 text-accent2 text-xs font-bold mb-3">
                    1</div>
                <div class="text-[10px] text-t3 uppercase tracking-wide mb-2">Yes or No</div>
                <div class="font-medium text-t1 text-base mb-5">Do you have any prior experience with stock investments?
                </div>
                <div class="flex gap-3"><button
                        class="q-yn flex-1 bg-bg3 border border-white/[0.08] text-t2 py-3 rounded-xl text-sm transition-all"
                        onclick="selectYN(this)" style="cursor:pointer">1. Yes</button><button
                        class="q-yn flex-1 bg-bg3 border border-white/[0.08] text-t2 py-3 rounded-xl text-sm transition-all"
                        onclick="selectYN(this)" style="cursor:pointer">2. No</button></div>
            </div>
            <div class="bg-bg2 border border-white/[0.08] rounded-2xl p-8 mb-4">
                <div
                    class="flex items-center justify-center w-7 h-7 rounded-full bg-accent/15 border border-accent/30 text-accent2 text-xs font-bold mb-3">
                    2</div>
                <div class="text-[10px] text-t3 uppercase tracking-wide mb-2">Multiple Choice</div>
                <div class="font-medium text-t1 text-base mb-5">What is your primary investment goal?</div>
                <div class="flex flex-col gap-2.5"><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">1. Wealth
                        Preservation</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">2. Steady Income</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">3. Moderate Growth</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">4. High Returns</button></div>
            </div>
            <div class="bg-bg2 border border-white/[0.08] rounded-2xl p-8 mb-4">
                <div
                    class="flex items-center justify-center w-7 h-7 rounded-full bg-accent/15 border border-accent/30 text-accent2 text-xs font-bold mb-3">
                    3</div>
                <div class="text-[10px] text-t3 uppercase tracking-wide mb-2">Multiple Choice</div>
                <div class="font-medium text-t1 text-base mb-5">How long are you comfortable locking in your investment?
                </div>
                <div class="flex flex-col gap-2.5"><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">1. Up to 60 days</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">2. Up to 90 days</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">3. Up to 6 months</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">4. Up to 1 year or more</button>
                </div>
            </div>
            <div class="bg-bg2 border border-white/[0.08] rounded-2xl p-8 mb-4">
                <div
                    class="flex items-center justify-center w-7 h-7 rounded-full bg-accent/15 border border-accent/30 text-accent2 text-xs font-bold mb-3">
                    4</div>
                <div class="text-[10px] text-t3 uppercase tracking-wide mb-2">Multiple Choice</div>
                <div class="font-medium text-t1 text-base mb-5">What is your risk tolerance?</div>
                <div class="flex flex-col gap-2.5"><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">1. Very Low — I avoid risk at all
                        costs</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">2. Low — I prefer stable
                        returns</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">3. Medium — Balanced
                        risk/reward</button><button
                        class="q-opt text-left bg-bg3 border border-white/[0.08] text-t2 px-4 py-3 rounded-xl text-sm transition-all"
                        onclick="selectOpt(this)" style="cursor:pointer;width:100%">4. High — I want maximum
                        returns</button></div>
            </div>
            <button onclick="showResult()"
                class="w-full bg-accent text-white font-medium py-4 rounded-xl hover:bg-blue-500 transition-all text-sm mb-6">Continue
                →</button>
            <div id="s-result"
                class="hidden bg-gradient-to-br from-accent/10 to-accent3/10 border border-accent/25 rounded-2xl p-8 text-center">
                <div
                    class="inline-flex items-center gap-2 bg-accent/15 border border-accent/25 rounded-full px-4 py-1.5 text-xs text-accent2 font-medium mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-accent2"></span>AI Recommendation
                </div>
                <div class="text-sm text-t3 mb-3">We Recommend:</div>
                <div class="font-display text-4xl font-black text-white tracking-[-1px] bg-accent rounded-xl px-8 py-4 inline-block mb-5"
                    id="rec-plan">Premium</div>
                <p class="text-t2 text-sm leading-relaxed mb-6" id="rec-desc">Based on your answers, the Premium plan
                    (2.04% daily for 60 days) is your ideal match.</p>
                <a href="plans.html"
                    class="bg-accent text-white font-medium px-7 py-3 rounded-xl hover:bg-blue-500 transition-all no-underline text-sm">View
                    All Plans →</a>
            </div>
        </div>
    </section>
    <!-- ══ FOOTER ══ -->
    <footer class="bg-bg2 border-t border-white/[0.08] px-6 lg:px-12 pt-14 pb-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
                <div class="col-span-2 lg:col-span-2">
                    <a href="index.html"
                        class="font-display font-extrabold text-lg flex items-center gap-2 text-t1 no-underline mb-4">
                        <div
                            class="w-8 h-8 rounded-lg bg-gradient-to-br from-accent to-accent2 flex items-center justify-center text-white text-sm font-black flex-shrink-0">
                            CT</div>Credit Tide
                    </a>
                    <p class="text-xs text-t3 leading-relaxed max-w-[240px]">A forward-thinking investment platform
                        dedicated to empowering investors with transparency, security, and AI-driven financial growth.
                    </p>
                </div>
                <div>
                    <h4 class="text-[11px] font-semibold tracking-widest uppercase text-t3 mb-4">About Us</h4>
                    <ul class="space-y-2.5 list-none p-0">
                        <li><a href="company.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Company</a></li>
                        <li><a href="leadership.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Our Leadership</a>
                        </li>
                        <li><a href="diversity.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Diversity &amp;
                                Inclusion</a></li>
                        <li><a href="responsibility.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Responsibility</a>
                        </li>
                        <li><a href="commitments.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Our Commitments</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[11px] font-semibold tracking-widest uppercase text-t3 mb-4">Investment</h4>
                    <ul class="space-y-2.5 list-none p-0">
                        <li><a href="plans.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Various Plans</a>
                        </li>
                        <li><a href="calculator.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Profit
                                Calculator</a></li>
                        <li><a href="suggestion.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Get Suggestion</a>
                        </li>
                        <li><a href="blog.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Blog &amp;
                                Insights</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[11px] font-semibold tracking-widest uppercase text-t3 mb-4">Policy</h4>
                    <ul class="space-y-2.5 list-none p-0">
                        <li><a href="payment.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Payment Policy</a>
                        </li>
                        <li><a href="payment.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Deposit Policy</a>
                        </li>
                        <li><a href="payment.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Withdrawal
                                Policy</a></li>
                        <li><a href="payment.html"
                                class="text-t2 text-sm hover:text-t1 transition-colors no-underline">General Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 border-t border-white/[0.08] pt-6">
                <span class="text-xs text-t3">© 2025 Credit Tide. All rights reserved. 4th Floor The Featherstone
                    Building, 66 City Road.</span>
                <div class="flex gap-2">
                    <a href="#"
                        class="w-9 h-9 rounded-lg bg-white/[0.04] border border-white/[0.08] flex items-center justify-center text-t2 text-sm hover:border-white/[0.15] hover:text-t1 transition-all no-underline">📱</a>
                    <a href="#"
                        class="w-9 h-9 rounded-lg bg-white/[0.04] border border-white/[0.08] flex items-center justify-center text-t2 text-sm hover:border-white/[0.15] hover:text-t1 transition-all no-underline">📸</a>
                    <a href="#"
                        class="w-9 h-9 rounded-lg bg-white/[0.04] border border-white/[0.08] flex items-center justify-center text-t2 text-sm hover:border-white/[0.15] hover:text-t1 transition-all no-underline">▶</a>
                    <a href="#"
                        class="w-9 h-9 rounded-lg bg-white/[0.04] border border-white/[0.08] flex items-center justify-center text-t2 text-sm hover:border-white/[0.15] hover:text-t1 transition-all no-underline">✈</a>
                    <a href="#"
                        class="w-9 h-9 rounded-lg bg-white/[0.04] border border-white/[0.08] flex items-center justify-center text-t2 text-sm hover:border-white/[0.15] hover:text-t1 transition-all no-underline">✉</a>
                </div>
            </div>
        </div>
</main>

<script>
    function selectYN(btn) { btn.closest('.flex').querySelectorAll('.q-yn').forEach(b => { b.style.borderColor = 'rgba(255,255,255,0.08)'; b.style.color = '#8A9ABF'; }); btn.style.borderColor = '#2B6EFF'; btn.style.color = '#00C8FF'; }
    function selectOpt(btn) { btn.closest('.flex').querySelectorAll('.q-opt').forEach(b => { b.style.borderColor = 'rgba(255,255,255,0.08)'; b.style.color = '#8A9ABF'; }); btn.style.borderColor = '#2B6EFF'; btn.style.color = '#00C8FF'; }
    const planDesc = { 'Premium': 'Based on your profile, the Premium plan (2.04% daily for 60 days) is ideal — high returns with a short lock-in period.', 'Silver': 'The Silver plan (1.03% daily for 90 days) matches your balanced risk-reward preference.', 'Gold': 'The Gold plan (0.39% daily for 180 days) provides stable, long-term growth suited to your goals.', 'Star': 'The Star plan (0.29% daily for 365 days) is perfect for building substantial wealth over a year.', 'Unlimited': 'The Unlimited plan (0.19% daily for 365 days) is designed for large capital seeking secure, consistent returns.' };
    function showResult() { const r = document.getElementById('s-result'); r.classList.remove('hidden'); document.getElementById('rec-plan').textContent = 'Premium'; document.getElementById('rec-desc').textContent = planDesc['Premium']; r.scrollIntoView({ behavior: 'smooth' }); }
</script>