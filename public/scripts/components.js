/*const navMenu = {
  logoUrl: "./img/hopreneur.jpg",
  links: ["Home", "Projects", "Products", "Terms"],
  contact: {
    href: "contact.html",
    classes: ["nav-cta"],
    title: "Start a Project"
  },

  start() {
    let linksHTML = "";

    this.links.forEach(ele => {
      linksHTML += `<li><a href="">${ele}</a></li>`;
    });

    return `
      <a href="index.php" class="logo">
        <img src="" />
      </a>

      <ul class="nav-links">
        ${linksHTML}
      </ul>

      <a href="${this.contact.href}" class="${this.contact.classes[0]}">
        ${this.contact.title}
      </a>
    `;
  }
};

document.querySelector("nav").innerHTML = navMenu.start();



/*
 html: `
    <a href="index.html" class="logo"><img src="./img/hopreneur.jpg" /></a>
    <ul class="nav-links">
      <li><a href="index.html">Home</a></li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="products.html">Products</a></li>
      <li><a href="terms.html">Terms</a></li>
    </ul>
    <a href="contact.html" class="nav-cta">Start a project</a>
  `
  */




  const footer = {
    HTML : 
    `<div class="footer-top">
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
        <li><a href="contact.html">Contact</a></li>
        <li><a href="terms.html">Terms</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Services</h4>
      <ul>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">UI/UX Design</a></li>
        <li><a href="#">Mobile Apps</a></li>
        <li><a href="#">AI Integration</a></li>
        <li><a href="#">Brand Strategy</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Connect</h4>
      <ul>
        <li><a href="#">LinkedIn</a></li>
        <li><a href="#">Twitter / X</a></li>
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Dribbble</a></li>
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
  </div>`
  };

document.querySelector("footer").innerHTML = footer.HTML;