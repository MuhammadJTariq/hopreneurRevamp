<?php


$rest = new Rest();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Journal — Hopreneur</title>
<meta name="description" content="Insights, case studies, and perspectives from the Hopreneur team on digital products, development, and design.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/blog.css' ?>">
</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<nav>
  <?php get_header(); ?>
</nav>

<!-- ═══════════ PAGE HERO ═══════════ -->
<section class="page-hero">
  <div class="hero-bg-grid"></div>
  <div class="hero-inner">
    <div>
      <div class="hero-label">Hopreneur Journal</div>
      <!-- ✏️ EDIT: page title -->
      <h1>THINK<br><em>PIECES</em><br>& IDEAS</h1>
    </div>
    <div class="hero-right-col">
      <!-- ✏️ EDIT: total post count -->
      <span class="hero-post-count"><?php echo $rest->count(); ?></span>
      <span class="hero-post-count-label">Articles published</span>
    </div>
  </div>
</section>

<!-- ═══════════ FILTER BAR ═══════════ -->
<div class="filter-bar">
  <button class="filter-btn active">All <span class="filter-count"><?php echo $rest->count(); ?></span></button>
  <button class="filter-btn">Development <span class="filter-count">8</span></button>
  <button class="filter-btn">Design <span class="filter-count">6</span></button>
  <button class="filter-btn">Strategy <span class="filter-count">4</span></button>
  <button class="filter-btn">AI & Automation <span class="filter-count">3</span></button>
  <button class="filter-btn">Case Studies <span class="filter-count">3</span></button>
  <div class="filter-search">
    <span class="search-icon">⌕</span>
    <input type="text" placeholder="Search articles...">
  </div>
</div>

<!-- ═══════════ FEATURED POST ═══════════ -->
<!-- ✏️ EDIT: href, category, date, title, excerpt, author, read time -->
<a href="<?php echo url('/blog-single'); ?>" class="featured-post fade-up">
  <div class="featured-visual">
    <div class="featured-visual-grid"></div>
    <div class="featured-visual-glow"></div>
    <!-- ✏️ Replace with: <img src="your-image.jpg" alt="..." style="width:100%;height:100%;object-fit:cover;"> -->
    <div class="featured-visual-placeholder">AI</div>
    <span class="featured-visual-tag">Featured</span>
  </div>
     <?php echo $rest->getRecent(); ?>
      <div class="author-row">
        <!-- ✏️ EDIT: initials, name, read time -->
        <div class="author-avatar">MK</div>
        <div>
          <span class="author-name"><?php echo $rest->returnRecentAuthor(); ?></span>
          <span class="read-time">8 min read</span>
        </div>
      </div>
      <span class="read-cta" data-id="<?php echo $rest->post_id; ?>">Read article →</span>
    </div>
  </div>
</a>

<!-- ═══════════ POST GRID ═══════════ -->
<section class="posts-section">
  <div class="posts-section-header fade-up">
    <h2>LATEST POSTS</h2>
    <span class="posts-count">Showing <span>1–6</span> of 24</span>
  </div>

  <div class="posts-grid">

    <?php $rest->returnHead(); ?>

  </div>

  <!-- ═══════════ LIST-VIEW POSTS ═══════════ -->
  <div style="margin-top:2px;">

    <!-- ✏️ Duplicate .post-row blocks for list-style entries -->
    <?php $rest->returnTail(); ?>
    

  </div>
</section>

<!-- ═══════════ NEWSLETTER STRIP ═══════════ -->
<div class="newsletter-strip fade-up">
  <div>
    <div class="newsletter-label">Stay in the loop</div>
    <h3>THE HOPRENEUR DISPATCH</h3>
    <p>Bi-weekly insights on digital product strategy, development, and agency life. No fluff, no spam — just the good stuff.</p>
  </div>
  <div>
    <div class="newsletter-form">
      <!-- ✏️ Wire up to your preferred email service (Mailchimp, ConvertKit, etc.) -->
      <input type="email" placeholder="your@email.com">
      <button type="submit">Subscribe →</button>
    </div>
    <p style="font-family:var(--font-mono);font-size:9px;letter-spacing:0.15em;color:var(--muted);margin-top:12px;text-transform:uppercase;">No spam. Unsubscribe any time.</p>
  </div>
</div>

