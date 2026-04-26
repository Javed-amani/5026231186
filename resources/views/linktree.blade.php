<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@pulsargg_indonesia | Linktree</title>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg: #0d0d0f;
      --surface: #18181c;
      --border: #2a2a30;
      --text: #f0f0f0;
      --muted: #888;
      --accent: #c8ff00;
    }

    body {
      background: var(--bg);
      color: var(--text);
      font-family: 'DM Sans', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      padding: 48px 16px 64px;
    }

    .container {
      width: 100%;
      max-width: 620px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* ── Profile ── */
    .profile {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 14px;
      margin-bottom: 32px;
    }

    .avatar-wrap {
      width: 96px;
      height: 96px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid var(--border);
      background: var(--surface);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .avatar-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .avatar-placeholder {
      font-family: 'Syne', sans-serif;
      font-size: 10px;
      color: var(--muted);
      text-align: center;
      padding: 8px;
      line-height: 1.5;
    }

    .username {
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      font-weight: 400;
      color: var(--muted);
      letter-spacing: 0.02em;
    }

    .display-name {
      font-family: 'Syne', sans-serif;
      font-size: 26px;
      font-weight: 800;
      letter-spacing: -0.01em;
      text-align: center;
      line-height: 1.2;
    }

    .bio {
      font-size: 13.5px;
      color: var(--muted);
      text-align: center;
      max-width: 360px;
      line-height: 1.6;
    }

    /* ── Section label ── */
    .section-label {
      font-family: 'Syne', sans-serif;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: #444;
      width: 100%;
      padding: 0 4px;
      margin: 24px 0 10px;
    }

    /* ── Link cards ── */
    .links {
      display: flex;
      flex-direction: column;
      gap: 10px;
      width: 100%;
    }

    .link-card {
      display: flex;
      align-items: center;
      gap: 14px;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 14px 18px;
      text-decoration: none;
      color: var(--text);
      transition: border-color 0.15s, background 0.15s;
    }

    .link-card:hover {
      border-color: var(--accent);
      background: #1d1d22;
    }

    .link-icon {
      width: 36px;
      height: 36px;
      border-radius: 8px;
      background: #222228;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 17px;
    }

    .link-text { flex: 1; }

    .link-title {
      font-family: 'Syne', sans-serif;
      font-size: 14px;
      font-weight: 700;
      line-height: 1.3;
    }

    .link-desc {
      font-size: 12px;
      color: var(--muted);
      margin-top: 3px;
      line-height: 1.4;
    }

    .link-arrow {
      color: var(--muted);
      font-size: 18px;
      flex-shrink: 0;
      font-family: 'DM Sans', sans-serif;
    }

    /* ── Social icons row ── */
    .socials {
      display: flex;
      gap: 12px;
      margin-top: 32px;
    }

    .social-btn {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: var(--surface);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      font-size: 18px;
      transition: border-color 0.15s;
    }

    .social-btn:hover { border-color: var(--accent); }

    /* ── Footer ── */
    .footer {
      margin-top: 36px;
      font-size: 11px;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- Profile -->
    <div class="profile">
      <div class="avatar-wrap">
        <img src="assets\img\profile.webp" alt="Profile" />
      </div>
      <span class="username">@pulsargg_indonesia</span>
      <h1 class="display-name">Pulsar Gaming Gears</h1>
      <p class="bio">Pulsar X2 Symmetrical Wireless — High Performance Gaming Mouse</p>
    </div>

    <!-- Links -->
    <div class="links">

      <div class="section-label">Official</div>

      <a class="link-card" href="https://www.pulsar.gg/" target="_blank" rel="noopener">
        <div class="link-icon">🌐</div>
        <div class="link-text">
          <div class="link-title">Official Website</div>
          <div class="link-desc">Gaming keyboards, mice, and gears</div>
        </div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.instagram.com/pulsargg_indonesia/" target="_blank" rel="noopener">
        <div class="link-icon">📸</div>
        <div class="link-text">
          <div class="link-title">Instagram</div>
        </div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://discord.gg/R8g6cStxYp" target="_blank" rel="noopener">
        <div class="link-icon">💬</div>
        <div class="link-text">
          <div class="link-title">Join our Discord!</div>
          <div class="link-desc">Ngobrol, main bareng, dan build komunitas</div>
        </div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tiktok.com/@pulsarggindonesia" target="_blank" rel="noopener">
        <div class="link-icon">🎵</div>
        <div class="link-text">
          <div class="link-title">Follow us on TikTok</div>
        </div>
        <span class="link-arrow">›</span>
      </a>

      <div class="section-label">Belanja</div>

      <a class="link-card" href="https://www.tokopedia.com/chemicygaming/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di Chemicy Gaming</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/clover-gaming/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di Clover Gaming Indonesia</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/duniacom-srv/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di DCDS Computer</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/gamersoutpost/product?q=Pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di Gamer's Outpost</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/geekytechofficia/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di GeekyTech</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/goodgamingshop/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di Good Gaming Shop</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/igwsurabaya/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di IGamerWorld</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/imbapc/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di Imba PC</div></div>
        <span class="link-arrow">›</span>
      </a>

      <a class="link-card" href="https://www.tokopedia.com/winskamera/product?q=pulsar" target="_blank" rel="noopener">
        <div class="link-icon">🛒</div>
        <div class="link-text"><div class="link-title">BELANJA di Wins Kamera</div></div>
        <span class="link-arrow">›</span>
      </a>

    </div>

    <!-- Social icons -->
    <div class="socials">
      <a class="social-btn" href="https://www.instagram.com/pulsargg_indonesia/" target="_blank" rel="noopener" title="Instagram">📸</a>
      <a class="social-btn" href="https://www.facebook.com/" target="_blank" rel="noopener" title="Facebook">📘</a>
      <a class="social-btn" href="https://www.tiktok.com/@pulsarggindonesia" target="_blank" rel="noopener" title="TikTok">🎵</a>
    </div>

    <div class="footer">linktree.html</div>
  </div>
</body>
</html>