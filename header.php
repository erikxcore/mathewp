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
  <!-- Our Scripts -->
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  <?php wp_head();?>
</head>
<body class="homepage" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
    <nav class="nav-extended">
	<div class="nav-wrapper">
	 <div class="container-extended">
		  <a href="index.html" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/matheLogo.png"></a>
     	  <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
		    <li class="link--about">
		    	<a href="/about">About</a>
		    </li>
		    <li class="link--services">
		    	<a href="/services">Services</a>
		    </li>
		    <li class="link--support">
		    	<a href="/support">Support</a>
		    </li>
		    <li class="link--testimonials">
		    	<a href="/testimonials">Testimonials</a>
		    </li>
		    <li class="link--blog">
		    	<a href="/blog">Blog</a>
		    </li>
		    <li class="link--contact">
		    	<a href="/contact">Contact</a>
		    </li>
		    <li class="social_links">
		    	<ul>
		    		<li><a href="#" class="fa fa-facebook"></a></li>
		    		<li><a href="#" class="fa fa-linkedin"></a></li>
		    		<li><a href="#" class="fa fa-twitter"></a></li>
		    	</ul>
		    </li>
		  </ul>
		</div>
	</div>
</nav>

<ul class="sidenav" id="mobile-menu">
	<li><a href="/about">About</a></li>
	<li><a href="/services">Services</a></li>
	<li><a href="/support">Support</a></li>
	<li><a href="/testimonials">Testimonials</a></li>
	<li><a href="/blog">Blog</a></li>
	<li><a href="/contact">Contact</a></li>
	<li class="social_links">
		<ul>
			<li><a href="#" class="fa fa-facebook"></a></li>
			<li><a href="#" class="fa fa-linkedin"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
		</ul>
	</li>
</ul>
  <main>
    




