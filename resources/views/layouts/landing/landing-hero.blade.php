<!-- ══ HERO ══ -->
<section
    class="relative min-h-[calc(100vh-100px)] flex items-center px-6 lg:px-12 pt-24 pb-16 lg:py-20 overflow-hidden">
    <!-- Video background -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0 z-0 bg-anim"
            style="background:linear-gradient(135deg,#03060F,#0B1428,#070D1C,#03060F)"></div>
        <video id="hero-video" class="hero-video absolute inset-0 w-full h-full object-cover z-[1]" autoplay muted loop
            playsinline preload="auto">
            <source src="{{ asset('assets/videos/banner.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 z-[2]"
            style="background:linear-gradient(to right,rgba(3,6,15,0.92) 0%,rgba(3,6,15,0.75) 45%,rgba(3,6,15,0.45) 100%)">
        </div>
        <div class="absolute inset-0 z-[2]"
            style="background:linear-gradient(to top,rgba(3,6,15,0.85) 0%,transparent 40%)"></div>
        <div class="absolute inset-0 z-[3]"
            style="background-image:linear-gradient(rgba(255,255,255,0.015) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.015) 1px,transparent 1px);background-size:60px 60px">
        </div>
    </div>

    <div
        class="relative z-10 max-w-6xl mx-auto w-full grid grid-cols-1 lg:grid-cols-[1fr_400px] gap-10 lg:gap-12 items-center">
        <!-- Text -->
        <div class="min-w-0">
            <div
                class="hero-badge-el inline-flex items-center gap-2 bg-accent/[0.15] border border-accent/30 rounded-full px-4 py-1.5 text-xs font-medium text-accent2 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-accent2 animate-[pulse_2s_infinite]"></span>
                Award-winning investment platform
            </div>
            <h1 class="hero-h1 font-display text-[32px] sm:text-4xl md:text-5xl lg:text-[52px] xl:text-[60px] font-black leading-[1.1] tracking-[-1.5px] sm:tracking-[-2px] mb-6"
                style="text-shadow:0 2px 20px rgba(0,0,0,0.6)">
                Our Dream Is Global<br>Stock <span
                    class="bg-gradient-to-r from-accent to-accent2 bg-clip-text text-transparent">Investment</span><br><span
                    class="block">Transformation</span>
            </h1>
            <p class="hero-p-el text-base lg:text-lg leading-relaxed mb-9 max-w-md"
                style="color:rgba(220,230,255,0.9);text-shadow:0 1px 8px rgba(0,0,0,0.5)">
                Empower your financial journey with cutting-edge tools, diversified crypto portfolios, and
                expert-driven strategies. Built for every investor.
            </p>
            <div class="hero-btns-el flex flex-wrap gap-3 mb-12">
                <a href="{{ route('plans.list') }}"
                    class="bg-accent text-white font-medium px-8 py-3.5 rounded-xl hover:bg-blue-500 transition-all hover:-translate-y-0.5 hover:shadow-[0_12px_40px_rgba(43,110,255,0.35)] no-underline">Start
                    Investing</a>
                <a href="{{ route('plans.list') }}" class="font-medium px-8 py-3.5 rounded-xl transition-all no-underline"
                    style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.35);color:#fff;backdrop-filter:blur(6px)">View
                    Plans</a>
            </div>
            <div class="hero-stats-el flex flex-wrap gap-8 sm:gap-10">
                <div>
                    <div class="font-display text-2xl font-bold text-white stat-count" data-target="$1.2T+"
                        style="text-shadow:0 2px 10px rgba(0,0,0,0.5)">$1.2T+</div>
                    <div class="text-xs text-t3 tracking-wide mt-1">Assets Managed</div>
                </div>
                <div>
                    <div class="font-display text-2xl font-bold text-white stat-count" data-target="500K+"
                        style="text-shadow:0 2px 10px rgba(0,0,0,0.5)">500K+</div>
                    <div class="text-xs text-t3 tracking-wide mt-1">Active Investors</div>
                </div>
                <div>
                    <div class="font-display text-2xl font-bold text-white stat-count" data-target="99.9%"
                        style="text-shadow:0 2px 10px rgba(0,0,0,0.5)">99.9%</div>
                    <div class="text-xs text-t3 tracking-wide mt-1">Uptime Security</div>
                </div>
            </div>
        </div>

        <!-- Dashboard mockup -->
        <div class="hero-dash-el hidden lg:block relative w-full" style="padding-bottom:28px;max-width:400px">
            <div class="rounded-2xl p-5 w-full"
                style="background:rgba(7,13,28,0.92);border:1px solid rgba(255,255,255,0.14);backdrop-filter:blur(16px);box-shadow:0 24px 60px rgba(0,0,0,0.6)">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xs font-medium text-t2">Portfolio Overview</span>
                    <span class="flex items-center gap-1.5 text-xs text-cgreen"><span
                            class="w-1.5 h-1.5 rounded-full bg-cgreen animate-[pulse_1.5s_infinite]"></span>Live</span>
                </div>
                <div class="text-[10px] text-t3 tracking-wide mb-1">TOTAL VALUE</div>
                <div class="font-display text-3xl font-bold tracking-tight mb-1">$48,204.80</div>
                <div class="text-xs text-cgreen mb-4">↑ +$2,140.50 (4.64%) today</div>
                <div class="flex items-end gap-[3px] mb-4" style="height:56px">
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:17px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:25px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:21px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:31px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:24px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:38px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:34px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent/25 rounded-t" style="height:40px;transform-origin:bottom">
                    </div>
                    <div class="bar flex-1 bg-accent rounded-t" style="height:45px;transform-origin:bottom"></div>
                    <div class="bar flex-1 bg-accent rounded-t" style="height:50px;transform-origin:bottom"></div>
                    <div class="bar flex-1 bg-accent rounded-t" style="height:48px;transform-origin:bottom"></div>
                    <div class="bar flex-1 bg-accent rounded-t" style="height:56px;transform-origin:bottom"></div>
                </div>
                <div class="flex flex-col gap-2.5">
                    <div class="a-row flex items-center gap-2.5">
                        <div
                            class="w-8 h-8 rounded-full bg-cgold/15 flex items-center justify-center text-cgold text-[10px] font-bold flex-shrink-0">
                            BTC</div>
                        <div class="flex-1">
                            <div class="text-xs font-medium">Bitcoin</div>
                            <div class="text-[10px] text-t3">0.2841 BTC</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs font-medium">$23,900</div>
                            <div class="text-[10px] text-cgreen">+3.24%</div>
                        </div>
                    </div>
                    <div class="a-row flex items-center gap-2.5">
                        <div
                            class="w-8 h-8 rounded-full bg-accent3/15 flex items-center justify-center text-accent3 text-[10px] font-bold flex-shrink-0">
                            ETH</div>
                        <div class="flex-1">
                            <div class="text-xs font-medium">Ethereum</div>
                            <div class="text-[10px] text-t3">4.112 ETH</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs font-medium">$12,841</div>
                            <div class="text-[10px] text-cgreen">+1.87%</div>
                        </div>
                    </div>
                    <div class="a-row flex items-center gap-2.5">
                        <div
                            class="w-8 h-8 rounded-full bg-cgreen/15 flex items-center justify-center text-cgreen text-[10px] font-bold flex-shrink-0">
                            USDT</div>
                        <div class="flex-1">
                            <div class="text-xs font-medium">Tether</div>
                            <div class="text-[10px] text-t3">11,463 USDT</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xs font-medium">$11,463</div>
                            <div class="text-[10px] text-cgreen">+0.01%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Floating ROI card -->
            <div class="absolute -bottom-3 -left-5 rounded-xl px-4 py-3"
                style="background:rgba(11,20,40,0.95);border:1px solid rgba(255,255,255,0.18);backdrop-filter:blur(12px);box-shadow:0 12px 32px rgba(0,0,0,0.5)">
                <div class="text-[9px] text-t3 tracking-wide mb-1">DAILY ROI</div>
                <div class="font-display text-lg font-bold text-cgreen">+2.04%</div>
                <div class="text-[9px] text-t3 mt-0.5">Premium Plan · Active</div>
            </div>
        </div>
    </div>
</section>