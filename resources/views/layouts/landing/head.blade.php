<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Tide — Smart Crypto Investment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Syne', 'sans-serif'],
                        body: ['DM Sans', 'sans-serif'],
                    },
                    colors: {
                        bg: '#03060F',
                        bg2: '#070D1C',
                        bg3: '#0B1428',
                        accent: '#2B6EFF',
                        accent2: '#00C8FF',
                        accent3: '#7B5EFF',
                        cgreen: '#00E5A0',
                        cred: '#FF4D6A',
                        cgold: '#FFB547',
                        t1: '#F0F4FF',
                        t2: '#8A9ABF',
                        t3: '#4E5F80',
                        bdr: 'rgba(255,255,255,0.08)',
                        bdr2: 'rgba(255,255,255,0.15)',
                    },
                    animation: {
                        'scroll': 'scroll 35s linear infinite',
                        'marq-left': 'marqLeft 38s linear infinite',
                        'marq-right': 'marqRight 42s linear infinite',
                        'pulse-dot': 'pulse 2s infinite',
                        'bar-grow': 'barGrow 0.8s cubic-bezier(.22,.68,0,1.2) both',
                        'float': 'floatBounce 3s ease-in-out infinite',
                        'hero-line': 'heroLine 1.2s cubic-bezier(.22,.68,0,1.2) 0.5s forwards',
                        'slide-up': 'slideUp 0.7s cubic-bezier(.22,.68,0,1.2) 0.25s both',
                        'slide-down': 'slideDown 0.6s cubic-bezier(.22,.68,0,1.2) 0.1s both',
                        'slide-left': 'slideLeft 0.8s cubic-bezier(.22,.68,0,1.2) 0.4s both',
                        'fade-in': 'fadeIn2 0.7s ease 0.45s both',
                        'bg-shift': 'bgshift 12s ease infinite',
                    },
                    keyframes: {
                        scroll: { from: { transform: 'translateX(0)' }, to: { transform: 'translateX(-50%)' } },
                        marqLeft: { from: { transform: 'translateX(0)' }, to: { transform: 'translateX(-50%)' } },
                        marqRight: { from: { transform: 'translateX(-50%)' }, to: { transform: 'translateX(0)' } },
                        floatBounce: { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-6px)' } },
                        heroLine: { to: { width: '100%' } },
                        slideUp: { from: { opacity: '0', transform: 'translateY(30px)' }, to: { opacity: '1', transform: 'translateY(0)' } },
                        slideDown: { from: { opacity: '0', transform: 'translateY(-20px)' }, to: { opacity: '1', transform: 'translateY(0)' } },
                        slideLeft: { from: { opacity: '0', transform: 'translateX(50px)' }, to: { opacity: '1', transform: 'translateX(0)' } },
                        fadeIn2: { from: { opacity: '0' }, to: { opacity: '1' } },
                        bgshift: { '0%,100%': { backgroundPosition: '0% 50%' }, '50%': { backgroundPosition: '100% 50%' } },
                        barGrow: { from: { opacity: '0', transform: 'scaleY(0)' }, to: { opacity: '1', transform: 'scaleY(1)' } },
                        assetIn: { to: { opacity: '1', transform: 'translateX(0)' } },
                        pulse: { '0%,100%': { opacity: '1', transform: 'scale(1)' }, '50%': { opacity: '0.5', transform: 'scale(0.8)' } },
                    },
                }
            }
        }
    </script>
    <style>
        html,
        body {
            overflow-x: hidden;
            max-width: 100%;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #03060F;
            color: #F0F4FF;
        }

        .font-display {
            font-family: 'Syne', sans-serif;
        }

        /* Reveal animations */
        .reveal,
        .reveal-left,
        .reveal-right,
        .reveal-scale {
            opacity: 0;
            transition: opacity .7s cubic-bezier(.22, .68, 0, 1.2), transform .7s cubic-bezier(.22, .68, 0, 1.2);
        }

        .reveal {
            transform: translateY(28px);
        }

        .reveal-left {
            transform: translateX(-36px);
        }

        .reveal-right {
            transform: translateX(36px);
        }

        .reveal-scale {
            transform: scale(0.93);
        }

        .revealed {
            opacity: 1 !important;
            transform: none !important;
        }

        .delay-1 {
            transition-delay: .1s
        }

        .delay-2 {
            transition-delay: .2s
        }

        .delay-3 {
            transition-delay: .3s
        }

        .delay-4 {
            transition-delay: .4s
        }

        .delay-5 {
            transition-delay: .5s
        }

        .delay-6 {
            transition-delay: .6s
        }

        /* Ticker */
        .ticker-track {
            animation: scroll 35s linear infinite;
        }

        .ticker-wrap:hover .ticker-track {
            animation-play-state: paused;
        }

        /* Hero animations */
        .hero-badge-el {
            animation: slideDown .6s cubic-bezier(.22, .68, 0, 1.2) .1s both;
        }

        .hero-h1 {
            animation: slideUp .7s cubic-bezier(.22, .68, 0, 1.2) .25s both;
        }

        .hero-p-el {
            animation: fadeIn2 .7s ease .45s both;
        }

        .hero-btns-el {
            animation: fadeIn2 .6s ease .6s both;
        }

        .hero-stats-el {
            animation: fadeIn2 .6s ease .75s both;
        }

        .hero-dash-el {
            animation: slideLeft .8s cubic-bezier(.22, .68, 0, 1.2) .4s both;
        }

        /* Bars */
        .bar {
            transform-origin: bottom;
            animation: barGrow .8s cubic-bezier(.22, .68, 0, 1.2) both;
        }

        .bar:nth-child(1) {
            animation-delay: .05s
        }

        .bar:nth-child(2) {
            animation-delay: .1s
        }

        .bar:nth-child(3) {
            animation-delay: .15s
        }

        .bar:nth-child(4) {
            animation-delay: .2s
        }

        .bar:nth-child(5) {
            animation-delay: .25s
        }

        .bar:nth-child(6) {
            animation-delay: .3s
        }

        .bar:nth-child(7) {
            animation-delay: .35s
        }

        .bar:nth-child(8) {
            animation-delay: .4s
        }

        .bar:nth-child(9) {
            animation-delay: .45s
        }

        .bar:nth-child(10) {
            animation-delay: .5s
        }

        .bar:nth-child(11) {
            animation-delay: .55s
        }

        .bar:nth-child(12) {
            animation-delay: .6s
        }

        /* Asset rows */
        .a-row {
            opacity: 0;
            transform: translateX(16px);
            animation: assetIn .5s ease both;
        }

        .a-row:nth-child(1) {
            animation-delay: .8s
        }

        .a-row:nth-child(2) {
            animation-delay: .95s
        }

        .a-row:nth-child(3) {
            animation-delay: 1.1s
        }

        /* Video */
        .hero-video {
            opacity: 0;
            transition: opacity 1s ease;
        }

        .hero-video.loaded {
            opacity: 1;
        }

        /* Floating btns */
        .float-btn {
            animation: floatBounce 3s ease-in-out infinite;
        }

        .float-btn:nth-child(2) {
            animation-delay: .4s;
        }

        .float-btn:hover {
            animation: none !important;
        }

        /* Marquee */
        .marq-left {
            animation: marqLeft 38s linear infinite;
            display: flex;
            gap: 1rem;
            width: max-content;
        }

        .marq-right {
            animation: marqRight 42s linear infinite;
            display: flex;
            gap: 1rem;
            width: max-content;
        }

        .marq-wrap:hover .marq-left,
        .marq-wrap:hover .marq-right {
            animation-play-state: paused;
        }

        /* Nav underline */
        /* Nav link hover: removed */

        /* Nav shrink on scroll */
        nav {
            transition: height .3s ease, background .3s ease, box-shadow .3s ease;
        }

        nav.scrolled {
            height: 54px !important;
            background: rgba(3, 6, 15, 0.97) !important;
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.06), 0 4px 24px rgba(0, 0, 0, 0.4) !important;
        }

        /* Dropdown */
        .dropdown {
            opacity: 0;
            pointer-events: none;
            transform: translateY(-4px);
            transition: all .2s;
        }

        .has-dropdown:hover .dropdown {
            opacity: 1;
            pointer-events: all;
            transform: translateY(0);
        }

        /* Bridge gap: pseudo-element fills space between trigger and dropdown */
        .has-dropdown::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            height: 8px;
        }

        /* Page hero line */
        .page-hero {
            position: relative;
        }

        .page-hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 0;
            background: linear-gradient(90deg, #2B6EFF, #00C8FF);
            animation: heroLine 1.2s cubic-bezier(.22, .68, 0, 1.2) .5s forwards;
        }

        /* Smooth image hover */
        .img-hover {
            transition: transform .5s cubic-bezier(.22, .68, 0, 1.2);
        }

        .img-hover:hover {
            transform: scale(1.04);
        }

        /* Hide scrollbar */
        .no-scroll::-webkit-scrollbar {
            display: none;
        }

        /* ── MARQUEE KEYFRAMES (must be in <style>, Tailwind CDN does not generate these) ── */
        @keyframes marqLeft {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes marqRight {
            from {
                transform: translateX(-50%);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideLeft {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeIn2 {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes bgshift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes barGrow {
            from {
                opacity: 0;
                transform: scaleY(0);
            }

            to {
                opacity: 1;
                transform: scaleY(1);
            }
        }

        @keyframes assetIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes floatBounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes heroLine {
            to {
                width: 100%;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.8);
            }
        }

        /* Bg animation */
        .bg-anim {
            background-size: 400% 400%;
            animation: bgshift 12s ease infinite;
        }

        /* Mobile menu */
        .mob-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height .4s ease;
        }

        .mob-menu.open {
            max-height: 600px;
        }
    </style>
</head>