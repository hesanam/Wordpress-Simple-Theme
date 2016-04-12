<article class="post">
	<figure><?php the_post_thumbnail('main-page-thumb' ); ?>
	<figcaption>
		<p>Wrote on <?php echo get_the_time( 'd/ m/ y '); ?></p>
	</figcaption>
	</figure>
	<div class="text">
		<a href="<?php the_permalink(); ?>"><h1><?php echo the_title(); ?></h1></a>
		<p><?php echo get_the_excerpt(); ?></p>
	</div>
	<div class="read-more">
		<a href="<?php the_permalink(); ?>">Read more&nbsp;&nbsp;&#10095;</a>
	</div>
	<div class="author">
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a>
	</div>
</article>