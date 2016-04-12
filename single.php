<?php 

get_header();

?>

	<?php if (have_posts()) {
		while (have_posts()) : the_post(); 	 
			
			get_template_part('template-parts/article' );
				

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
				
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