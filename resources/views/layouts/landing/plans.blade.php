<!-- ══ INVESTMENT PLANS ══ -->
<section class="bg-bg2 py-14 px-5 lg:px-10">
    <div class="max-w-6xl mx-auto">

        <!-- HEADER (REDUCED HEIGHT) -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-10">

            <div class="max-w-xl">
                <div
                    class="text-[11px] font-semibold tracking-[1.5px] uppercase text-accent2 flex items-center gap-2 mb-3">
                    <span class="w-4 h-px bg-accent2"></span>Investment Plans
                </div>

                <h2 class="font-display text-2xl lg:text-3xl font-bold tracking-[-1px] mb-2">
                    Choose Your Plan
                </h2>

                <p class="text-t2 text-sm">
                    Flexible plans designed for different investment goals.
                </p>
            </div>

            <!-- STATS (INLINE COMPACT) -->
            <div class="flex gap-6">
                <div>
                    <div class="text-lg font-bold text-accent2">2.04%</div>
                    <div class="text-[10px] text-t3">Max ROI</div>
                </div>
                <div>
                    <div class="text-lg font-bold text-cgreen">60</div>
                    <div class="text-[10px] text-t3">Min Days</div>
                </div>
                <div>
                    <div class="text-lg font-bold text-cgold">{{ $plans->count() }}</div>
                    <div class="text-[10px] text-t3">Plans</div>
                </div>
            </div>
        </div>

        <!-- CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3">

            @foreach ($plans as $plan)
                <div class="bg-gray-900 border border-white/10 rounded-xl p-4 hover:scale-[1.02] transition-all shadow-lg">

                    <!-- Header -->
                    <div class="flex justify-between items-center mb-3">
                        <div>
                            <h3 class="text-white font-semibold text-sm">{{ $plan->name }}</h3>
                            <p class="text-gray-400 text-[10px]">{{ $plan->duration }} days</p>
                        </div>

                        <span class="text-sky-400 font-bold text-sm">{{ $plan->interest_rate }}%</span>
                    </div>

                    <!-- Range -->
                    <div class="flex justify-between text-[10px] text-gray-300 mb-3">
                        <span>${{ format_compact($plan->min_amount) }} - ${{ format_compact($plan->max_amount) }}</span>
                        <span>Daily ROI</span>
                    </div>

                    <!-- Divider -->
                    <div class="h-px bg-white/10 mb-3"></div>

                    <!-- CTA -->
                    <button
                        class="w-full py-2 rounded-lg bg-accent hover:bg-blue-500 text-white text-xs font-medium transition">
                        Get Started
                    </button>

                </div>
            @endforeach

        </div>
    </div>
</section>