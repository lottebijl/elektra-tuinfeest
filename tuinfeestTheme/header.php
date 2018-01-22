<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Elektra Tuinfeest is het jaarlijkse festival van het poppodium Elektra in Sliedrecht. Op Tuinfeest 2017 staan Blues Pills, Hark, The Dawn Brothers, Audio Adam, Bartek, Los Paja Brava e.a. in de Electric Garden. ">
		<meta name="keywords" content="elektra, tuinfeest, sliedrecht, festival, blues pills, hark, the dawn brothers, audio adam, bartek, los paja brava">
		<title><?php echo get_bloginfo( 'name' ); ?> </title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/style.min.css">
		<!-- Tijdelijke Overwrite stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/overwrite.css">
		<script src="<?php bloginfo('template_directory');?>/js/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	</head>
	<body>

	<?php if ( is_front_page() && is_home() || is_singular( 'bands' ) ) : ?>
		<section class="top-navigation @@theme">
	<?php else : ?>
		<section class="top-navigation dark">
	<?php endif; ?>
		<div class="container">
			<div class="row">
				<div class="columns small-12">
        	<h1 class="header__logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Elektra Tuinfeest </a></h1>
        	<span class="details">17 juni 2017, gratis toegang Stationsweg, Sliedrecht</span>
      	</div>
				<div class="columns small-18">
					<a href="#" class="btn btn-menu">Menu<i class="icon icon-menu"></i></a>
					<nav>
						<?php wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'container' => '',
								'menu_class' => '',
							)
						);?>
					</nav>
				</div>
			</div>
		</div>
	</section>