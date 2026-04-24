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
                    dedicated to empowering investors with transparency, security, and AI-driven financial growth.</p>
            </div>
            <div>
                <h4 class="text-[11px] font-semibold tracking-widest uppercase text-t3 mb-4">About Us</h4>
                <ul class="space-y-2.5 list-none p-0">
                    <li><a href="company.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Company</a></li>
                    <li><a href="leadership.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Our Leadership</a></li>
                    <li><a href="diversity.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Diversity &amp;
                            Inclusion</a></li>
                    <li><a href="responsibility.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Responsibility</a></li>
                    <li><a href="commitments.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Our Commitments</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-[11px] font-semibold tracking-widest uppercase text-t3 mb-4">Investment</h4>
                <ul class="space-y-2.5 list-none p-0">
                    <li><a href="plans.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Various Plans</a></li>
                    <li><a href="calculator.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Profit Calculator</a>
                    </li>
                    <li><a href="suggestion.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Get Suggestion</a></li>
                    <li><a href="blog.html" class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Blog
                            &amp; Insights</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[11px] font-semibold tracking-widest uppercase text-t3 mb-4">Policy</h4>
                <ul class="space-y-2.5 list-none p-0">
                    <li><a href="payment.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Payment Policy</a></li>
                    <li><a href="payment.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Deposit Policy</a></li>
                    <li><a href="payment.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">Withdrawal Policy</a>
                    </li>
                    <li><a href="payment.html"
                            class="text-t2 text-sm hover:text-t1 transition-colors no-underline">General Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 border-t border-white/[0.08] pt-6">
            <span class="text-xs text-t3">© 2025 Credit Tide. All rights reserved. 4th Floor The Featherstone Building,
                66 City Road.</span>
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
</footer>

<script>
    // ── TICKER ──
    const coins = [['BTC', '$84,210', 'up', '+3.24%'], ['ETH', '$3,124', 'up', '+1.87%'], ['BNB', '$412', 'up', '+0.94%'], ['USDT', '$1.00', 'up', '+0.01%'], ['SOL', '$178', 'dn', '-1.22%'], ['XRP', '$0.68', 'up', '+2.40%'], ['ADA', '$0.42', 'dn', '-0.65%'], ['DOGE', '$0.18', 'up', '+5.13%'], ['MATIC', '$0.91', 'up', '+1.10%'], ['LINK', '$14.52', 'up', '+2.88%']];
    const tk = document.getElementById('ticker');
    if (tk) { let h = '';[...coins, ...coins].forEach(([s, p, d, c]) => { h += `<span class="inline-flex items-center gap-2.5 text-xs"><span class="font-semibold text-t1">${s}</span><span class="text-t2">${p}</span><span class="${d === 'up' ? 'text-cgreen' : 'text-cred'}">${c}</span></span>` }); tk.innerHTML = h; }

    // ── MARQUEE DUPLICATE ──
    ['marq1', 'marq2'].forEach(id => { const t = document.getElementById(id); if (t) { const c = t.innerHTML; t.innerHTML = c + c; } });

    // ── FORCE SHOW ASSET ROWS FALLBACK ──
    setTimeout(() => {
        document.querySelectorAll('.a-row').forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'translateX(0)';
        });
    }, 2200);

    // ── VIDEO ──
    (function () {
        const v = document.getElementById('hero-video');
        if (!v) return;
        function tryPlay() { v.muted = true; const p = v.play(); if (p) p.then(() => v.classList.add('loaded')).catch(() => { }); }
        v.addEventListener('canplay', () => v.classList.add('loaded'));
        v.addEventListener('loadeddata', () => { v.classList.add('loaded'); tryPlay(); });
        function onI() { tryPlay();['click', 'touchstart', 'keydown'].forEach(e => document.removeEventListener(e, onI)); }
        ['click', 'touchstart', 'keydown'].forEach(e => document.addEventListener(e, onI));
        v.load(); tryPlay();
    })();

    // ── SCROLL REVEAL ──
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('revealed'); } });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal,.reveal-left,.reveal-right,.reveal-scale').forEach(el => io.observe(el));

    // ── COUNTER ANIMATION ──
    function animCount(el) {
        const raw = el.dataset.target || el.textContent;
        const num = parseFloat(raw.replace(/[^0-9.]/g, ''));
        if (!num) return;
        const isFloat = raw.includes('.');
        const prefix = raw.match(/^[^0-9]*/)?.[0] || '';
        const suffix = raw.match(/[^0-9.]*$/)?.[0] || '';
        const dur = 1800, start = performance.now();
        function step(now) {
            const p = Math.min((now - start) / dur, 1);
            const ease = 1 - Math.pow(1 - p, 3);
            const v = isFloat ? (num * ease).toFixed(1) : Math.round(num * ease);
            el.textContent = prefix + Number(v).toLocaleString() + suffix;
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }
    const cio = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting && !e.target.dataset.counted) {
                e.target.dataset.counted = '1';
                animCount(e.target);
            }
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('.stat-count').forEach(el => {
        if (!el.dataset.target) el.dataset.target = el.textContent.trim();
        cio.observe(el);
    });

    // ── CELEBRITY STAGGER ──
    const celebIO = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.querySelectorAll('.celeb-item').forEach((c, i) => {
                    c.style.opacity = '0'; c.style.transform = 'translateY(18px)';
                    c.style.transition = `opacity .45s ease ${i * 0.05}s,transform .45s cubic-bezier(.22,.68,0,1.2) ${i * 0.05}s,border-color .2s,background .2s`;
                    setTimeout(() => { c.style.opacity = '1'; c.style.transform = 'translateY(0)'; }, 40 + i * 50);
                });
                celebIO.unobserve(e.target);
            }
        });
    }, { threshold: 0.1 });
    const cg = document.getElementById('celeb-grid');
    if (cg) celebIO.observe(cg);

    // ── NAV SHRINK ON SCROLL ──
    window.addEventListener('scroll', () => {
        document.getElementById('main-nav').classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });

    // ── MOBILE MENU CLOSE ON LINK CLICK ──
    document.querySelectorAll('#mob-menu a').forEach(a => {
        a.addEventListener('click', () => {
            document.getElementById('mob-menu').classList.remove('open');
            const spans = document.getElementById('mob-toggle').querySelectorAll('span');
            spans[0].style.transform = ''; spans[1].style.opacity = '1'; spans[2].style.transform = '';
        });
    });
</script>