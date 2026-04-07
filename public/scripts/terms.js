const sections = document.querySelectorAll('.terms-section');
const sidebarLinks = document.querySelectorAll('.sidebar-nav a');

if (sections.length && sidebarLinks.length) {
  const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        sidebarLinks.forEach(link => link.classList.remove('active'));
        const active = document.querySelector('.sidebar-nav a[href="#' + entry.target.id + '"]');
        if (active) {
          active.classList.add('active');
        }
      }
    });
  }, { threshold: 0.3 });

  sections.forEach(section => obs.observe(section));
}
