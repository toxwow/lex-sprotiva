require('./bootstrap');
import Swiper from 'swiper/bundle';

$('.nav__hamburger').on('click', function(){
    $(this).toggleClass('active');
    $('.nav__menu').toggleClass('is-active');
})

$(".faq__item").on('click', function(){
    $(this).toggleClass('faq__item--is-open');
    $(this).children('.faq__description').slideToggle('slow')
})


const swiper = new Swiper('.swiper-container-hero', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5000,
    },
  
    
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });

  const swiper2 = new Swiper('.swiper-container-hero-single', {
    // Optional parameters
    direction: 'horizontal',
    allowTouchMove: false,
    loop: false,
    
  
    
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });

  

  const swiper1 = new Swiper('.swiper-container-sponsor', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 5000,
    },
    
    breakpoints: {
    768: {
      slidesPerView: 2,
    },

    991: {
      slidesPerView: 3,
    }
    },
    // Navigation arrows
    navigation: {
      
    },
  
  });

