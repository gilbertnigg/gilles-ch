const articles = document.querySelectorAll('main article[id]');

let observer = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach(entry => {
      // Add class if in viewport
      if (entry.isIntersecting) {
        entry.target.classList.add('in-viewport');
        observer.unobserve(entry.target);
        /* Add & remove class:
      } else {
        entry.target.classList.remove('in-viewport');
        */
      }
    });
  }, {});

articles.forEach(article => {
  observer.observe(article);
});
