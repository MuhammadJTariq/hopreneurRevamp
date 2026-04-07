document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.filter-btn').forEach(button => button.classList.remove('active'));
    btn.classList.add('active');
  });
});
