<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ✏️ EDIT: title, description, og:image for each post -->
<title>[Post Title] — Hopreneur Journal</title>
<meta name="description" content="[Post excerpt / meta description — 150 chars max]">
<meta property="og:title" content="[Post Title] — Hopreneur">
<meta property="og:description" content="[Post excerpt]">
<meta property="og:image" content="/assets/blog/[post-slug]-og.jpg">
<meta property="og:type" content="article">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&family=Lora:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/blog-single.css' ?>">

</head>
<body>

<div class="progress-bar" id="progressBar"></div>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<nav>
  <?php get_header(); ?>
</nav>

<!-- BREADCRUMB -->
<?php $single = new Restsingle(); 
$single->content();?>
<!-- ═══════════════════════════════════
     POST HERO
     ✏️ EDIT: all fields below
════════════════════════════════════ -->

  

    <div class="post-hero-right">
      <!-- ✏️ REPLACE: swap .post-hero-image with your cover image -->
      <div class="post-hero-image">
        <div class="phi-grid"></div>
        <div class="phi-glow"></div>
        <!-- <img src="/assets/blog/ai-crm-cover.jpg" alt="AI CRM Integration" style="width:100%;height:100%;object-fit:cover;"> -->
        <div class="phi-placeholder">AI</div>
      </div>
      <!-- ✏️ EDIT: tags relevant to post -->
      <div class="post-tags">
        <a href="#" class="post-tag">AI</a>
        <a href="#" class="post-tag">LLMs</a>
        <a href="#" class="post-tag">CRM</a>
        <a href="#" class="post-tag">Node.js</a>
        <a href="#" class="post-tag">OpenAI</a>
        <a href="#" class="post-tag">Automation</a>
      </div>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════
     THREE-COLUMN LAYOUT
     Left TOC | Content | Right Sidebar
════════════════════════════════════ -->
<div class="post-layout">

  <!-- ── LEFT SIDEBAR: TABLE OF CONTENTS ── -->
  <aside class="post-sidebar-left">
    <div class="toc-label">Contents</div>
    <!-- ✏️ EDIT: match h2/h3 IDs in your prose -->
    <ul class="toc-list" id="toc">
      <li><a href="#background">The Background</a></li>
      <li><a href="#problem">The Problem We Were Solving</a></li>
      <li><a href="#architecture">Architecture Overview</a></li>
      <li class="toc-h3"><a href="#llm-selection">Choosing an LLM</a></li>
      <li class="toc-h3"><a href="#data-pipeline">The Data Pipeline</a></li>
      <li><a href="#integration">Integration Process</a></li>
      <li><a href="#pitfalls">Pitfalls We Hit</a></li>
      <li><a href="#results">Results & Numbers</a></li>
      <li><a href="#takeaways">Key Takeaways</a></li>
    </ul>

    <div class="sidebar-divider"></div>

    <div class="share-label">Share</div>
    <div class="share-buttons">
      <a href="#" class="share-btn"><span class="share-icon">𝕏</span> Twitter</a>
      <a href="#" class="share-btn"><span class="share-icon">in</span> LinkedIn</a>
      <a href="#" class="share-btn"><span class="share-icon">🔗</span> Copy link</a>
    </div>
  </aside>

  <!-- ══════════════════════════════════
       POST CONTENT
       ✏️ REPLACE: the entire .prose div with your actual article content.
       Keep all wrapper divs (.post-content, .prose, .post-end).
       Use the component classes below as a copy-paste toolkit.
  ═══════════════════════════════════ -->
  <article class="post-content">
    <div class="prose">
      <?php echo $single->article(); ?>
      
    </div>

  </article><!-- end .post-content -->

  <!-- ── RIGHT SIDEBAR ── -->
  <aside class="post-sidebar-right">

    <!-- RELATED POSTS widget -->
    <div class="sidebar-widget">
      <div class="sw-label">Related posts</div>
      <ul class="related-mini">
        <!-- ✏️ EDIT: 3 related post links -->
        <li>
          <a href="blog-single.html">
            <span class="rm-cat">Development</span>
            <span class="rm-title">SETTING UP CI/CD ON AWS IN 30 MINUTES</span>
            <span class="rm-meta">10 min · Sep 28</span>
          </a>
        </li>
        <li>
          <a href="blog-single.html">
            <span class="rm-cat">Case Study</span>
            <span class="rm-title">LAUNCHING NEXVAULT IN 6 WEEKS</span>
            <span class="rm-meta">11 min · Nov 14</span>
          </a>
        </li>
        <li>
          <a href="blog-single.html">
            <span class="rm-cat">Strategy</span>
            <span class="rm-title">WHY MOST AGENCIES FAIL AT RETAINERS</span>
            <span class="rm-meta">5 min · Oct 31</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- SHARE widget -->
    <div class="sidebar-widget">
      <div class="sw-label">Share this post</div>
      <div class="share-mini">
        <a href="#">𝕏&nbsp;&nbsp;Share on X</a>
        <a href="#">in&nbsp;&nbsp;LinkedIn</a>
        <a href="#" onclick="navigator.clipboard.writeText(window.location.href); return false;">🔗&nbsp;&nbsp;Copy link</a>
      </div>
    </div>

    <!-- CTA widget -->
    <div class="cta-widget">
      <h4>WORK WITH US</h4>
      <p>Need AI integration or a full product build? We're currently taking on new clients.</p>
      <a href="contact.html">Get in touch →</a>
    </div>

  </aside>

