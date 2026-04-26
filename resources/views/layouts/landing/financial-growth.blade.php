<!-- ══ FINANCIAL GROWTH INITIATIVE ══ -->
<section class="bg-bg2 py-20 px-6 lg:px-12">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <div class="reveal-left">
            <div class="text-xs font-semibold tracking-[1.5px] uppercase text-accent2 flex items-center gap-2 mb-4">
                <span class="w-5 h-px bg-accent2"></span>Financial Growth Initiative
            </div>
            <h2 class="font-display text-3xl lg:text-4xl font-bold tracking-[-1.5px] mb-5">Empowering Financial
                Stability Through Stock Investment</h2>
            <p class="text-t2 text-sm leading-relaxed mb-4">Financial stability remains one of the strongest
                foundations for long-term personal success. Through stock investment, individuals participate in the
                growth of global companies while building sustainable wealth.</p>
            <p class="text-t2 text-sm leading-relaxed mb-8">Our mission is to make stock investing understandable
                and accessible — providing structured insights, market analysis, and educational resources.</p>
            <div class="flex flex-wrap gap-4 mb-8">
                <div class="bg-bg3 border border-white/[0.08] rounded-xl px-5 py-4">
                    <div class="font-display text-2xl font-bold tracking-tight stat-count" data-target="30000">30K+
                    </div>
                    <div class="text-[11px] text-t3 mt-1">Investors Reached</div>
                </div>
                <div class="bg-bg3 border border-white/[0.08] rounded-xl px-5 py-4">
                    <div class="font-display text-2xl font-bold tracking-tight stat-count" data-target="150">$150M+
                    </div>
                    <div class="text-[11px] text-t3 mt-1">Market Assets Analyzed</div>
                </div>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('plans.list') }}"
                    class="bg-accent text-white font-medium px-7 py-3 rounded-xl hover:bg-blue-500 transition-all hover:-translate-y-0.5 no-underline text-sm">Start
                    Investing</a>
                <a href="{{ route('about.our-company') }}"
                    class="text-t1 text-sm font-medium px-7 py-3 rounded-xl border border-white/[0.15] hover:border-accent hover:text-accent2 transition-all no-underline">Learn
                    More</a>
            </div>
        </div>
        <div class="reveal-right rounded-2xl overflow-hidden border border-white/[0.08] group">
            <img src="{{ asset('assets/img/financial-growth.png') }}"
                alt="Credit Tide at global finance conference"
                class="w-full h-80 lg:h-56 sm:h-72 lg:h-[420px] object-cover object-[center_20%] transition-transform duration-500 group-hover:scale-[1.03]" />
        </div>
    </div>
</section>