<!-- ═══════════ TOPICS CLOUD ═══════════ -->
<section class="topics-section fade-up">
  <div class="topics-left">
    <h3>BROWSE BY TOPIC</h3>
    <p>Filter articles by the areas that matter most to you.</p>
  </div>
  <div class="topics-cloud">
    <!-- ✏️ Add/remove topics as your blog grows -->
    <a href="#" class="topic-pill">Next.js <span class="pill-count">5</span></a>
    <a href="#" class="topic-pill">React <span class="pill-count">4</span></a>
    <a href="#" class="topic-pill">UI Design <span class="pill-count">6</span></a>
    <a href="#" class="topic-pill">AI Integration <span class="pill-count">3</span></a>
    <a href="#" class="topic-pill">Product Strategy <span class="pill-count">4</span></a>
    <a href="#" class="topic-pill">Case Studies <span class="pill-count">3</span></a>
    <a href="#" class="topic-pill">DevOps <span class="pill-count">3</span></a>
    <a href="#" class="topic-pill">Figma <span class="pill-count">2</span></a>
    <a href="#" class="topic-pill">PostgreSQL <span class="pill-count">2</span></a>
    <a href="#" class="topic-pill">TypeScript <span class="pill-count">3</span></a>
    <a href="#" class="topic-pill">AWS <span class="pill-count">4</span></a>
    <a href="#" class="topic-pill">Freelance & Agency <span class="pill-count">3</span></a>
    <a href="#" class="topic-pill">Branding <span class="pill-count">2</span></a>
    <a href="#" class="topic-pill">Mobile <span class="pill-count">2</span></a>
  </div>
</section>

<!-- ═══════════ PAGINATION ═══════════ -->
<div class="pagination fade-up">
  <a href="#" class="page-btn arrow">←</a>
  <a href="#" class="page-btn active">1</a>
  <a href="#" class="page-btn">2</a>
  <a href="#" class="page-btn">3</a>
  <span class="page-btn" style="color:var(--ash);cursor:default;">···</span>
  <a href="#" class="page-btn">8</a>
  <a href="#" class="page-btn arrow">→</a>
</div>

<!-- ═══════════ FOOTER ═══════════ -->
<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <a href="index.html" class="logo">HOP<span>.</span>RENEUR</a>
      <p>A digital agency crafting high-performance web, mobile, and AI-powered products for ambitious brands.</p>
    </div>
    <div class="footer-col">
      <h4>Navigate</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="products.html">Products</a></li>
        <li><a href="blog.html">Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Categories</h4>
      <ul>
        <li><a href="#">Development</a></li>
        <li><a href="#">Design</a></li>
        <li><a href="#">Strategy</a></li>
        <li><a href="#">AI & Automation</a></li>
        <li><a href="#">Case Studies</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Connect</h4>
      <ul>
        <li><a href="#">LinkedIn</a></li>
        <li><a href="#">Twitter / X</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="contact.html">hello@hopreneur.com</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2024 Hopreneur Inc. — All rights reserved</p>
    <ul class="footer-socials">
      <li><a href="#">Twitter</a></li>
      <li><a href="#">LinkedIn</a></li>
      <li><a href="#">GitHub</a></li>
    </ul>
    <p>Toronto, Canada</p>
  </div>
</footer>

<script>
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursorRing');
  let mx = 0, my = 0, rx = 0, ry = 0;
  document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cursor.style.left = mx+'px'; cursor.style.top = my+'px'; });
  (function loop(){ rx+=(mx-rx)*0.12; ry+=(my-ry)*0.12; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(loop); })();
  document.querySelectorAll('a,button').forEach(el=>{
    el.addEventListener('mouseenter',()=>{ ring.style.width='60px'; ring.style.height='60px'; cursor.style.transform='translate(-50%,-50%) scale(0)'; });
    el.addEventListener('mouseleave',()=>{ ring.style.width='38px'; ring.style.height='38px'; cursor.style.transform='translate(-50%,-50%) scale(1)'; });
  });

  /* FILTER TABS */
  document.querySelectorAll('.filter-btn').forEach(btn=>{
    btn.addEventListener('click',()=>{ document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active')); btn.classList.add('active'); });
  });

  /* SCROLL FADE */
  const obs = new IntersectionObserver(entries=>{
    entries.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('visible'); });
  },{threshold:0.08});
  document.querySelectorAll('.fade-up').forEach(el=>obs.observe(el));
</script>
</body>
</html>