</div><!-- end .post-layout -->

<!-- ═══════════ RELATED POSTS FULL ═══════════ -->
<section class="related-full fade-up">
  <div class="related-full-header">
    <h2>KEEP READING</h2>
    <a href="blog.html">All articles →</a>
  </div>
  <div class="related-grid">

    <!-- ✏️ EDIT: 3 related post cards -->
    <a href="blog-single.html" class="related-card">
      <div class="rc-meta">
        <span class="rc-cat">Design</span>
        <div class="rc-dot"></div>
        <span class="rc-date">Nov 28, 2024</span>
      </div>
      <h3>THE DESIGN DECISIONS THAT SHIP FASTER</h3>
      <p>Why constraints-first design cut our average cycle from 3 weeks to 9 days.</p>
      <span class="rc-read">Read article →</span>
    </a>

    <a href="blog-single.html" class="related-card">
      <div class="rc-meta">
        <span class="rc-cat">Case Study</span>
        <div class="rc-dot"></div>
        <span class="rc-date">Nov 14, 2024</span>
      </div>
      <h3>LAUNCHING NEXVAULT FROM ZERO IN 6 WEEKS</h3>
      <p>Full retrospective on the stack, timeline, and one decision we almost got wrong.</p>
      <span class="rc-read">Read article →</span>
    </a>

    <a href="blog-single.html" class="related-card">
      <div class="rc-meta">
        <span class="rc-cat">Development</span>
        <div class="rc-dot"></div>
        <span class="rc-date">Oct 15, 2024</span>
      </div>
      <h3>POSTGRES VS MYSQL IN 2024</h3>
      <p>What actually matters when choosing a database for a production SaaS product.</p>
      <span class="rc-read">Read article →</span>
    </a>

  </div>
</section>

<!-- BACK TO TOP -->
<button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<!-- FOOTER -->
<footer>
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
  /* CURSOR */
  const cursor = document.getElementById('cursor');
  const ring   = document.getElementById('cursorRing');
  let mx = 0, my = 0, rx = 0, ry = 0;
  document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cursor.style.left = mx+'px'; cursor.style.top = my+'px'; });
  (function loop(){ rx+=(mx-rx)*0.12; ry+=(my-ry)*0.12; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(loop); })();
  document.querySelectorAll('a,button').forEach(el=>{
    el.addEventListener('mouseenter',()=>{ ring.style.width='60px'; ring.style.height='60px'; cursor.style.transform='translate(-50%,-50%) scale(0)'; });
    el.addEventListener('mouseleave',()=>{ ring.style.width='38px'; ring.style.height='38px'; cursor.style.transform='translate(-50%,-50%) scale(1)'; });
  });

  /* READING PROGRESS */
  const bar = document.getElementById('progressBar');
  window.addEventListener('scroll', () => {
    const total = document.body.scrollHeight - window.innerHeight;
    bar.style.width = Math.min((window.scrollY / total) * 100, 100) + '%';
  });

  /* BACK TO TOP */
  const btt = document.getElementById('backToTop');
  window.addEventListener('scroll', () => {
    btt.classList.toggle('visible', window.scrollY > 600);
  });

  /* ACTIVE TOC LINK */
  const headings = document.querySelectorAll('.prose h2, .prose h3');
  const tocLinks = document.querySelectorAll('#toc a');
  const tocObs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        tocLinks.forEach(l => l.classList.remove('active'));
        const active = document.querySelector('#toc a[href="#' + e.target.id + '"]');
        if (active) active.classList.add('active');
      }
    });
  }, { rootMargin: '-20% 0px -70% 0px' });
  headings.forEach(h => tocObs.observe(h));

  /* SCROLL FADE */
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.08 });
  document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));
</script>
</body>
</html>
