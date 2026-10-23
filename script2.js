
/* Progressive enhancement only: all important page content is in HTML. */

const menuButton = document.querySelector('.menu-toggle');
const nav = document.querySelector('#primary-navigation');

if (menuButton && nav) {
  menuButton.addEventListener('click', () => {
    const open = menuButton.getAttribute('aria-expanded') !== 'true';
    menuButton.setAttribute('aria-expanded', String(open));
    nav.classList.toggle('is-open', open);
  });

  nav.addEventListener('click', (event) => {
    if (event.target.closest('a')) {
      menuButton.setAttribute('aria-expanded', 'false');
      nav.classList.remove('is-open');
    }
  });
}

const year = document.querySelector('#copyright-year');

if (year) {
  year.textContent = String(new Date().getFullYear());
}
