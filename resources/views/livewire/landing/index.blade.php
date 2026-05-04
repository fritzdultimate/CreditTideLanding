<main>
    @include('layouts.landing.landing-hero')

    <!-- ══ PREMIUM HERO GRID - MOBILE OPTIMIZED ══ -->
    <section class="bg-bg2 py-8 px-4">
        <div class="max-w-7xl mx-auto">

            <div class="relative">

                <!-- Top Row: Two Images Side by Side -->
                <div class="grid grid-cols-2 gap-2 mb-2">
                    <!-- Image 1 - Cooking Scene -->
                    <div class="group relative h-44 bg-cover bg-center rounded-tl-2xl"
                        style="background-image: url('/assets/img/hero_01.png');">
                        <div class="absolute inset-0 bg-black/20"></div>
                    </div>

                    <!-- Image 2 - Blonde Woman -->
                    <div class="group relative h-44 bg-cover bg-center rounded-tr-2xl"
                        style="background-image: url('/assets/img/hero_03.png');">
                        <div class="absolute inset-0 bg-black/20"></div>
                    </div>
                </div>

                <!-- Floating Insight Card - Overlapping Top Images -->
                <div class="relative -mt-16 mb-2 px-4 z-10">
                    <div class="bg-white rounded-md shadow-xl p-2 flex items-center gap-3">

                        <!-- CT Icon -->
                        <div class="rounded-full bg-green-100 w-10 h-10 flex items-center justify-center flex-shrink-0">
                            <span class="text-base font-bold text-green-600">CT</span>
                        </div>

                        <!-- Text Content -->
                        <div class="flex-1">
                            <h3 class="text-gray-900 font-semibold text-base mb-0.5">
                                CreditTide Insights
                            </h3>
                            <p class="text-gray-500 text-xs">
                                Market opportunity today
                            </p>
                        </div>

                        <!-- Percentage Value -->
                        <div class="text-green-500 font-bold text-base flex-shrink-0">
                            +12.4%
                        </div>
                    </div>
                </div>

                <!-- Bottom Row: CTA Card and Conference Image -->
                <div class="grid grid-cols-2 gap-2">

                    <!-- CTA Card - Dark Background -->
                    <a href="about-us/our-company"
                        class="bg-gray-900 rounded-bl-2xl p-6 flex flex-col justify-center relative overflow-hidden group">

                        <!-- Arrow Icon -->
                        <div class="absolute top-4 right-4">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 text-white opacity-70">
                                <path fill="currentColor" d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z" />
                            </svg>
                        </div>

                        <h2 class="text-white text-2xl font-bold mb-2 leading-tight">
                            Invest Smarter
                        </h2>

                        <p class="text-gray-300 text-sm mb-1">
                            Learn stock
                        </p>

                        <p class="text-gray-300 text-sm mb-1">
                            investing with
                        </p>

                        <p class="text-green-400 font-semibold text-sm">
                            CreditTide Stock<br>Company
                        </p>
                    </a>

                    <!-- Image 3 - Conference -->
                    <div class="group relative h-full bg-cover bg-center rounded-br-2xl"
                        style="background-image: url('/assets/img/confrence-cr1.png');">
                        <div class="absolute inset-0 bg-black/20"></div>
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