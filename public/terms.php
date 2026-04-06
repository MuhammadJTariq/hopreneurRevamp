<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Terms & Policies — Hopreneur</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/terms.css'?>">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/footer.css'?>">
</head>
<body>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<nav>
  <?php get_header(); ?>
</nav>

<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-label">Legal</div>
  <h1>TERMS &<br><span class="outline">POLICIES</span></h1>
  <div class="page-hero-meta">
    <div class="page-hero-meta-item"><span>Last Updated</span><p>December 1, 2024</p></div>
    <div class="page-hero-meta-item"><span>Jurisdiction</span><p>Ontario, Canada</p></div>
    <div class="page-hero-meta-item"><span>Effective Date</span><p>January 1, 2024</p></div>
  </div>
</section>

<div class="terms-layout">
  <!-- SIDEBAR -->
  <aside class="terms-sidebar">
    <div class="sidebar-label">On this page</div>
    <ul class="sidebar-nav">
      <li><a href="#overview" class="active">01 — Overview</a></li>
      <li><a href="#services">02 — Services</a></li>
      <li><a href="#payment">03 — Payment</a></li>
      <li><a href="#ip">04 — Intellectual Property</a></li>
      <li><a href="#confidentiality">05 — Confidentiality</a></li>
      <li><a href="#liability">06 — Liability</a></li>
      <li><a href="#termination">07 — Termination</a></li>
      <li><a href="#privacy">08 — Privacy Policy</a></li>
      <li><a href="#cookies">09 — Cookies</a></li>
      <li><a href="#contact-legal">10 — Contact</a></li>
    </ul>
  </aside>

  <!-- CONTENT -->
  <main class="terms-content">

    <div class="terms-section" id="overview">
      <div class="section-num">01</div>
      <h2>OVERVIEW</h2>
      <p>These Terms of Service ("Terms") govern your use of services provided by Hopreneur Inc. ("Hopreneur," "we," "us," or "our"), a digital agency incorporated under the laws of Ontario, Canada. By engaging our services or accessing our website at hopreneur.com, you ("Client") agree to be bound by these Terms.</p>
      <p>Please read these Terms carefully before proceeding. If you do not agree with any part of these Terms, please do not use our services or website.</p>
      <div class="highlight-box">
        <p><strong>Plain English summary:</strong> These are the rules that govern our working relationship. They protect both you and us. We've written the key points clearly, but the full legal language below is what governs in case of dispute.</p>
      </div>
    </div>

    <div class="terms-section" id="services">
      <div class="section-num">02</div>
      <h2>SERVICES & SCOPE</h2>
      <p>Hopreneur provides digital services including but not limited to web development, mobile application development, UI/UX design, brand strategy, AI integration, and ongoing technical support.</p>
      <h3>Project Agreements</h3>
      <p>Each project is governed by a separate Statement of Work (SOW) or project brief, agreed upon in writing before work commences. The SOW defines the specific deliverables, timeline, and payment terms for that engagement.</p>
      <h3>Revisions & Scope Changes</h3>
      <ul class="terms-list">
        <li>Revisions within the agreed scope are included as specified in the SOW.</li>
        <li>Requests that fall outside the agreed scope will be quoted separately and require written approval before work begins.</li>
        <li>Significant scope changes may result in timeline adjustments and additional fees.</li>
        <li>All scope changes must be agreed upon in writing via email or a signed amendment.</li>
      </ul>
      <h3>Delivery & Acceptance</h3>
      <p>Upon delivery of each milestone, the Client has 7 business days to review and provide written feedback. If no feedback is received within this window, the deliverable is deemed accepted.</p>
    </div>

    <div class="terms-section" id="payment">
      <div class="section-num">03</div>
      <h2>PAYMENT TERMS</h2>
      <p>Unless otherwise agreed in writing, the following payment structure applies to all project engagements:</p>
      <ul class="terms-list">
        <li>50% deposit is required before project work commences.</li>
        <li>Remaining 50% is due upon project completion and delivery.</li>
        <li>For projects over $20,000, milestone-based payments may be agreed upon separately.</li>
        <li>Invoices are due within 14 calendar days of issue.</li>
        <li>Monthly retainer agreements are billed on the 1st of each month.</li>
      </ul>
      <h3>Late Payments</h3>
      <p>Late payments are subject to a 1.5% monthly interest charge. Hopreneur reserves the right to pause or suspend work on any project where payment is more than 14 days overdue. Project timelines will be adjusted accordingly to reflect any delays caused by late payment.</p>
      <h3>Refunds</h3>
      <p>Deposits are non-refundable after the project kickoff date. Refunds for partially completed work will be assessed on a case-by-case basis at Hopreneur's discretion.</p>
      <div class="highlight-box">
        <p><strong>Accepted payment methods:</strong> Bank transfer (EFT), e-transfer, credit card (3% processing fee applies), and crypto (USDC/ETH on request).</p>
      </div>
    </div>

    <div class="terms-section" id="ip">
      <div class="section-num">04</div>
      <h2>INTELLECTUAL PROPERTY</h2>
      <p>Upon receipt of final payment in full, the Client receives ownership of all final custom deliverables created specifically for their project, including source code, design files, and creative assets produced under the engagement.</p>
      <h3>Hopreneur Retains Rights To</h3>
      <ul class="terms-list">
        <li>All proprietary tools, frameworks, libraries, and boilerplate code developed by Hopreneur prior to or independent of the engagement.</li>
        <li>Any third-party software, open-source components, or licensed assets incorporated into the work (subject to their respective licenses).</li>
        <li>The right to display the project in our portfolio and marketing materials unless otherwise agreed in writing.</li>
      </ul>
      <p>Any third-party licenses, software subscriptions, or APIs required for the project are the responsibility of the Client to obtain and maintain after project handoff.</p>
    </div>

    <div class="terms-section" id="confidentiality">
      <div class="section-num">05</div>
      <h2>CONFIDENTIALITY</h2>
      <p>Both parties agree to keep confidential all non-public, proprietary, or sensitive information shared during the engagement. This includes, but is not limited to, business strategies, product roadmaps, financial information, and technical architectures.</p>
      <p>Confidentiality obligations survive the termination of the engagement for a period of 3 years.</p>
      <h3>Exceptions</h3>
      <ul class="terms-list">
        <li>Information that is or becomes publicly available through no breach of these Terms.</li>
        <li>Information independently developed by either party without reference to confidential information.</li>
        <li>Disclosure required by law, regulation, or court order.</li>
      </ul>
    </div>

    <div class="terms-section" id="liability">
      <div class="section-num">06</div>
      <h2>LIMITATION OF LIABILITY</h2>
      <p>Hopreneur's total liability to the Client for any claim arising under or in connection with an engagement shall not exceed the total fees paid by the Client for the specific project to which the claim relates.</p>
      <p>Hopreneur is not liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of revenue, loss of data, or business interruption.</p>
      <div class="highlight-box">
        <p><strong>We build with care.</strong> While we stand behind our work, technology has inherent risks. We strongly recommend testing in staging environments and maintaining your own backups before any production deployment.</p>
      </div>
      <h3>Warranties</h3>
      <p>Hopreneur warrants that services will be performed in a professional and workmanlike manner consistent with industry standards. We provide a 30-day warranty on delivered work covering bugs and defects within the originally agreed scope. This warranty does not cover issues arising from third-party services, Client modifications, or use outside the intended purpose.</p>
    </div>

    <div class="terms-section" id="termination">
      <div class="section-num">07</div>
      <h2>TERMINATION</h2>
      <p>Either party may terminate an engagement with 14 days written notice. Upon termination:</p>
      <ul class="terms-list">
        <li>The Client shall pay for all work completed up to the termination date.</li>
        <li>Hopreneur will deliver all completed work and project assets within 10 business days.</li>
        <li>Any non-refundable deposits paid remain with Hopreneur.</li>
        <li>Work in progress will be billed at a prorated rate based on the agreed project fee.</li>
      </ul>
      <p>Hopreneur may terminate immediately and without notice if the Client engages in conduct that is unlawful, harmful, or in material breach of these Terms.</p>
    </div>

    <div class="terms-section" id="privacy">
      <div class="section-num">08</div>
      <h2>PRIVACY POLICY</h2>
      <p>Hopreneur Inc. is committed to protecting the privacy of all individuals who interact with our website and services. This Privacy Policy outlines how we collect, use, and safeguard your personal information in accordance with Canada's Personal Information Protection and Electronic Documents Act (PIPEDA) and applicable Ontario privacy laws.</p>
      <h3>Information We Collect</h3>
      <ul class="terms-list">
        <li>Contact information you provide via our website forms (name, email, company, phone).</li>
        <li>Project-related information shared during the engagement process.</li>
        <li>Technical information collected automatically through cookies and analytics (see Section 09).</li>
        <li>Payment information processed securely through third-party payment processors.</li>
      </ul>
      <h3>How We Use Your Information</h3>
      <ul class="terms-list">
        <li>To respond to inquiries and deliver agreed services.</li>
        <li>To send project updates, invoices, and relevant communications.</li>
        <li>To improve our website and service offerings.</li>
        <li>We do not sell, rent, or share your personal data with third parties for marketing purposes.</li>
      </ul>
      <p>You have the right to access, correct, or request deletion of your personal information. To exercise these rights, contact us at privacy@hopreneur.com.</p>
    </div>

    <div class="terms-section" id="cookies">
      <div class="section-num">09</div>
      <h2>COOKIES & TRACKING</h2>
      <p>Our website uses cookies and similar technologies to enhance your browsing experience and understand how visitors use our site.</p>
      <h3>Types of Cookies We Use</h3>
      <ul class="terms-list">
        <li><span class="ghost">Essential cookies:</span> Required for the website to function correctly.</li>
        <li><span class="ghost">Analytics cookies:</span> Help us understand traffic patterns and improve our site (e.g., Google Analytics).</li>
        <li><span class="ghost">Preference cookies:</span> Remember your settings and preferences across visits.</li>
      </ul>
      <p>You may disable cookies through your browser settings, though this may affect the functionality of certain parts of our site. We do not use cookies to serve third-party advertising.</p>
    </div>

    <div class="terms-section" id="contact-legal">
      <div class="section-num">10</div>
      <h2>CONTACT & GOVERNING LAW</h2>
      <p>These Terms are governed by and construed in accordance with the laws of the Province of Ontario and the federal laws of Canada applicable therein. Any disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts of Ontario.</p>
      <p>For any questions about these Terms, please contact our legal team:</p>
      <div class="highlight-box">
        <p>
          <strong>Hopreneur Inc.</strong><br>
          Toronto, Ontario, Canada<br>
          legal@hopreneur.com<br>
          +1 (416) 555-0000
        </p>
      </div>
      <p>Hopreneur reserves the right to update these Terms at any time. Updated Terms will be posted on this page with a revised "Last Updated" date. Continued use of our services after any changes constitutes acceptance of the new Terms.</p>
    </div>

  </main>
