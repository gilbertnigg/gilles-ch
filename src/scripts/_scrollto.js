// Smoothscroll Polyfill
import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();

const scrollToHandlers = document.querySelectorAll('a[href^="#"]');
let scrollBehavior;

function scrollToElement(item) {
  item.addEventListener('click', (e) => {
    e.preventDefault();
    // Get anchor
    let anchorName = item.dataset.anchor;
    let anchorElement = document.getElementById(anchorName);
    let yPos = anchorElement.getBoundingClientRect().top + window.pageYOffset;
    // Disable smooth-scroll on mobile-nav
    if (document.documentElement.classList.contains('nav-open') && window.innerWidth <= 1360) {
      scrollBehavior = 'auto';
    } else {
      scrollBehavior = 'smooth';
    }
    // Set classes
    document.documentElement.classList.remove('nav-open');
    document.documentElement.classList.remove('overlay-open');
    window.scrollTo({
      top: yPos,
      behavior: scrollBehavior
    });
  });
}

scrollToHandlers.forEach(scrollToElement);
