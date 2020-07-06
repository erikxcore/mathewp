var attachActiveNavigationClass = function attachActiveNavigationClass() {
  var location = window.location.pathname;

  if (location.indexOf('about') > -1) {
    document.querySelector('.link--about').classList.add('active');
  } else if (location.indexOf('services') > -1) {
    document.querySelector('.link--services').classList.add('active');
  } else if (location.indexOf('support') > -1) {
    document.querySelector('.link--support').classList.add('active');
  } else if (location.indexOf('testimonials') > -1) {
    document.querySelector('.link--testimonials').classList.add('active');
  } else if (location.indexOf('blog') > -1) {
    document.querySelector('.link--blog').classList.add('active');
  } else if (location.indexOf('contact') > -1) {
    document.querySelector('.link--contact').classList.add('active');
  }
};

$(document).ready(function () {
  console.info("MATHE-PUB v0.3");
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, null);
  // var elems2 = document.querySelectorAll('.parallax');
  // var instances2 = M.Parallax.init(elems2, null);
  attachActiveNavigationClass();
  AOS.init();
  var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  var mySwiper = new Swiper('.swiper-container2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});