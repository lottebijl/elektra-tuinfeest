<div class="columns small-30 large-10">
	<div class="news-block">
		<div class="news-details">
	 		<?php if ( has_post_thumbnail() ) : ?>
		 		<figure><img src="<?php the_post_thumbnail_url(); ?>"></figure>
		 	<?php endif; ?>
			<h3 class="title"><?php the_title(); ?></h3>
			<h5 class="excerpt">
				<?php the_excerpt(); ?>
			</h5>
			<a href="<?php the_permalink(); ?>" class="btn btn-more">lees meer<i class="icon icon-arrow"></i></a>
		</div>
	</div>
</div>