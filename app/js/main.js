document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.reviews__slider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1.2,
        spaceBetween: 50,
      },
      1400: {
        slidesPerView: 2,
        spaceBetween: 100,
      },
    },
  });

  const burger = document.querySelector('.js-menu-btn');
  const menu = document.querySelector('.js-menu-list');

  burger.addEventListener('click', () => {
    menu.classList.toggle('active');
  });
});
