<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Eric Barber">
  <meta name="author" content="Nate Hicks">

  <title>MATHE</title>

  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|EB+Garamond|Material+Icons" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- jQuery 3 -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <!-- Animate On Scroll -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Font Awesome 4 -->
  <script src="https://kit.fontawesome.com/ea61fee43e.js" crossorigin="anonymous"></script>
  <!-- Materialize -->
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- Our Styles -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
  <!-- Green sock -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/EaselPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/MotionPathPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollToPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/EasePack.min.js"></script>
  <!--Typed-->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
  <!-- Glide -->
  <!--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glidejs@2.1.0/dist/css/glide.core.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glidejs@2.1.0/dist/css/glide.theme.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/glidejs@2.1.0/dist/glide.min.js"></script> -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Our Scripts -->
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  <?php wp_head();?>
</head>
<body class="page" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

  <nav class="nav-extended pushpin-nav">
  	<div class="nav-wrapper">
  	 <div class="container-extended">
  		  <a href="/" class="brand-logo"><svg id="logoSVG" xmlns="http://www.w3.org/2000/svg" width="171.236" height="41.442" viewBox="0 0 171.236 41.442"><path d="M35.919,2.112A3.7,3.7,0,0,0,32.6,0a3.542,3.542,0,0,0-3.013,1.518s-4.4,7.9-4.839,8.754c-.594,1.21-.9.308-.9.308V2.728s0-2.706-3.629-2.706c-2.4-.022-3.607,2.991-3.607,2.991s-3.629,7.259-4.223,8.468c-.308.594-.594,0-.594,0L7.853,3.013S6.643,0,3.629,0C0,0,0,3.013,0,3.013V16.893H3.629V5.719c0-1.21.594,0,.594,0l4.839,9.656a3.542,3.542,0,0,0,3.013,1.518c2.42,0,3.013-1.518,3.013-1.518S19,7.523,19.686,6.027c.836-1.8.836-.308.836-.308V16.893h5.433l2.112-4.839h8.446l2.42,4.839h5.125ZM29.871,7.853s1.8-2.706,2.112-3.013c.594-.594.9,0,.9,0l1.8,3.013Z" transform="translate(63.5 17.794)" fill="#fff"/><path d="M219.966-.015V16.878h-3.915V10.257h-15c-.044,3.541-.088,6.643-.088,6.643h-3.937V3.614h-7.853V16.9h-4.223V3.614H175.6V-.015s25.053.308,25.361,0a47.854,47.854,0,0,1,.132,6.335h14.957V-.015Z" transform="translate(-73.475 17.809)" fill="#fff"/><path d="M410.626,0h-19S388.3,0,388.3,3.013V13.879a3.057,3.057,0,0,0,3.321,3.013h19V12.384h-19V9.964h19V6.643h-19V3.937h19Z" transform="translate(-239.39 17.794)" fill="#fff"/><path d="M29.119,0H20.2L0,34.1l4.717,7.34H44.583L49.3,34.1ZM23.608,1.576a1.092,1.092,0,0,1,2.094,0L35.126,18.1H14.185ZM4.717,38.554c-1.841,0-1.312-1.576-1.312-1.576l8.928-15.651a8.684,8.684,0,0,0,.5,3.549c.54.827,7.66,11.385,8.928,13.16a3.264,3.264,0,0,0,.474.529H4.717ZM22.3,36.46c-.375-.375-7.6-11.275-8.4-13.38s.772-3.935,3.406-3.935c2.59,0,6.7,7.131,6.822,7.34V26.5c.066.154,2.127,4.7,3.67,3.141a3.346,3.346,0,0,1,2.987-1.091.12.12,0,0,1,.088.176c-1.113,2.37-4.42,6.183-5.709,7.726C23.873,38.036,22.815,36.978,22.3,36.46Zm22.3,2.094h-19l.375-.529L37.11,21.558l8.8,15.408C45.905,36.978,46.423,38.554,44.594,38.554Z" fill="#fff"/></svg></a>
       	  <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  		  <ul id="nav-mobile" class="right hide-on-med-and-down">
  		    <li class="link--support">
  		    	<a href="/support">Support</a>
  		    </li>
  		    <li class="link--services">
  		    	<a href="/services">Services</a>
  		    </li>
  		    <li class="link--resources">
  		    	<a href="/resources">Resources</a>
  		    </li>
  		    <li class="link--about">
  		    	<a href="/about">About Us</a>
  		    </li>
  		    <li class="link--contact">
  		    	<a href="/contact">Contact</a>
  		    </li>
  		  </ul>
  		</div>
  	</div>
  </nav>

<ul class="sidenav" id="mobile-menu">
	<li><a href="/support">Support</a></li>
	<li><a href="/services">Services</a></li>
	<li><a href="/resources">Resources</a></li>
	<li><a href="/about">About Us</a></li>
	<li><a href="/contact">Contact</a></li>
	<li class="social_links">
		<ul>
			<li><a href="https://www.facebook.com/Mathe-Inc-111802318882296/" class="fa fa-facebook"></a></li>
			<li><a href="https://twitter.com/matheinc?lang=en" class="fa fa-linkedin"></a></li>
			<li><a href="https://www.linkedin.com/company/mathe-inc" class="fa fa-twitter"></a></li>
		</ul>
	</li>
</ul>
  <main>
    




