<?php get_header('aboutus' ); ?>




<?php if (have_posts()) { 
		while (have_posts()) : the_post(); ?>
		<article class="the-article">
			<div class="body">
				<a href="<?php echo home_url(); ?>" class="return-home">Return Home</a>
				<p><?php the_content(); ?></p>
				<a href="<?php echo home_url(); ?>" class="return-home">Return Home</a>
			</div>
		</article>
  <?php endwhile; ?>
<?php } else { ?>
	<article class="post">
		<h1>Sorry, No content yet.</h1>
	</article>
<?php }?>




<?php get_footer('aboutus' ); ?>