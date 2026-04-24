<main>
    @include('layouts.landing.landing-hero')

    <!-- ══ HERO GRID REIMAGINED ══ -->
    <section class="bg-bg2 py-16 px-6 lg:px-12 hidden">
        <div class="max-w-6xl mx-auto">

            <div class="grid grid-cols-2 gap-px bg-white/[0.08] rounded-3xl overflow-hidden border border-white/[0.08] relative">

                <!-- Image 1 -->
                <div class="group relative min-h-56 bg-hero-1 bg-cover bg-center" style="background-image: url('/assets/img/hero_01.png');">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                </div>

                <!-- Image 2 -->
                <div class="group relative min-h-56 bg-cover bg-center" style="background-image: url('/assets/img/hero_03.png');">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                </div>

                <!-- CTA CARD -->
                <a href="about-us/our-company"
                class="feat-card bg-bg2 p-8 flex flex-col justify-end relative overflow-hidden group hover:bg-bg3 transition-all hover:-translate-y-1.5">

                    <!-- gradient top line -->
                    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-accent to-accent2 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <p class="text-t1 text-lg md:text-xl font-semibold tracking-tight mb-1">
                        Invest Smarter
                    </p>

                    <p class="text-t2 text-sm md:text-base">
                        Learn stock investing with
                    </p>

                    <p class="text-accent font-semibold text-sm md:text-base">
                        CreditTide Stock Company
                    </p>

                    <!-- arrow -->
                    <span class="absolute top-4 right-4 text-t2 group-hover:text-accent transition">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 md:w-7 md:h-7">
                            <path fill="currentColor"
                                d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"/>
                        </svg>
                    </span>
                </a>

                <!-- Image 3 -->
                <div class="group relative min-h-56 bg-cover bg-center" style="background-image: url('/assets/img/confrence-cr1.png');">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                </div>

                <!-- FLOATING INSIGHT CARD -->
                <div class="absolute w-full top-24 md:top-32 px-4 md:px-20">
                    <div class="feat-card reveal w-full bg-bg2 border border-white/[0.08] rounded-xl flex items-center gap-4 px-5 py-4 shadow-sm relative overflow-hidden group hover:bg-bg3 transition-all">

                        <!-- gradient top line (same as your system) -->
                        <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-accent to-accent2 opacity-80"></div>

                        <!-- icon -->
                        <div class="rounded-lg bg-accent/10 border border-accent/20 w-10 h-10 flex items-center justify-center">
                            <span class="text-xs font-bold text-accent uppercase">ct</span>
                        </div>

                        <!-- text -->
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-t1 tracking-tight">
                                CreditTide Insights
                            </span>
                            <span class="text-xs text-t2">
                                Market opportunity today
                            </span>
                        </div>

                        <!-- value -->
                        <p class="ml-auto text-accent2 font-semibold text-sm">
                            +12.4%
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ══ PREMIUM HERO GRID ══ -->
    <section class="bg-bg2 py-16 sm:py-20 px-4 sm:px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">

            <div class="relative grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-white/[0.08] rounded-3xl overflow-hidden border border-white/[0.08]">

                <!-- Image 1 -->
                <div class="group relative h-48 sm:h-56 lg:h-64 bg-cover bg-center"
                    style="background-image: url('/assets/img/hero_01.png');">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition duration-500"></div>
                </div>

                <!-- Image 2 -->
                <div class="group relative h-48 sm:h-56 lg:h-64 bg-cover bg-center"
                    style="background-image: url('/assets/img/hero_03.png');">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition duration-500"></div>
                </div>

                <!-- CTA CARD -->
                <a href="about-us/our-company"
                class="feat-card bg-bg2 p-6 sm:p-8 flex flex-col justify-end relative overflow-hidden group hover:bg-bg3 transition-all duration-300 hover:-translate-y-1.5">

                    <!-- gradient top line -->
                    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-accent to-accent2 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <p class="text-t1 text-lg sm:text-xl font-semibold tracking-tight mb-1">
                        Invest Smarter
                    </p>

                    <p class="text-t2 text-sm sm:text-base">
                        Learn stock investing with
                    </p>

                    <p class="text-accent font-semibold text-sm sm:text-base">
                        CreditTide Stock Company
                    </p>

                    <!-- arrow -->
                    <span class="absolute top-4 right-4 text-t2 group-hover:text-accent transition">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 sm:w-6 sm:h-6">
                            <path fill="currentColor"
                                d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"/>
                        </svg>
                    </span>
                </a>

                <!-- Image 3 -->
                <div class="group relative h-48 sm:h-56 lg:h-64 bg-cover bg-center"
                    style="background-image: url('/assets/img/confrence-cr1.png');">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition duration-500"></div>
                </div>

                <!-- Extra fill (keeps grid balanced on large screens) -->
                <div class="hidden lg:block bg-bg2"></div>

                <!-- FLOATING INSIGHT CARD -->
                <div class="absolute left-1/2 -translate-x-1/2 
                            top-[45%] sm:top-[60%] lg:top-1/2 
                            w-[90%] sm:w-[80%] lg:w-[60%]">

                    <div class="feat-card w-full bg-bg2 border border-white/[0.08] rounded-xl 
                                flex items-center gap-3 sm:gap-4 px-4 sm:px-5 py-3 sm:py-4 
                                shadow-md backdrop-blur-[2px]
                                hover:bg-bg3 transition-all duration-300 
                                hover:-translate-y-1 hover:shadow-xl relative overflow-hidden group">

                        <!-- gradient top line -->
                        <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-accent to-accent2 opacity-80"></div>

                        <!-- icon -->
                        <div class="rounded-lg bg-accent/10 border border-accent/20 
                                    w-9 h-9 sm:w-10 sm:h-10 flex items-center justify-center">
                            <span class="text-xs font-bold text-accent uppercase">ct</span>
                        </div>

                        <!-- text -->
                        <div class="flex flex-col">
                            <span class="text-sm sm:text-base font-semibold text-t1 tracking-tight">
                                CreditTide Insights
                            </span>
                            <span class="text-xs sm:text-sm text-t2">
                                Market opportunity today
                            </span>
                        </div>

                        <!-- value -->
                        <p class="ml-auto text-accent2 font-semibold text-sm sm:text-base">
                            +12.4%
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.landing.financial-growth')

    @include('layouts.landing.stats-bar')

    @include('layouts.landing.capabilities')

    @include('layouts.landing.app-mockup-strip')

    @include('layouts.landing.partner-logo')

    @include('layouts.landing.platform-stats')

    @include('layouts.landing.how-it-works')

    @include('layouts.landing.platform-specs')

    @include('layouts.landing.devices')

    @include('layouts.landing.trusted')

    @include('layouts.landing.mcrobie-announcement')

    @include('layouts.landing.george-bevis')

    @include('layouts.landing.plans', compact('plans'))

    @include('layouts.landing.stock-tradingview')

    @include('layouts.landing.testimonials', compact('testimonies'))

    @include('layouts.landing.investors', compact('investors'))

    @include('layouts.landing.companies', compact('companies'))

    @include('layouts.landing.how-it-started')

    @include('layouts.landing.top-stories')

    @include('layouts.landing.ceo-qoute')

    @include('layouts.landing.newsletter')

    @include('layouts.landing.cta-banner')

</main>