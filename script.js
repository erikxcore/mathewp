
var attachActiveNavigationClass = function attachActiveNavigationClass() {
  var loc = window.location.pathname;

  if (loc.indexOf('about') > -1) {
    document.documentElement.classList.add('about');
  } else if (loc.indexOf('services') > -1) {
    document.documentElement.classList.add('services');
  } else if (loc.indexOf('support') > -1) {
    document.documentElement.classList.add('support');
  } else if (loc.indexOf('testimonials') > -1) {
    document.documentElement.classList.add('testimonials');
  } else if (loc.indexOf('blog') > -1) {
    document.documentElement.classList.add('blog');
  } else if (loc.indexOf('contact') > -1) {
    document.documentElement.classList.add('contact');
  } else if (loc.indexOf('resources') > -1) {
    document.documentElement.classList.add('resources');
  } else if (loc.indexOf('newsletter') > -1) {
    document.documentElement.classList.add('newsletter');
  } else{
    document.documentElement.classList.add('homepage');
    document.documentElement.classList.remove('page');
  }
};

var attachActiveNavigationClassNav = function attachActiveNavigationClassNav(){
  var loc = window.location.pathname;

  if (loc.indexOf('about') > -1) {
    document.querySelector('.link--about').classList.add('active');
  } else if (loc.indexOf('services') > -1) {
    document.querySelector('.link--services').classList.add('active');
  } else if (loc.indexOf('support') > -1) {
    document.querySelector('.link--support').classList.add('active');
  } else if (loc.indexOf('testimonials') > -1) {
    document.querySelector('.link--testimonials').classList.add('active');
  } else if (loc.indexOf('blog') > -1) {
    document.querySelector('.link--blog').classList.add('active');
  } else if (loc.indexOf('contact') > -1) {
    document.querySelector('.link--contact').classList.add('active');
  } else if (loc.indexOf('resources') > -1) {
    document.querySelector('.link--resources').classList.add('active');
  }
}

attachActiveNavigationClass();


$(document).ready(function () {
  console.info("MATHE-PUB v0.5");

  attachActiveNavigationClassNav();
  var loc = window.location.pathname;

  if(loc === '/'){
    console.info("Homepage!");
    // SET STAGE /////
    var heroPage = [/*$('.brand-logo'),*/$('.heroText')];
    TweenMax.set(".navLinks",{x:-15,autoAlpha:0, opacity:0});
    TweenMax.set(heroPage, {autoAlpha:0, opacity:0})
    //////////////////
    //////////////////
    // ANIMATION /////
    TweenMax.to(".brand-logo",1,{opacity:1, autoAlpha:1, ease:Sine.easeInOut, delay:1});
    TweenMax.staggerTo(".navLinks",1,{opacity:1, autoAlpha:1, x:0, ease:Sine.easeInOut, delay:1.5},.25);
    TweenMax.to('.heroText', 1, {opacity:1, autoAlpha:1, ease:Sine.easeInOut, delay:2.5});
    //////////////////
    // Sliders
    var mySwiper = new Swiper('.swiper-container.desktop', {
      direction: 'horizontal',
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var mySwiper = new Swiper('.swiper-container.mobile', {
      direction: 'horizontal',
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var mySwiper = new Swiper('.swiper-container2', {
      direction: 'horizontal',
      loop: true,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    // Video Modals
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
  }

  // Support modals
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

  if(loc === '/' || loc === '/support/'){

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

  }

  if(loc === '/support/'){
     $('.arrow-container').addClass('hide');
  }
  // Side Nav trigger
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, null);

  // CSS Animate init
  AOS.init();

  // Sticky Nav trigger
  var pushpins = document.querySelectorAll(".pushpin-nav");
  pushpins.forEach(function(element) {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var elemRect = element.getBoundingClientRect();
    var parentRect = element.parentElement.getBoundingClientRect();
    var elemTop = scrollTop + elemRect.top;
    
     if(loc === '/'){
      var instancePushpin = M.Pushpin.init(element, {
        top: document.querySelector('.hero').getBoundingClientRect().height - 200
      });
     }else{
      var instancePushpin = M.Pushpin.init(element, {
        top: 400
      });
     }
  })


});