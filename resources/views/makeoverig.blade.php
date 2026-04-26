<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pulsar Gaming Gears</title>
    <meta name="description" content="Pulsar Gaming Gears Indonesia - Barebone Keyboard, Keycaps, Gaming Mouse, Gaming Mousepad">
    <meta name="keywords" content="pulsar, gaming, mouse, keyboard, mousepad, indonesia">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Inter:wght@300;400;500;600&family=Orbitron:wght@700;900&display=swap" rel="stylesheet">

    <style>
        /* ===== CSS VARIABLES ===== */
        :root {
            --bg-dark: #0a0a0a;
            --bg-card: #111111;
            --bg-section: #0f0f0f;
            --red: #e81c24;
            --red-dim: #b01218;
            --white: #f0f0f0;
            --gray: #888888;
            --border: #1f1f1f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg-dark);
            color: var(--white);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar { width: 4px; }
        ::-webkit-scrollbar-track { background: var(--bg-dark); }
        ::-webkit-scrollbar-thumb { background: var(--red); border-radius: 2px; }

        /* ===== HEADER ===== */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
            background: rgba(10,10,10,0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            padding: 0 40px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.4rem;
            font-weight: 900;
            color: var(--white);
            text-decoration: none;
            letter-spacing: 2px;
        }

        .logo span {
            color: var(--red);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 36px;
        }

        nav ul a {
            color: var(--gray);
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: color 0.2s;
        }

        nav ul a:hover,
        nav ul a.active {
            color: var(--white);
        }

        /* ===== HERO ===== */
        #hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 64px;
            background: var(--bg-dark);
            position: relative;
            overflow: hidden;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(232,28,36,0.12) 0%, transparent 70%);
            pointer-events: none;
        }

        #hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--red), transparent);
        }

        .hero-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            width: 100%;
        }

        .hero-text h1 {
            font-family: 'Rajdhani', sans-serif;
            font-size: 3.4rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .hero-text h1 span {
            color: var(--red);
        }

        .hero-text p {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 36px;
            max-width: 420px;
        }

        .hero-btns {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--red);
            color: var(--white);
            padding: 12px 28px;
            border: none;
            font-family: 'Rajdhani', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
            clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 10px 100%, 0 calc(100% - 10px));
        }

        .btn-primary:hover {
            background: var(--red-dim);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: transparent;
            color: var(--white);
            padding: 12px 28px;
            border: 1px solid var(--border);
            font-family: 'Rajdhani', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            cursor: pointer;
            text-decoration: none;
            transition: border-color 0.2s, color 0.2s;
        }

        .btn-secondary:hover {
            border-color: var(--red);
            color: var(--red);
        }

        /* Hero image placeholder */
        .hero-img {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-img-box {
            width: 100%;
            aspect-ratio: 1/1;
            background: var(--bg-card);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            font-size: 0.8rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }

        .hero-img-box::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(232,28,36,0.05) 0%, transparent 60%);
        }

        .hero-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .img-placeholder-text {
            display: none;
            position: absolute;
            inset: 0;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 8px;
            z-index: 1;
        }

        .img-placeholder-text svg {
            width: 48px;
            height: 48px;
            opacity: 0.3;
        }

        /* ===== HIGHLIGHT CIRCLES (Profile-style) ===== */
        #highlights {
            padding: 60px 40px;
            background: var(--bg-section);
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .highlights-inner {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-label {
            font-family: 'Rajdhani', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 28px;
        }

        .circles-row {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
        }

        .circle-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .circle-ring {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            border: 2px solid var(--border);
            background: var(--bg-card);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: border-color 0.2s;
            overflow: hidden;
            position: relative;
        }

        .circle-ring:hover {
            border-color: var(--red);
        }

        .circle-ring img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .circle-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            font-size: 0.6rem;
            text-align: center;
            padding: 6px;
            letter-spacing: 0.5px;
        }

        .circle-label {
            font-size: 0.7rem;
            color: var(--gray);
            letter-spacing: 0.5px;
            text-align: center;
            max-width: 72px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* ===== FEATURE SECTION (Why Us) ===== */
        #feature {
            padding: 100px 40px;
            background: var(--bg-dark);
        }

        .feature-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .feature-text .section-label {
            margin-bottom: 16px;
        }

        .feature-text h2 {
            font-family: 'Rajdhani', sans-serif;
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .feature-text h2 strong {
            color: var(--red);
        }

        .feature-text .reviewer {
            font-size: 0.85rem;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .feature-text .reviewer span {
            color: var(--white);
            font-weight: 500;
        }

        .feature-text p {
            color: var(--gray);
            font-size: 0.9rem;
            line-height: 1.8;
        }

        .feature-img-box {
            width: 100%;
            aspect-ratio: 4/3;
            background: var(--bg-card);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            font-size: 0.8rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }

        .feature-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .feature-img-box::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--red), transparent);
        }

        /* ===== PRODUCTS / SERVICES ===== */
        #products {
            padding: 100px 40px;
            background: var(--bg-section);
            border-top: 1px solid var(--border);
        }

        .products-inner {
            max-width: 1200px;
            margin: 0 auto;
        }

        .products-header {
            margin-bottom: 56px;
        }

        .products-header h2 {
            font-family: 'Rajdhani', sans-serif;
            font-size: 2.4rem;
            font-weight: 700;
        }

        .products-header h2 span {
            color: var(--red);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
        }

        .product-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: border-color 0.2s;
        }

        .product-card:hover {
            border-color: var(--red);
        }

        .product-card:hover .product-overlay {
            opacity: 1;
        }

        .product-img {
            width: 100%;
            aspect-ratio: 1/1;
            background: #0d0d0d;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            font-size: 0.75rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .product-overlay {
            position: absolute;
            inset: 0;
            background: rgba(232,28,36,0.08);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .product-info {
            padding: 16px;
            border-top: 1px solid var(--border);
        }

        .product-name {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .product-desc {
            font-size: 0.75rem;
            color: var(--gray);
            line-height: 1.5;
        }

        /* ===== FOOTER ===== */
        footer {
            padding: 40px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .footer-logo {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.1rem;
            font-weight: 900;
            letter-spacing: 2px;
            color: var(--white);
            text-decoration: none;
        }

        .footer-logo span { color: var(--red); }

        .footer-copy {
            font-size: 0.75rem;
            color: var(--gray);
            letter-spacing: 0.5px;
        }

        .footer-social {
            display: flex;
            gap: 16px;
        }

        .footer-social a {
            color: var(--gray);
            font-size: 0.78rem;
            text-decoration: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.2s;
        }

        .footer-social a:hover { color: var(--red); }

        /* ===== SCROLL TOP ===== */
        #scroll-top {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 40px;
            height: 40px;
            background: var(--red);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1.2rem;
            transition: background 0.2s, transform 0.2s;
            clip-path: polygon(0 0, calc(100% - 6px) 0, 100% 6px, 100% 100%, 6px 100%, 0 calc(100% - 6px));
        }

        #scroll-top:hover {
            background: var(--red-dim);
            transform: translateY(-3px);
        }

        /* ===== PLACEHOLDER ICON ===== */
        .ph-icon {
            opacity: 0.2;
            margin-bottom: 8px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            header { padding: 0 20px; }
            nav ul { gap: 20px; }
            nav ul a { font-size: 0.75rem; }

            .hero-inner {
                grid-template-columns: 1fr;
                padding: 0 20px;
                gap: 40px;
                text-align: center;
            }

            .hero-text h1 { font-size: 2.2rem; }
            .hero-btns { justify-content: center; }
            .hero-text p { max-width: 100%; }

            #highlights { padding: 40px 20px; }
            .circles-row { gap: 18px; }
            .circle-ring { width: 60px; height: 60px; }

            .feature-inner {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            #feature, #products { padding: 60px 20px; }
            .products-grid { grid-template-columns: repeat(2, 1fr); }

            footer { padding: 28px 20px; flex-direction: column; text-align: center; }
        }

        @media (max-width: 480px) {
            .products-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <a href="#hero" class="logo">PULSAR<span>.</span></a>
        <nav>
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#highlights">Highlights</a></li>
                <li><a href="#feature">Feature</a></li>
                <li><a href="#products">Products</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- ===== HERO ===== -->
        <section id="hero">
            <div class="hero-inner">
                <div class="hero-text">
                    <h1>We Are<br><span>Innovating</span><br>Gaming Gears.</h1>
                    <p>
                        Barebone Keyboard · Keycaps · Gaming Mouse · Gaming Mousepad.<br>
                        Engineered for performance. Designed for gamers who demand the best.
                    </p>
                    <div class="hero-btns">
                        <a href="#products" class="btn-primary">Lihat Produk</a>
                        <a href="https://linktr.ee/pulsargg_indonesia" target="_blank" class="btn-secondary">Visit Store</a>
                    </div>
                </div>

                <div class="hero-img">
                    <div class="hero-img-box">
                        <img src="assets\img\FcsQt0gaAAAlVpX.jpg" alt="Pulsar Hero" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div class="img-placeholder-text">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="3" y="3" width="18" height="18" rx="2"/>
                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                <path d="M21 15l-5-5L5 21"/>
                            </svg>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== HIGHLIGHTS (circles only) ===== -->
        <section id="highlights">
            <div class="highlights-inner">
                <div class="section-label">— Highlights</div>
                <div class="circles-row">

                    <!-- Circle 1-->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="Pulsar G2G" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>G2G</div>'">
                        </div>
                        <span class="circle-label">Pulsar G2G</span>
                    </div>

                    <!-- Circle 2 -->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="Pulsar X2" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>X2</div>'">
                        </div>
                        <span class="circle-label">Pulsar X2</span>
                    </div>

                    <!-- Circle 3 -->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="Tretan Muslim" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>Tretan</div>'">
                        </div>
                        <span class="circle-label">Tretan Muslim</span>
                    </div>

                    <!-- Circle 4 -->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="PCMK TKL A" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>PCMK</div>'">
                        </div>
                        <span class="circle-label">PCMK TKL A</span>
                    </div>

                    <!-- Circle 5 -->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="Ffroody" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>Ffroody</div>'">
                        </div>
                        <span class="circle-label">Ffroody</span>
                    </div>

                    <!-- Circle 6 -->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="Thank You" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>Thanks</div>'">
                        </div>
                        <span class="circle-label">Thankyou 🤍</span>
                    </div>

                    <!-- Circle 7 -->
                    <div class="circle-item">
                        <div class="circle-ring">
                            <img src="" alt="Mindfreak" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'circle-placeholder\'>Mind</div>'">
                        </div>
                        <span class="circle-label">Mindfreak</span>
                    </div>


                </div>
            </div>
        </section>

        <!-- ===== FEATURE (Why Us) ===== -->
        <section id="feature">
            <div class="feature-inner">
                <div class="feature-text">
                    <div class="section-label">— Featured Review</div>
                    <h2>"Xlite V3 eS is <strong>next level</strong><br>wireless performance."</h2>
                    <p class="reviewer">— <span>@ffroody</span> · Content Creator</p>
                    <p>
                        Super high polling rate — 4K Wireless / 8K Wired. Ergonomic right hand, Palm Grip.
                        8000 DPI · 750 IPS · Designed for competitive gamers who want zero compromise.
                        Pulsar's flagship mouse is engineered to win.
                    </p>
                </div>

                <div class="feature-img-box">
                    <img src="assets\img\Pulsar Xlite v3 eS.jpg" alt="Xlite V3 eS" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                    <div class="img-placeholder-text" style="display:none; position:absolute; inset:0; align-items:center; justify-content:center; flex-direction:column; gap:8px; color:#888; font-size:0.8rem; letter-spacing:1px; text-transform:uppercase;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0.3">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <path d="M21 15l-5-5L5 21"/>
                        </svg>
                        Insert Feature Image
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== PRODUCTS ===== -->
        <section id="products">
            <div class="products-inner">
                <div class="products-header">
                    <div class="section-label">— Our Products</div>
                    <h2>Gaming Gear<br><span>Lineup</span></h2>
                </div>

                <div class="products-grid">

                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets\img\pulsargg_indonesia_657935527_966568702556549_8726608974889271994_n.jpg" alt="Xlite v3 Mini" onerror="this.style.display='none'">
                            <div class="product-overlay"></div>
                            <div class="img-placeholder-text" style="position:absolute; z-index:1; flex-direction:column; gap:6px; color:#555; font-size:0.7rem; letter-spacing:1px; text-transform:uppercase;">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Xlite v3 Mini Gaming Mouse</div>
                            <div class="product-desc">52g · Ultralight · 2 Year Warranty</div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets\img\pulsargg_indonesia_474510373_630200482860041_5901145366516748035_n.jpg" alt="X2H" onerror="this.style.display='none'">
                            <div class="product-overlay"></div>
                            <div class="img-placeholder-text" style="position:absolute; z-index:1; flex-direction:column; gap:6px; color:#555; font-size:0.7rem; letter-spacing:1px; text-transform:uppercase;">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">X2H Gaming Mouse</div>
                            <div class="product-desc">53g · Symmetric · Wireless</div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets\img\x2hmini.jpg" alt="X2H Mini" onerror="this.style.display='none'">
                            <div class="product-overlay"></div>
                            <div class="img-placeholder-text" style="position:absolute; z-index:1; flex-direction:column; gap:6px; color:#555; font-size:0.7rem; letter-spacing:1px; text-transform:uppercase;">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0.3"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                Insert Image
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">X2H Mini Gaming Mouse</div>
                            <div class="product-desc">52g · High Hump · Wireless</div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets\img\Pulsar Xlite v3 eS.jpg" alt="Xlite V3 eS" onerror="this.style.display='none'">
                            <div class="product-overlay"></div>
                            <div class="img-placeholder-text" style="position:absolute; z-index:1; flex-direction:column; gap:6px; color:#555; font-size:0.7rem; letter-spacing:1px; text-transform:uppercase;">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0.3"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                Insert Image
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Xlite V3 eS</div>
                            <div class="product-desc">65g · Ergonomic · Wireless</div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets\img\ferin.jpg" alt="Feinmann F Limited Edition" onerror="this.style.display='none'">
                            <div class="product-overlay"></div>
                            <div class="img-placeholder-text" style="position:absolute; z-index:1; flex-direction:column; gap:6px; color:#555; font-size:0.7rem; letter-spacing:1px; text-transform:uppercase;">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0.3"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                Insert Image
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Feinmann F Limited Edition</div>
                            <div class="product-desc">46g · Limited Series</div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-img">
                            <img src="assets\img\hyperion.jpg" alt="Hyperion Extra Loft" onerror="this.style.display='none'">
                            <div class="product-overlay"></div>
                            <div class="img-placeholder-text" style="position:absolute; z-index:1; flex-direction:column; gap:6px; color:#555; font-size:0.7rem; letter-spacing:1px; text-transform:uppercase;">
                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="opacity:0.3"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                Insert Image
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-name">Hyperion Extra Loft</div>
                            <div class="product-desc">Gaming Mousepad · Control + Speed</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <a href="#hero" class="footer-logo">PULSAR<span>.</span></a>
        <span class="footer-copy">© 2025 Pulsar Gaming Gears Indonesia · #PulsarGG</span>
        <div class="footer-social">
            <a href="https://instagram.com/pulsargg_indonesia" target="_blank">Instagram</a>
            <a href="https://linktr.ee/pulsargg_indonesia" target="_blank">Linktree</a>
        </div>
    </footer>

    <!-- SCROLL TOP -->
    <a href="#hero" id="scroll-top">↑</a>

</body>
</html>