import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

const swiper = new Swiper('.first-swiper', {
  direction: 'horizontal',
  loop: true,
  slidesPerView:2,
  spaceBetween: 25,
  pagination: {
    el: '.swiper-pagination',
    type:'fraction',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
}, 
breakpoints: {
    1024: {
        slidesPerView: 2,
    },
    768: {
        slidesPerView: 2,
    },
    310: {
        slidesPerView: 1,
    }
}
    
});

const secondSwiper = new Swiper('.second-swiper', {
    directional: 'horizontal',
    slidesPerView:1,
     scrollbar: {
        el: '.scrollbar',
        draggable: true,
        dragSize: 26,
  },
})