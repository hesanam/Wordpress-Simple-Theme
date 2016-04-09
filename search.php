<?php 

get_header();

?>
	<h2>
		Search result for: <?php the_search_query(); ?>
	</h2>
	<?php if (have_posts()) {
		while (have_posts()) : the_post(); 	 ?>
			
			<article class="post">
				<figure><?php the_post_thumbnail('main-page-thumb' ); ?>
				<figcaption>
					<p>Wrote on <?php echo get_the_time( 'd/ m/ y '); ?></p>
				</figcaption>
				</figure>
				<div class="text">
					<a href="<?php the_permalink(); ?>"><h1><?php echo the_title(); ?></h1></a>
					<p><?php the_excerpt(); ?></p>
				</div>
				<div class="read-more">
					<a href="<?php the_permalink(); ?>">Read more&nbsp;&nbsp;&#10095;</a>
				</div>
				<div class="author">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a>
				</div>
			</article>

		<?php endwhile; ?>
	<?php } else {?>
		<article class="post">
			<h2>No post yet</h2>
		</article>
	<?php } ?>
		</main>
	</div>
	<!-- Sidebar content contains widgets,search box and useroptions. -->
		<div class="sidebar-content">
			<aside>
				<?php dynamic_sidebar('rightsidebar'); ?>
			</aside>
		</div>
	</div>
<?php
get_footer();


 ?>