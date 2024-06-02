import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';


//Single Service Swiper
const singleServiceSwiper = new Swiper('#singleServiceSwiper', {

  modules: [Navigation, Pagination],
  loop: true,


  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },

  // autoHeight: true,
});


//Homepage Swiper
const homePageSwiper = new Swiper('#homePageSwiper', {

  modules: [Navigation, Pagination],
  loop: true,


  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
    clickable: true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },

  // autoHeight: true,
});

//Consent  Swiper
const consentSwiper = new Swiper("#consentSwiper", {
  modules: [Navigation, Pagination],
  loop: true,
  slidesPerView: 2,

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },

    576: {
      slidesPerView: 2,
    },
  },

  autoHeight: true,
});

// Blog
const blogSwiper = new Swiper("#blogSwiper", {
  modules: [Navigation, Pagination],
  loop: true,
  slidesPerView: 2,

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    480: {
      slidesPerView: 1,
    },

    576: {
      slidesPerView: 2,
    },
  },

  autoHeight: true,
});
