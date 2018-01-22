<section class="playlist">
	<div class="container">
		<div class="row">
			<div class="columns small-30 large-10">
				<a href="https://play.spotify.com/user/jcelektra/playlist/6oRhzJlUjeSIhRdTL3MeTf" target="_blank" class="title">BELUISTER DE<br> TUINFEEST 2017<br> SPOTIFY PLAYLIST</a>
				<p class="subtitle">Kom alvast in de stemming en luister naar de line up van 2017</p>
			</div>
			<a href="https://play.spotify.com/user/jcelektra/playlist/6oRhzJlUjeSIhRdTL3MeTf" target="_blank">
				<figure></figure>
			</a>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="columns small-30 large-10">
				<img src="<?php bloginfo('template_directory');?>/assets/images/logo-black.png" class="logo">
				<ul class="address">
					<li>Stationsweg 4<li>
					<li>3363 GA Sliedrecht<li>
				</ul>
				<ul class="social-media">
					<li><a href="https://nl-nl.facebook.com/elektra.poppodium/" target="_blank"><i class="icon icon-facebook"></i></a></li>
					<!-- <li><a href=""><i class="icon icon-snapchat"></i></a></li> -->
					<li><a href="http://www.instagram.com/poppodiumelektra" target="_blank"><i class="icon icon-instagram"></i></a></li>
					<li><a href="mailto:bestuur@sojs.nl" target="_blank"><i class="icon icon-mail"></i></a></li>
				</ul>
			</div>
			<div class="columns small-30 large-11">
				<nav>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-menu',
						'menu_class' => 'sitemap',
						'container' => 'ul',
					));?>
				</nav>
				<p>ELEKTRA maakt deel uit van</p>
				<a href="www.sojs.nl"><img src="<?php bloginfo('template_directory');?>/assets/images/logo-sojs.png" class="logo-sojs"></a>
			</div>
			<div class="columns small-30 large-9">
				<div class="upcoming">
					<p class="title">Binnenkort in <span>Elektra</span></p>
					<ul>
						<?php 
							$args = array( 'post_type' => 'future_events', 'posts_per_page' => 3 );
							$the_query = new WP_Query( $args );

							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post();
									include('elektraEvent-block.php');
								endwhile;
							else :
								_e( 'Er zijn geen evenementen gevonden.' );
							endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
   
    <script src="<?php bloginfo('template_directory');?>/js/vendor.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/script.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script><!-- TODO: analytics --></script>
  </body>
</html>