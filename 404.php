<?php get_header('aboutus'); ?>
<!-- Main Container contains all of the page content and it used for Responsiveness of the page. -->
<div class="container clearfix">
	<div class="not-found">
		<img src="<?php echo get_template_directory_uri(). '/imgs/Brain.png';?>" alt="">
		<h3>I am REALLY Sorry ...</h3>
		<h1>The page you're looking for doesn't exist bro ...</h1>
		<br>
		<a href="<?php echo home_url(); ?>" class="return-home">Return Home</a>
		<br>
		<br>
		
	</div>
</div> 
<!-- / Main Container -->

<?php get_footer('aboutus' ); ?>


