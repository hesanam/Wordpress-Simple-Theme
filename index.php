<?php 

get_header();

?>

	<?php if (have_posts()) {
		while (have_posts()) : the_post(); 	 
			
			get_template_part('/template-parts/content',get_post_format()); 

		endwhile; ?>
		<?php 
		$pagination = array(
			'mid_size'				=>	'3',
			'screen_reader_text'	=>	' '
			);
			the_posts_pagination( $pagination ); ?>
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