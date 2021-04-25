require('./bootstrap');
import Swiper from 'swiper/bundle';

$('.nav__hamburger').on('click', function(){
    $(this).toggleClass('active');
    $('.nav__menu').toggleClass('nav__menu--mobile');
    setTimeout(function(){
        $('.nav__menu').toggleClass('is-active');

    }, 100)
})

$(".faq__item").on('click', function(){
    $(this).toggleClass('faq__item--is-open');
    $(this).children('.faq__description').slideToggle('slow')
})


const swiper = new Swiper('.swiper-container-hero', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    
  
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
