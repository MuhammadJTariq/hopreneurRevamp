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
  <a href="index.html" class="logo">HOP<span>.</span>RENEUR</a>
  <ul class="nav-links">
    <li><a href="index.html">Home</a></li>
    <li><a href="projects.html">Projects</a></li>
    <li><a href="products.html">Products</a></li>
    <li><a href="blog.html" class="active">Journal</a></li>
    <li><a href="terms.html">Terms</a></li>
  </ul>
  <a href="contact.html" class="nav-cta">Start a project</a>
</nav>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="blog.html">Journal</a>
  <span class="sep">/</span>
  <!-- ✏️ EDIT: category -->
  <a href="#">AI & Automation</a>
  <span class="sep">/</span>
  <!-- ✏️ EDIT: short post title -->
  <span class="current">How We Embedded AI Into a CRM</span>
</div>

<!-- ═══════════════════════════════════
     POST HERO
     ✏️ EDIT: all fields below
════════════════════════════════════ -->
<section class="post-hero">
  <div class="post-hero-inner">

    <div class="post-hero-left">
      <div>
        <div class="post-meta-top">
          <!-- ✏️ EDIT: category, date -->
          <span class="post-category">AI & Automation</span>
          <span class="post-meta-sep"></span>
          <span class="post-date">December 12, 2024</span>
        </div>

        <!-- ✏️ EDIT: post title -->
        <h1 class="post-title">HOW WE EMBEDDED AI INTO A CRM AND CUT MANUAL WORK BY 70%</h1>

        <!-- ✏️ EDIT: intro sentence / excerpt -->
        <p class="post-excerpt">
          A detailed breakdown of our LLM integration process — the architecture decisions, the pitfalls, and the real numbers behind a project that changed how our client works.
        </p>
      </div>

      <div class="post-hero-footer">
        <div class="author-block">
          <!-- ✏️ EDIT: initials, name, title -->
          <div class="author-avatar">MK</div>
          <div>
            <span class="author-name">Marcus Kim</span>
            <span class="author-title-sm">Lead Engineer, Hopreneur</span>
          </div>
        </div>
        <div class="post-stats">
          <!-- ✏️ EDIT: read time, publish date -->
          <div class="post-stat">
            <span class="post-stat-val">8 min</span>
            <span class="post-stat-label">Read time</span>
          </div>
          <div class="post-stat">
            <span class="post-stat-val">Dec '24</span>
            <span class="post-stat-label">Published</span>
          </div>
        </div>
      </div>
    </div>

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

      <p>
        In early 2024, one of our clients — a mid-size SaaS company managing over 4,000 customer accounts — came to us with a specific pain: their sales team was spending nearly 3 hours per day on manual data entry, tagging, and follow-up drafting inside their CRM. It was costing them time, accuracy, and morale.
      </p>

      <p>
        Our brief was clear: embed AI into their existing platform without a full rebuild. What followed was one of the most instructive engagements we've run. Here's the full breakdown.
      </p>

      <!-- ── H2 section ── -->
      <h2 id="background">The Background</h2>

      <p>
        The client was running a legacy CRM — a heavily customised <strong>Salesforce instance</strong> with about 12 years of technical debt. Migrations were off the table. They needed AI capabilities layered on top of what already existed, without breaking anything.
      </p>

      <p>
        Their team of 18 sales reps each touched between 40–60 accounts daily. The manual tasks were predictable: reading inbound emails, tagging customer sentiment, logging interaction summaries, and drafting follow-up emails. Classic LLM territory.
      </p>

      <!-- ── CALLOUT BOX ── -->
      <div class="callout">
        <span class="callout-icon">💡</span>
        <div>
          <div class="callout-label">Key insight</div>
          <p>When evaluating AI integration projects, the highest-ROI interventions are almost always the ones that automate <strong>high-frequency, low-judgement tasks</strong> — not the flashy "AI agents" that sound better in demos.</p>
        </div>
      </div>

      <!-- ── H2 ── -->
      <h2 id="problem">The Problem We Were Solving</h2>

      <p>
        Before writing a line of code, we spent a week mapping the exact workflow. We shadowed three sales reps, recorded their screen time, and catalogued every CRM interaction. The results were illuminating.
      </p>

      <!-- ── INLINE STAT ── -->
      <div class="stat-highlight">
        <span class="stat-highlight-num">73%</span>
        <div class="stat-highlight-desc">
          <strong>of CRM time</strong> was spent on four repeatable tasks: reading and tagging inbound emails, writing activity summaries, drafting follow-ups, and updating deal stage notes — all of which could be partially or fully automated.
        </div>
      </div>

      <!-- ── H3 ── -->
      <h3>Scoping the automation</h3>

      <p>
        We defined three tiers of automation: <strong>full automation</strong> (AI does the work, human reviews on exception), <strong>assisted drafting</strong> (AI drafts, human edits), and <strong>smart suggestions</strong> (AI surfaces options, human decides). Different tasks fell into different tiers.
      </p>

      <!-- ── IMAGE PLACEHOLDER ── -->
      <figure class="prose-img">
        <!-- ✏️ REPLACE with: <img src="/assets/blog/your-image.jpg" alt="Description"> -->
        <div class="prose-img-placeholder">DIAGRAM</div>
        <figcaption>Automation tier mapping — tasks plotted by frequency vs. decision complexity</figcaption>
      </figure>

      <!-- ── H2 ── -->
      <h2 id="architecture">Architecture Overview</h2>

      <p>
        We built a <code>Node.js</code> middleware layer that sat between Salesforce and our AI pipeline. All CRM events (new email received, deal stage change, rep logs a call) fired webhooks into this middleware. The middleware handled context assembly, LLM calls, and writing results back to Salesforce via their REST API.
      </p>

      <!-- ── CODE BLOCK ── -->
      <pre><code class="language-js"><span class="code-lang">javascript</span>// Simplified webhook handler
