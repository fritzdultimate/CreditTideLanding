<!-- ══ MCROBIE ANNOUNCEMENT ══ -->
<section class="bg-bg2 py-20 px-6 lg:px-12">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        {{-- LEFT: Text --}}
        <div class="reveal-left">
            <div class="text-xs font-semibold tracking-[1.5px] uppercase text-accent2 flex items-center gap-2 mb-4">
                <span class="w-5 h-px bg-accent2"></span>Head of Administrator
            </div>
            <h2 class="font-display text-2xl lg:text-4xl font-bold tracking-[-1px] mb-5">
                Introducing Mr. Gary Allen McRobie As The New Head Administrator
            </h2>
            <p class="text-t2 text-sm leading-relaxed mb-4">
                We are pleased to announce that Mr. Gary Allen McRobie has been appointed as the
                new Head Administrator of Credit Tide Investment and Stock Company.
            </p>
            <p class="text-t2 text-sm leading-relaxed mb-8">
                With a strong background in administration and finance, Mr. McRobie is eager to
                bring his expertise and dedication to the company, ensuring continuous growth and success.
            </p>
            <a href="{{ route('about.our-leadership') }}"
               class="bg-accent text-white font-medium px-7 py-3 rounded-xl hover:bg-blue-500 transition-all hover:-translate-y-0.5 no-underline text-sm">
                Learn More →
            </a>
        </div>

        {{-- RIGHT: Video card --}}
        <div class="reveal-right bg-bg3 border border-white/[0.08] rounded-2xl overflow-hidden">

            {{-- Browser bar --}}
            <div class="bg-bg flex items-center gap-2 px-4 py-3 border-b border-white/[0.08]">
                <span class="w-2.5 h-2.5 rounded-full bg-cred"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-cgold"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-cgreen"></span>
                <span class="text-xs text-t3 ml-2">Gary McRobie — Introduction</span>
            </div>

            {{-- Video --}}
            <div class="relative w-full" style="aspect-ratio:16/9">
                <video
                    class="w-full h-full object-cover"
                    src="{{ asset('assets/videos/introductory.mp4') }}"
                    poster="{{ asset('assets/img/hod.jpeg') }}"
                    controls
                    preload="none"
                    playsinline
                >
                    Your browser does not support the video tag.
                </video>
            </div>

            {{-- Name + title strip below video --}}
            <div class="flex items-center gap-3 px-5 py-4 border-t border-white/[0.06]"
                 style="background:rgba(0,0,0,.25)">
                <img
                    src="{{ asset('assets/img/hod.jpeg') }}"
                    alt="Gary Allen McRobie"
                    class="w-9 h-9 rounded-full object-cover flex-shrink-0"
                    style="border:1px solid rgba(255,255,255,.12)"
                />
                <div>
                    <p class="font-display font-bold text-sm text-t1 leading-tight">Gary Allen McRobie</p>
                    <p class="text-xs text-accent2 mt-0.5">Head Administrator · Credit Tide</p>
                </div>
                <div class="ml-auto flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-cgreen block"></span>
                    <span class="text-xs text-t3">Official</span>
                </div>
            </div>

        </div>
    </div>
</section>