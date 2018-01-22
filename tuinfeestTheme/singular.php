<?php get_header();?>

   <article class="container-article">
  <div class="container">
    <div class="row">
      <div class="columns small-30 large-20">
        <h1 class="header-title"><? the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="content-container">
        <div class="columns small-30 large-20">
          <div class="content">
			<?php
				$id = get_the_id();
				$post = get_post($id);
				$content = apply_filters('the_content', $post->post_content);
				echo $content;  
			?>
          </div>
        </div>
        <div class="columns small-30 large-10">
          <figure class="guitar"></figure>
        </div>
      </div>
    </div>
  </div>
</article>

<?php get_footer();?>
