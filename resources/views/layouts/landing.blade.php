<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    @include('layouts.landing.head')

    <body class="font-body bg-bg text-t1">
        <!-- ══ FLOATING CONTACT BUTTONS ══ -->
        <div class="fixed bottom-7 left-5 z-50 flex flex-col gap-3">
            <a href="https://wa.me/1234567890" class="float-btn w-12 h-12 rounded-full bg-[#25D366] flex items-center justify-center text-xl shadow-lg hover:scale-110 transition-transform no-underline">💬</a>
            <a href="mailto:support@credittidestockcompany.com" class="float-btn w-12 h-12 rounded-full bg-accent flex items-center justify-center text-xl shadow-lg hover:scale-110 transition-transform no-underline">✉️</a>
        </div>

        <!-- ══ NAV ══ -->
        <nav id="main-nav" class="fixed top-0 left-0 right-0 z-40 h-16 bg-[rgba(3,6,15,0.9)] backdrop-blur-xl flex items-center justify-between px-6 lg:px-12" style="box-shadow:0 1px 0 rgba(255,255,255,0.08)">
            <a href="{{ route('home') }}" class="font-display font-extrabold text-lg flex items-center gap-2 text-t1 no-underline">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-accent to-accent2 flex items-center justify-center text-white text-sm font-black flex-shrink-0">CT</div>
                Credit Tide
            </a>

            <!-- Desktop nav -->
            <ul class="hidden lg:flex items-center gap-1 list-none">
                <li class="has-dropdown relative">
                <span class="nav-link text-t2 text-sm px-3 py-2 rounded-lg cursor-pointer hover:text-t1 hover:bg-white/[0.07] flex items-center gap-1 transition-colors">About Us ▾</span>
                <div class="dropdown absolute top-full left-0 -mt-px bg-bg2 border border-white/[0.08] rounded-xl p-2 pt-3 min-w-[200px] shadow-2xl z-50">
                    <a href="{{ route('about.our-company') }}"        class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Our Company</a>
                    <a href="{{ route('about.our-leadership') }}"     class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Our Leadership</a>
                    <a href="{{ route('about.diversity-inclusion') }}"      class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Diversity &amp; Inclusion</a>
                    <a href="{{ route('about.responsibility') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Corporate Responsibility</a>
                    <a href="{{ route('about.investment-capabilities') }}"   class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Investment Capabilities</a>
                    <a href="{{ route('about.our-commitment') }}"    class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Our Commitments</a>
                </div>
                </li>
                <li class="has-dropdown relative">
                <span class="nav-link text-t2 text-sm px-3 py-2 rounded-lg cursor-pointer hover:text-t1 hover:bg-white/[0.07] flex items-center gap-1 transition-colors">Investment Plans ▾</span>
                <div class="dropdown absolute top-full left-0 -mt-px bg-bg2 border border-white/[0.08] rounded-xl p-2 pt-3 min-w-[180px] shadow-2xl z-50">
                    <a href="{{ route('plans.list') }}"      class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Various Plans</a>
                    <a href="{{ route('plans.calculator') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Profit Calculator</a>
                    <a href="{{ route('plans.suggestion') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Get Suggestion</a>
                </div>
                </li>
                <li class="has-dropdown relative">
                <span class="nav-link text-t2 text-sm px-3 py-2 rounded-lg cursor-pointer hover:text-t1 hover:bg-white/[0.07] flex items-center gap-1 transition-colors">Blog/Insight ▾</span>
                <div class="dropdown absolute top-full left-0 -mt-px bg-bg2 border border-white/[0.08] rounded-xl p-2 pt-3 min-w-[180px] shadow-2xl z-50">
                    <a href="{{ route('blog.investment-article') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Investment Articles</a>
                    <a href="#" class="hidden px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Financial Tips</a>
                    <a href="#" class="hidden px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">News Insight</a>
                </div>
                </li>
                <li class="has-dropdown relative">
                <span class="nav-link text-t2 text-sm px-3 py-2 rounded-lg cursor-pointer hover:text-t1 hover:bg-white/[0.07] flex items-center gap-1 transition-colors">Privacy Policy ▾</span>
                <div class="dropdown absolute top-full left-0 -mt-px bg-bg2 border border-white/[0.08] rounded-xl p-2 pt-3 min-w-[180px] shadow-2xl z-50">
                    <a href="{{ route('legal.payment-policy') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Payment Policy</a>
                    <a href="{{ route('legal.payment-policy') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Deposit Policy</a>
                    <a href="{{ route('legal.payment-policy') }}" class="block px-4 py-2 text-t2 text-sm rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Withdrawal Policy</a>
                </div>
                </li>
            </ul>

            <div class="hidden lg:flex items-center gap-2">
                <button class="text-t2 text-sm px-4 py-2 border border-white/[0.15] rounded-lg hover:border-accent hover:text-t1 transition-all">Login</button>
                <button class="text-t2 text-sm px-4 py-2 border border-transparent rounded-lg hover:text-t1 transition-all">Talk to support</button>
                <a href="{{ route('plans.list') }}" class="bg-accent text-white text-sm font-medium px-5 py-2 rounded-lg hover:bg-blue-500 transition-all hover:-translate-y-0.5 no-underline">Join Us Now</a>
            </div>

            <!-- Mobile hamburger -->
            <button id="mob-toggle" class="lg:hidden flex flex-col gap-1.5 p-2" onclick="
                const m=document.getElementById('mob-menu');
                m.classList.toggle('open');
                const spans=this.querySelectorAll('span');
                const open=m.classList.contains('open');
                spans[0].style.transform=open?'translateY(8px) rotate(45deg)':'';
                spans[1].style.opacity=open?'0':'1';
                spans[2].style.transform=open?'translateY(-8px) rotate(-45deg) scaleX(1.5)':'';
            ">
                <span class="block w-6 h-0.5 bg-t1 transition-all duration-300 origin-center"></span>
                <span class="block w-6 h-0.5 bg-t1 transition-all duration-300"></span>
                <span class="block w-4 h-0.5 bg-t1 transition-all duration-300 origin-center"></span>
            </button>
        </nav>

        <!-- Mobile menu -->
        <div id="mob-menu" class="mob-menu fixed top-16 left-0 right-0 z-30 bg-bg2 overflow-hidden">
            <div class="p-4 flex flex-col gap-1 border-t border-white/[0.06]">
                <a href="{{ route('about.our-company') }}"        class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Our Company</a>
                <a href="{{ route('about.our-leadership') }}"     class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Our Leadership</a>
                <a href="{{ route('about.diversity-inclusion') }}"      class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Diversity &amp; Inclusion</a>
                <a href="{{ route('about.responsibility') }}" class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Corporate Responsibility</a>
                <a href="{{ route('plans.list') }}"          class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Investment Plans</a>
                <a href="{{ route('plans.calculator') }}"     class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Profit Calculator</a>
                <a href="{{ route('blog.investment-article') }}"           class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Blog &amp; Insights</a>
                <a href="{{ route('legal.payment-policy') }}"        class="block py-3 px-4 text-t2 rounded-lg hover:bg-white/[0.07] hover:text-t1 transition-colors no-underline">Payment Policy</a>
                <div class="flex gap-2 mt-3 pt-3 border-t border-white/[0.08]">
                    <button class="flex-1 py-2.5 border border-white/[0.15] rounded-lg text-t2 text-sm hover:border-accent transition-all">Login</button>
                    <a href="{{ route('plans.list') }}" class="flex-1 py-2.5 bg-accent rounded-lg text-white text-sm font-medium text-center no-underline hover:bg-blue-500 transition-all">Join Us Now</a>
                </div>
            </div>
        </div>

        <!-- ══ TICKER ══ -->
        <div class="mt-16 bg-bg2 border-b border-white/[0.08] py-2.5 overflow-hidden ticker-wrap w-full">
            <div class="ticker-track flex gap-12 w-max" id="ticker"></div>
        </div>
        {{ $slot }}

        @include('layouts.landing.footer')
    </body>
</html>