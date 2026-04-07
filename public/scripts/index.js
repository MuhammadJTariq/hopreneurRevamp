const cursor = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');

if (cursor && ring) {
  let mx = 0, my = 0, rx = 0, ry = 0;

  document.addEventListener('mousemove', e => {
    mx = e.clientX;
    my = e.clientY;
    cursor.style.left = mx + 'px';
    cursor.style.top = my + 'px';
  });

  function animateRing() {
    rx += (mx - rx) * 0.12;
    ry += (my - ry) * 0.12;
    ring.style.left = rx + 'px';
    ring.style.top = ry + 'px';
    requestAnimationFrame(animateRing);
  }

  animateRing();

  document.querySelectorAll('a, button, input, select, textarea, label').forEach(el => {
    el.addEventListener('mouseenter', () => {
      ring.style.width = '60px';
      ring.style.height = '60px';
      cursor.style.transform = 'translate(-50%,-50%) scale(0)';
    });

    el.addEventListener('mouseleave', () => {
      ring.style.width = '38px';
      ring.style.height = '38px';
      cursor.style.transform = 'translate(-50%,-50%) scale(1)';
    });
  });
}

const fadeUps = document.querySelectorAll('.fade-up');

if (fadeUps.length) {
  const obs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  fadeUps.forEach(el => obs.observe(el));
}
