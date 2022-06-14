const overlayOpenHandlers = document.querySelectorAll('.portfolio__thumb');
const overlayCloseHandler = document.getElementById('overlay-close');
const overlayElement = document.querySelector('#overlay');
const titleElement = document.querySelector('#header h1');
const headlineElement = document.querySelector('#header h3');

// Open overlay
function openOverlay(item) {
  item.addEventListener('click', (e) => {
    e.preventDefault();
    // Set classes
    document.documentElement.classList.add('overlay-open');
    document.documentElement.classList.remove('nav-open');
    document.documentElement.classList.remove('overlay-loaded');
    // Set data
    overlayElement.dataset.ypos = document.documentElement.scrollTop;
    titleElement.dataset.reset = titleElement.innerHTML;
		headlineElement.dataset.reset = headlineElement.innerHTML;
    titleElement.innerHTML = item.dataset.title;
    headlineElement.innerHTML = item.dataset.headline;
    document.getElementById('overlay-text').innerHTML = '';
    // Fetch ajax query
    let workUid = item.dataset.work;
    let url = 'portfolio/' + workUid + '.json?v=' + Math.random();
    fetch(url)
      .then(response => response.json())
      .then(json => {
        document.getElementById('overlay-text').innerHTML = json.work;
        document.documentElement.classList.add('overlay-loaded');
      });
  });
}
if (overlayOpenHandlers) {
  overlayOpenHandlers.forEach(openOverlay);
}

// Close overlay
if (overlayCloseHandler) {
  overlayCloseHandler.addEventListener('click', (e) => {
    e.preventDefault();
    // Jump to stored ypos
    if (overlayElement.dataset.ypos) {
      document.documentElement.scrollTop = overlayElement.dataset.ypos;
    }
    // Reset classes
    document.documentElement.classList.remove('nav-open');
    document.documentElement.classList.remove('overlay-open');
    document.documentElement.classList.remove('overlay-loaded');
    // Reset headings
    if (titleElement.dataset.reset) titleElement.innerHTML = titleElement.dataset.reset;
    if (headlineElement.dataset.reset) headlineElement.innerHTML = headlineElement.dataset.reset;
  });
}
