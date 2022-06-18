const articles = document.querySelectorAll('main article[id]');
const navElements = document.querySelectorAll('nav ul li a');
const titleElement = document.querySelector('#header h1');
const headlineElement = document.querySelector('#header h2');
let articleIsActive, articleCurrentisActive;

document.addEventListener('scroll', () => {
  if (!document.documentElement.classList.contains('overlay-open')) {
    articles.forEach((article) => {
      // Get article position
      if (article.getBoundingClientRect().top < 1) {
        articleIsActive = article;
      }
    });
    if (articleIsActive !== articleCurrentisActive) {
      // Change heading text
      let articleTitle = articleIsActive.querySelector('h2').innerHTML;
      let articleHeading = articleIsActive.querySelector('h3').innerHTML;
      titleElement.innerHTML = articleTitle;
      headlineElement.innerHTML = articleHeading;
      articleCurrentisActive = articleIsActive;
      // Set nav class
      navElements.forEach((nav) => {
        if (nav.dataset.anchor === articleIsActive.id) {
          nav.classList.add('is-selected');
        } else {
          nav.classList.remove('is-selected');
        }
      });
    }
  }
}, { passive: true });
