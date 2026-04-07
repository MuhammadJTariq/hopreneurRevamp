const contactForm = document.getElementById('contactForm');
const successMsg = document.getElementById('successMsg');

if (contactForm && successMsg) {
  contactForm.addEventListener('submit', e => {
    e.preventDefault();
    contactForm.style.display = 'none';
    successMsg.style.display = 'block';
  });
}
