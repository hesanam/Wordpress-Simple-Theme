<?php 

get_header();

?>
	<h2>
		
		<?php 
			if (is_category()) {
				single_cat_title( "Wrote in: " );
			} elseif (is_author()) {
				echo get_the_author() . " wrote : " ;
			} elseif (is_tag()) {
				single_tag_title('Tagged with: ' );
			} elseif (is_year()) {
				echo "In the year of " . get_the_date('Y');;
			} elseif (is_month()) {
				echo "In the month " . get_the_date('F, Y');;
			} elseif (is_day()) {
				echo "In the day " . get_the_date('l F j' );;
			} else {
				echo "Archive:";
			}
		 ?>

	</h2>
	<?php if (have_posts()) {
		while (have_posts()) : the_post(); 	 
			
			get_template_part('template-parts/content' ,get_post_format());

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