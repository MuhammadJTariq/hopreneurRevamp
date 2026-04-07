<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 — Page Not Found · Hopreneur</title>
<meta name="robots" content="noindex, nofollow">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/404.css'?>">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/style.css' ?>">
<style>
  /* ── RESPONSIVE ── */
  @media (max-width: 900px) {
    main { grid-template-columns: 1fr; }
    .left {
      padding: 120px 32px 60px;
      border-right: none;
      border-bottom: 1px solid var(--line);
    }
    .right { padding: 60px 32px 120px; }
    nav { padding: 20px 32px; }
    .nav-links { display: none; }
    .footer-strip { padding: 14px 32px; }
    <?php if ($referrer): ?>
    .referrer-bar { padding: 12px 32px; }
    <?php endif; ?>
  }
</style>
</head>
<body>
 
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>
 
<!-- NAV -->
<nav>
      <?php get_header(); ?>
</nav>
 
<main>
 
  <!-- LEFT: 404 VISUAL -->
  <div class="left">
    <div class="error-label fade-up">Error · HTTP 404</div>
    <div class="error-code fade-up">404</div>
 
    <!-- Requested path from PHP -->
    <div class="error-path fade-up">
      <span class="error-path-label">Path</span>
      <span class="error-path-val"><?= $requested ?></span>
    </div>
  </div>
 
  <!-- RIGHT: COPY + LINKS -->
  <div class="right">
 
    <h1 class="fade-up">
      PAGE<br>
      NOT<br>
      <em>FOUND</em>
    </h1>
 
    <p class="fade-up">
      The page you're looking for doesn't exist, was moved, or the URL contains a typo.
      Let's get you back on track.
    </p>
 
    <div class="btn-row fade-up">
      <a href="/index.html" class="btn-primary">← Back to home</a>
      <a href="/contact.html" class="btn-outline">Report broken link</a>
    </div>
 
    <div class="fade-up">
      <div class="quick-links-label">Or go somewhere useful</div>
      <ul class="quick-links">
        <li>
          <a href="/index.html">
            Home
            <span>→</span>
          </a>
        </li>
        <li>
          <a href="/projects.html">
            Projects
            <span>→</span>
          </a>
        </li>
        <li>
          <a href="/products.html">
            Products & Packages
            <span>→</span>
          </a>
        </li>
        <li>
          <a href="/contact.html">
            Contact us
            <span>→</span>
          </a>
        </li>
        <li>
          <a href="/terms.html">
            Terms & Policies
            <span>→</span>
          </a>
        </li>
      </ul>
    </div>
 
  </div>
 
</main>
 
<!-- REFERRER NOTICE (only rendered if HTTP_REFERER is set) -->

 
<!-- FOOTER STRIP -->
<div class="footer-strip">
  <p>© <?= date('Y') ?> Hopreneur Inc.</p>
  <p>Status <span>404</span> · <?= date('D, d M Y · H:i') ?> EST</p>
  <p>Toronto, Canada</p>
</div>
 

 <script src="<?php echo SCRIPTS_URI . '/index.js'; ?>"></script>
</body>
</html>
