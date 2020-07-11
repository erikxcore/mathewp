var attachActiveNavigationClass = function attachActiveNavigationClass() {
  var loc = window.location.pathname;

  if (loc.indexOf('about') > -1) {
    document.querySelector('.link--about').classList.add('active');
    document.body.classList.add('about');
  } else if (loc.indexOf('services') > -1) {
    document.body.classList.add('services');
    document.querySelector('.link--services').classList.add('active');
  } else if (loc.indexOf('support') > -1) {
    document.body.classList.add('support');
    document.querySelector('.link--support').classList.add('active');
  } else if (loc.indexOf('testimonials') > -1) {
    document.body.classList.add('testimonials');
    document.querySelector('.link--testimonials').classList.add('active');
  } else if (loc.indexOf('blog') > -1) {
    document.body.classList.add('blog');
    document.querySelector('.link--blog').classList.add('active');
  } else if (loc.indexOf('contact') > -1) {
    document.body.classList.add('contact');
    document.querySelector('.link--contact').classList.add('active');
  } else if (loc.indexOf('resources') > -1) {
    document.body.classList.add('resources');
    document.querySelector('.link--resources').classList.add('active');
  } else{
    document.body.classList.add('homepage');
    document.body.classList.remove('page');
  }
};

$(document).ready(function () {
  attachActiveNavigationClass();
  console.info("MATHE-PUB v0.4");
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, null);
  // var elems2 = document.querySelectorAll('.parallax');
  // var instances2 = M.Parallax.init(elems2, null);
  AOS.init();

  var pushpins = document.querySelectorAll(".pushpin-nav");
  pushpins.forEach(function(element) {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var elemRect = element.getBoundingClientRect();
    var parentRect = element.parentElement.getBoundingClientRect();
    var elemTop = scrollTop + elemRect.top;
    
    // var instancePushpin = M.Pushpin.init(element, {
    //   top: elemTop,
    //   bottom: elemTop + parentRect.height - elemRect.height
    // });
     var instancePushpin = M.Pushpin.init(element, {
      top: 1
    });
  })


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
  var scroll = $(window).scrollTop();
  if(scroll > 0){
      $('.arrow-container').addClass('animate__fadeOut');
  }

  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll > 0){
      $('.arrow-container').addClass('animate__fadeOut');
    }else if(scroll === 0){
      $('.arrow-container').removeClass('animate__fadeOut');
    }
  });

  $('#modal1').modal();
  $('#modal2').modal();

  $('.triggerModal1').on('click', function(){
    $('#modal1').modal('open');
    // To stop Youtube:
    // document.querySelector("#modal1 iframe").contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
  });

  $('.triggerModal2').on('click', function(){
    $('#modal2').modal('open');
  });
  
  var loc = window.location.pathname;

  if (loc.indexOf('support') > -1) { 
    $('#modal3').modal();
    $('#modal4').modal();

    $('.triggerModal4').on('click', function(){
      $('#modal3').modal('open');
    });

    $('.triggerModal3').on('click', function(){
      $('#modal4').modal('open');
    });
  }

    document.querySelector('[href="#cloud"]').addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector('#cloud').classList.remove('active');
    document.querySelector('#itsupport').classList.remove('active');
    document.querySelector('#cloud').classList.add('active');
    document.querySelector('.indicator').classList.remove('right');
    document.querySelector('.indicator').classList.remove('left');
    document.querySelector('.indicator').classList.add('left');

  });
  document.querySelector('[href="#itservices"]').addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector('#cloud').classList.remove('active');
    document.querySelector('#itsupport').classList.remove('active');
    document.querySelector('#itsupport').classList.add('active');
    document.querySelector('.indicator').classList.remove('right');
    document.querySelector('.indicator').classList.remove('left');
    document.querySelector('.indicator').classList.add('right');
  });


  var options = {
  strings: ['Healthcare', 'IT Services'],
  typeSpeed: 80,
  loop: true
};

  var typed = new Typed('.typer', options);



});