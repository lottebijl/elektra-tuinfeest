<?php
	$genre = get_post_meta( get_the_ID(), 'meta-box-genre' );
	$image = get_field('band_afbeelding');
?>
<div class="columns small-30 large-10">
	<a class="artist-block" href="<?php the_permalink(); ?>">
		<figure style="background-image:url('<?php echo $image ?>')"></figure>
		<div class="artist-details">
			<div class="artist">
				<h3 class="name"><?php the_title(); ?> <span><?the_field('afkorting_land')?></span></h3>
				<h6 class="genre"><?the_field('genre')?></h6>
			</div>
		</div>
	</a>
</div>
<?php wp_reset_postdata(); ?>