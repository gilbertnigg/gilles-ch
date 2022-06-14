if (document.getElementById('navicon')) {
  document.getElementById('navicon').addEventListener('click', (e) => {
    e.preventDefault();
    document.documentElement.classList.toggle('nav-open');
  });
}
