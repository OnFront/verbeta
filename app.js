document.addEventListener( 'DOMContentLoaded', function () {
  const splide =  new Splide( '.splide', ).mount();

} );

// HAMBURGER ANIMATION

const hamburger = document.querySelector('.menu');
const nav = document.querySelector('.navbar-nav');
const menuTitle = document.querySelector('.mobile-menu-title');

hamburger.addEventListener('click', function(e){
    hamburger.classList.toggle('opened');
    this.setAttribute('aria-expanded', this.classList.contains('opened'));
    menuTitle.style.display = 'block';


    nav.classList.toggle('navAnim');
    if(nav.classList.contains('navAnim')){
        nav.style.display = 'flex';
    } else {
        nav.style.display = 'none';
        menuTitle.style.display = 'none';
    }
});