</div>

<footer>
  <?php get_footer(); ?>
</footer>

<script>
  const cursor = document.getElementById('cursor');
  const ring = document.getElementById('cursorRing');
  let mx = 0, my = 0, rx = 0, ry = 0;
  document.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; cursor.style.left = mx + 'px'; cursor.style.top = my + 'px'; });
  function animateRing() { rx += (mx - rx) * 0.12; ry += (my - ry) * 0.12; ring.style.left = rx + 'px'; ring.style.top = ry + 'px'; requestAnimationFrame(animateRing); }
  animateRing();
  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => { ring.style.width = '60px'; ring.style.height = '60px'; cursor.style.transform = 'translate(-50%,-50%) scale(0)'; });
    el.addEventListener('mouseleave', () => { ring.style.width = '38px'; ring.style.height = '38px'; cursor.style.transform = 'translate(-50%,-50%) scale(1)'; });
  });

  // Sidebar active state on scroll
  const sections = document.querySelectorAll('.terms-section');
  const sidebarLinks = document.querySelectorAll('.sidebar-nav a');
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if(e.isIntersecting) {
        sidebarLinks.forEach(l => l.classList.remove('active'));
        const active = document.querySelector('.sidebar-nav a[href="#' + e.target.id + '"]');
        if(active) active.classList.add('active');
      }
    });
  }, { threshold: 0.3 });
  sections.forEach(s => obs.observe(s));
</script>
</body>
</html>

<?php ?>