app.post('/webhook/crm-event', async (req, res) => {
  const { eventType, payload, accountId } = req.body;

  const context = await buildContext(accountId);
  const prompt  = promptTemplates[eventType](payload, context);
  const result  = await llm.complete(prompt);

  await salesforce.updateRecord(accountId, eventType, result);
  res.json({ ok: true });
});</code></pre>

      <!-- ── H3 ── -->
      <h3 id="llm-selection">Choosing an LLM</h3>

      <p>
        We evaluated three options: <strong>GPT-4o</strong>, <strong>Claude 3.5 Sonnet</strong>, and a fine-tuned <strong>Mistral 7B</strong> running on their own infrastructure. Cost, latency, and output quality all mattered.
      </p>

      <ul>
        <li>GPT-4o: best quality on complex emails, highest cost at ~$0.015/1K output tokens</li>
        <li>Claude 3.5 Sonnet: near-equivalent quality, better instruction-following for structured output</li>
        <li>Mistral 7B (fine-tuned): cheapest, but required 3 weeks of training data prep and showed inconsistent structured output</li>
      </ul>

      <p>
        We shipped with <strong>Claude 3.5 Sonnet</strong> as the primary model for email summarisation and follow-up drafting, with GPT-4o on fallback for low-confidence outputs.
      </p>

      <!-- ── BLOCKQUOTE ── -->
      <blockquote>
        <p>The biggest mistake in LLM integration isn't picking the wrong model — it's not designing for when the model is wrong.</p>
        <cite>— Marcus Kim, Lead Engineer</cite>
      </blockquote>

      <h2 id="pitfalls">Pitfalls We Hit</h2>

      <p>No integration is clean. Here's what slowed us down:</p>

      <ol>
        <li><strong>Context window limits</strong> — some accounts had 400+ historical interactions. We had to build a retrieval layer to surface only the last 30 days of relevant context.</li>
        <li><strong>Salesforce API rate limits</strong> — batch writes triggered rate limiting. We had to implement a queue with exponential backoff.</li>
        <li><strong>Prompt drift</strong> — as the team's email style varied, our fixed prompts produced inconsistent summaries. We iterated on prompts 6 times before locking them.</li>
        <li><strong>User trust</strong> — sales reps initially over-reviewed every AI output. We added a confidence score UI that helped them calibrate trust over 3 weeks of use.</li>
      </ol>

      <!-- ── SECTION DIVIDER ── -->
      <hr>

      <h2 id="results">Results & Numbers</h2>

      <p>
        After 60 days in production across all 18 reps, here's what the data showed:
      </p>

      <div class="stat-highlight">
        <span class="stat-highlight-num">70%</span>
        <div class="stat-highlight-desc">
          <strong>reduction in manual CRM time</strong> — from an average of 2.8 hours/day per rep to under 50 minutes. That's roughly <strong>36 hours per week recovered</strong> across the team.
        </div>
      </div>

      <h2 id="takeaways">Key Takeaways</h2>

      <p>
        If you're considering an AI integration project, here's what we'd tell you from this engagement:
      </p>

      <ul>
        <li>Map the workflow before you touch any code. You'll find the ROI is 80% in 20% of the tasks.</li>
        <li>Design for failure. Build review mechanisms, confidence thresholds, and easy human override.</li>
        <li>Fine-tuning isn't always worth it. Good prompting with a strong base model beats a mediocre fine-tune.</li>
        <li>Ship fast, iterate on prompts. Your first prompt will be wrong. That's expected.</li>
      </ul>

    </div><!-- end .prose -->

    <!-- ── POST END SIGNATURE ── -->
    <div class="post-end">
      <div class="post-end-author">
        <!-- ✏️ EDIT: initials, name, bio -->
        <div class="post-end-avatar">MK</div>
        <div>
          <span class="post-end-name">Marcus Kim</span>
          <p class="post-end-bio">Lead Engineer at Hopreneur. Builds AI-powered products and writes about the things that didn't work first.</p>
        </div>
      </div>
      <!-- ✏️ EDIT: date -->
      <div class="post-end-date">
        <span style="display:block;color:var(--accent);font-size:11px;margin-bottom:3px;">Published</span>
        December 12, 2024
      </div>
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
