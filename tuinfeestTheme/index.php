<?php get_header();?>
<?php if ( is_front_page() && is_home() ) :
	require_once('header-home.php');
endif; ?>
 
 <section class="lineup lineup--home">
	<div class="container">
		<div class="row">
			<figure class="guitar"></figure>
			<?php 
				$args = array( 'post_type' => 'bands', 'meta_key' => 'in_coming_line_up', 'meta_value' => 1, 'posts_per_page' => 6 );
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
		<div class="row">
			<div class="columns small-30">
				<a href="/line-up" class="btn btn-hollow">bekijk volledige line-up</a>
			</div>
		</div>
	</div>
</section>
<section class="highlighted-news">
	<div class="container">
		<div class="row">
		<?php 
			$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
			$the_query = new WP_Query( $args ); 

			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) : $the_query->the_post();
					include('news-block.php');
				endwhile;
			else :
				_e( 'Sorry, no posts matched your criteria.' );
			endif;
		?>
		</div>
	</div>
</section>

<?php get_footer();?>

