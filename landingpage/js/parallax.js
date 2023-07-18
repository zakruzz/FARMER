let last = document.getElementsByClassName('last-img')[0];

window.addEventListener('scroll', function () {
  let value = window.scrollY;
  last.style.top = value * 0.5 + 'px';
});
