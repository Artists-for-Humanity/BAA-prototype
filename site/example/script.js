const mobileMenu = document.querySelector('.mobile-menu');
const openButton = document.querySelector('.nav-open-button');
const closeButton = document.querySelector('.nav-close-button');

openButton.addEventListener("click", openMenu);
closeButton.addEventListener("click", closeMenu);

function openMenu() {
  mobileMenu.setAttribute('data-state', 'open');
}

function closeMenu() {
  mobileMenu.setAttribute('data-state', 'closed');
}