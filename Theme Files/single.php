<?php 

get_header();

?>

	<?php if (have_posts()) {
		while (have_posts()) : the_post(); 	 ?>
			
			<article class="the-article">
					<figure>
						<?php the_post_thumbnail('single-thumb'); ?>
						<figcaption>
							<h1><?php echo the_title(); ?></h1>
							<p>by <?php the_author(); ?></p>
						</figcaption>
					</figure>
					<div class="body">
						<p><?php the_content(); ?></p>
					</div>
					<div class="post-info">
						<h4>Post Information</h4>
						<div class="category">
							<p>in
								<!-- <a href="">Anime</a>
								<a href="">Movie</a>
								<a href="">Books</a>
								<a href="">Comic</a> -->
								<?php echo get_the_category_list(','); ?>
							</p>
						</div>
						<div class="comments">
							<p> With <a href=""><?php echo comments_number(); ?></a> &nbsp;&nbsp;</p>
						</div>
						<div class="date">
							<p> and Wrote on <a href=""><?php echo get_the_time('l F j , Y'); ?></a> </p>
						</div>
						<div class="social">
						<p>Share</p>
						
<a href=""><img src="<?php echo get_template_directory_uri() . '/imgs/social/pintrest.png' ?>" alt="Pintrest"></a>
<a href=""><img src="<?php echo get_template_directory_uri() . '/imgs/social/facebook.png'?>" alt="Facebook"></a>
<a href=""><img src="<?php echo get_template_directory_uri() . '/imgs/social/dribbble.png'?>" alt="Dribbble"></a>
<a href=""><img src="<?php echo get_template_directory_uri() . '/imgs/social/telegram.png'?>" alt="Telegram"></a>
						</div>
					</div>
					
				</article>
				<?php 
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