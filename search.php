<?php 

get_header();

?>
	<h2>
		Search result for: <?php the_search_query(); ?>
	</h2>
	<?php if (have_posts()) {
		while (have_posts()) : the_post(); 	 
			
			get_template_part('/template-parts/content' ,get_post_format());

		endwhile; ?>
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