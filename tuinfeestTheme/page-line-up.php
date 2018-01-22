<?php get_header();?>
<?php if ( is_front_page() && is_home() ) :
	require_once('header-home.php');
endif; ?>

<section class="lineup">
  <div class="container">
    <div class="row">
      <div class="columns small-30 large-10">
        <h1 class="header-title">Line-up</h1>
      </div>
    </div>
    <div class="row">
		<?php
			$args = array( 'post_type' => 'bands', 'meta_key' => 'in_coming_line_up', 'meta_value' => 1 );
			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
					include('band-block.php');
				endwhile;
			else :
				_e( 'Er zijn geen bands gevonden.' );
			endif;
		?>
    </div>
  </div>
</section>




<?php get_footer();?>

