	<div class="clearfix"></div>
	<!-- Footer contains contact info and another navigation in order to be a bit UX friendly -->
	<footer>
		<div class="widgets clearfix">
			<?php if(is_active_sidebar('footer1')) {
				dynamic_sidebar('footer1' );
			}; 
			?>
			<?php if(is_active_sidebar('footer2')) {
				dynamic_sidebar('footer2' );
			}; 
			?>
			<?php if(is_active_sidebar('footer3')) {
				dynamic_sidebar('footer3' );
			}; 
			?>
			<?php if(is_active_sidebar('footer4')) {
				dynamic_sidebar('footer4' );
			}; 
			?>
		</div>

		<!-- Some #@!$#@ for copyright and craps. -->
		<p class="copyright">&copy;Wordpress theme designed and coded by <a href="">Hesan Aminiloo</a>.</p>
		
	</footer>

</div> 
<!-- / Main Container -->
	<?php wp_footer(); ?>
</body>
</html>