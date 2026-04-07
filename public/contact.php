<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — Hopreneur</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:ital,wght@0,300;0,400;1,300&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/contact.css'?>">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/footer.css'?>">
<link rel="stylesheet" href="<?php echo STYLES_URI . '/style.css' ?>">
</head>
<body>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<nav>
  <?php get_header(); ?>
</nav>

<div class="contact-layout">
  <!-- LEFT PANEL -->
  <div class="contact-left">
    <div class="contact-left-inner">
      <div class="page-hero-label">Get in touch</div>
      <h1>LET'S<br>BUILD<br><span class="outline">TOGETHER</span></h1>
      <p>Tell us about your project. We respond to every inquiry within 24 hours and offer a free 30-minute discovery call.</p>
      <div class="contact-info">
      </div>
    </div>
    <div class="contact-left-footer">
      <p>Currently accepting new projects for Q1 2025</p>
    </div>
  </div>

  <!-- RIGHT: FORM -->
  <div class="contact-right">
    <form id="contactForm">
      <div class="form-section-label">Your information</div>
      <div class="form-row">
        <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Alex">
        </div>
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" placeholder="Martin">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="alex@company.com">
        </div>
        <div class="form-group">
          <label for="company">Company</label>
          <input type="text" id="company" name="company" placeholder="Acme Inc.">
        </div>
      </div>

      <div class="form-section-label" style="margin-top:40px;">Project details</div>
      <div class="form-group">
        <label for="budget">Budget Range</label>
        <select id="budget" name="budget">
          <option value="" disabled selected>Select a range...</option>
          <option>Under $5,000</option>
          <option>$5,000 – $15,000</option>
          <option>$15,000 – $50,000</option>
          <option>$50,000+</option>
          <option>Let's discuss</option>
        </select>
      </div>
      <div class="form-group">
        <label>Services Needed</label>
        <div class="services-check">
          <div class="check-item"><input type="checkbox" id="s1"><label for="s1">Web Development</label></div>
          <div class="check-item"><input type="checkbox" id="s2"><label for="s2">UI / UX Design</label></div>
          <div class="check-item"><input type="checkbox" id="s3"><label for="s3">Mobile App</label></div>
          <div class="check-item"><input type="checkbox" id="s4"><label for="s4">AI Integration</label></div>
          <div class="check-item"><input type="checkbox" id="s5"><label for="s5">Brand Strategy</label></div>
          <div class="check-item"><input type="checkbox" id="s6"><label for="s6">Retainer / Ongoing</label></div>
        </div>
      </div>
      <div class="form-group">
        <label for="message">Tell us about your project</label>
        <textarea id="message" name="message" placeholder="Describe what you want to build, your timeline, and any other relevant context..."></textarea>
      </div>

      <div class="submit-row">
        <span class="submit-note">We reply within 24 hrs</span>
        <button type="submit" class="btn-submit">Send message →</button>
      </div>
    </form>

    <div class="success-msg" id="successMsg">
      <span class="success-icon">✓</span>
      <h3>MESSAGE SENT</h3>
      <p>Thank you for reaching out. We'll review your project brief and get back to you within 24 hours with next steps.</p>
    </div>
  </div>
</div>

<!-- SOCIAL BAR -->
<div class="social-row">
  <div class="social-item"><a href="#">LinkedIn</a></div>
  <div class="social-item"><a href="#">Twitter / X</a></div>
  <div class="social-item"><a href="#">GitHub</a></div>
  <div class="social-item"><a href="#">Dribbble</a></div>
  <div class="social-item"><a href="#">Instagram</a></div>
</div>

<footer>
  <?php get_footer(); ?>
</footer>

<script src="<?php echo SCRIPTS_URI . '/index.js'; ?>"></script>
<script src="<?php echo SCRIPTS_URI . '/contact.js'; ?>"></script>
</body>
</html>


<?php 

?>
