<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products — Hopreneur</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/products.css'?>"> 
<link rel="stylesheet" href="<?php echo STYLES_URI . '/footer.css'?>">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/style.css' ?>">
</head>
<body>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<nav>
  <?php get_header(); ?>
</nav>

<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="page-hero-label">Our offerings</div>
  <h1>DIGITAL<br><span class="outline">PRODUCTS</span></h1>
  <p class="page-hero-desc">Ready-to-deploy digital products and service packages built for businesses that move fast.</p>
</section>

<!-- FEATURED PRODUCT -->
<section class="products-featured">
  <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.3em;text-transform:uppercase;color:var(--accent);margin-bottom:32px;" class="fade-up">Featured Product</div>
  <div class="product-hero-card fade-up">
    <div class="phc-left">
      <div>
        <div class="phc-badge">Most Popular</div>
        <h2>LAUNCHKIT PRO</h2>
        <p>Everything you need to take a product from concept to launch. Strategy, design, development, and deployment — fully packaged and delivered in 6 weeks.</p>
        <div style="display:flex;gap:12px;margin-bottom:40px;flex-wrap:wrap;">
          <span class="tag">Strategy</span>
          <span class="tag">UI Design</span>
          <span class="tag">Development</span>
          <span class="tag">Deployment</span>
        </div>
      </div>
      <div>
        <div class="phc-meta">
          <div class="phc-meta-item">
            <span class="phc-meta-label">Timeline</span>
            <span class="phc-meta-val">6 Weeks</span>
          </div>
          <div class="phc-meta-item">
            <span class="phc-meta-label">Revisions</span>
            <span class="phc-meta-val">Unlimited</span>
          </div>
          <div class="phc-meta-item">
            <span class="phc-meta-label">Support</span>
            <span class="phc-meta-val">3 Months</span>
          </div>
        </div>
        <div style="margin-top:32px;display:flex;gap:12px;align-items:center;">
          <a href="contact.html" class="btn-primary">Get LaunchKit</a>
          <a href="#" class="btn-outline">Learn more</a>
        </div>
      </div>
    </div>
    <div class="phc-right">
      <div class="phc-features">
        <h4>What's included</h4>
        <ul class="feature-list">
          <li>Product discovery & strategy workshop</li>
          <li>Full UI/UX design system + prototypes</li>
          <li>Custom web or mobile application build</li>
          <li>Database architecture & API development</li>
          <li>Cloud deployment + CI/CD pipeline</li>
          <li>SEO setup, analytics & performance audit</li>
          <li>3 months post-launch support</li>
        </ul>
      </div>
      <div class="phc-price">
        <div>
          <div class="price-num">$12,000</div>
          <div class="price-period">Starting price · scope dependent</div>
        </div>
        <a href="contact.html" class="btn-primary">Book a call →</a>
      </div>
    </div>
  </div>
</section>

<!-- PRODUCT GRID -->
<section class="products-grid-section">
  <div class="section-header fade-up">
    <h2>ALL PACKAGES</h2>
    <p>Modular offerings that scale to your needs and budget.</p>
  </div>
  <div class="products-grid">

    <div class="product-card fade-up">
      <div class="product-card-glow"></div>
      <div class="product-icon">⚡</div>
      <h3>SPRINT SITE</h3>
      <p>A polished, production-ready marketing website delivered in 2 weeks. Includes up to 8 pages, CMS integration, and mobile optimization.</p>
      <div class="product-card-footer">
        <div class="product-price-sm">$2,800</div>
        <a href="contact.html" class="product-link">Get started →</a>
      </div>
    </div>

    <div class="product-card fade-up">
      <div class="product-card-glow"></div>
      <div class="product-icon">📱</div>
      <h3>APP MVP</h3>
      <p>A cross-platform mobile application built with React Native. Core features, auth, push notifications, and App Store/Play Store deployment.</p>
      <div class="product-card-footer">
        <div class="product-price-sm">$8,500</div>
        <a href="contact.html" class="product-link">Get started →</a>
      </div>
    </div>

    <div class="product-card fade-up">
      <div class="product-card-glow"></div>
      <div class="product-icon">🤖</div>
      <h3>AI ADD-ON</h3>
      <p>Plug AI capabilities into your existing product. Custom LLM integration, prompt engineering, and automation workflows built to fit your stack.</p>
      <div class="product-card-footer">
        <div class="product-price-sm">$4,200</div>
        <a href="contact.html" class="product-link">Get started →</a>
      </div>
    </div>

    <div class="product-card fade-up">
      <div class="product-card-glow"></div>
      <div class="product-icon">🎨</div>
      <h3>BRAND PACK</h3>
      <p>Complete visual identity for digital-first brands. Logo system, color palette, typography, component library, and brand guidelines doc.</p>
      <div class="product-card-footer">
        <div class="product-price-sm">$3,500</div>
        <a href="contact.html" class="product-link">Get started →</a>
      </div>
    </div>

    <div class="product-card fade-up">
      <div class="product-card-glow"></div>
      <div class="product-icon">🛒</div>
      <h3>COMMERCE KIT</h3>
      <p>A high-converting e-commerce store built on Next.js or Shopify. Custom theme, checkout optimization, and payment gateway integration.</p>
      <div class="product-card-footer">
        <div class="product-price-sm">$6,000</div>
        <a href="contact.html" class="product-link">Get started →</a>
      </div>
    </div>

    <div class="product-card fade-up">
      <div class="product-card-glow"></div>
      <div class="product-icon">🔧</div>
      <h3>RETAINER</h3>
      <p>Ongoing development and design support. Dedicated hours per month, priority response times, and direct access to the full team.</p>
      <div class="product-card-footer">
        <div class="product-price-sm">$2,000<span style="font-size:16px;color:var(--muted)">/mo</span></div>
        <a href="contact.html" class="product-link">Get started →</a>
      </div>
    </div>

  </div>
</section>

<!-- COMPARE -->
<section class="compare-section fade-up">
  <h2>COMPARE PACKAGES</h2>
  <table class="compare-table">
    <thead>
      <tr>
        <th>Feature</th>
        <th>Sprint Site</th>
        <th>LaunchKit Pro</th>
        <th>Retainer</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Custom Design</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>Web Development</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>Mobile App</td><td class="cross">—</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>AI Integration</td><td class="cross">—</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>Brand Strategy</td><td class="cross">—</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>Post-launch Support</td><td class="cross">—</td><td>3 months</td><td>Ongoing</td></tr>
      <tr><td>CMS Integration</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>Cloud Deployment</td><td class="check">✓</td><td class="check">✓</td><td class="check">✓</td></tr>
      <tr><td>Analytics Setup</td><td class="cross">—</td><td class="check">✓</td><td class="check">✓</td></tr>
    </tbody>
  </table>
</section>

<section class="cta-band">
  <h2>NOT SURE<br>WHICH FIT?</h2>
  <p>Let's have a quick call. We'll listen to your goals and recommend the right package — no pressure.</p>
  <a href="contact.html" class="btn-primary">Book a free call</a>
</section>

<footer>
  <?php get_footer(); ?>
</footer>

<script src="<?php echo SCRIPTS_URI . '/index.js'; ?>"></script>
</body>
</html>

<?php 

?>
