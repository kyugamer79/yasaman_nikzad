import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

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

  autoHeight: true,
});