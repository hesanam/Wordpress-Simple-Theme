<div class="search-box">
	<form method="get" action="<?php echo home_url() ; ?>/">
		<input type="search" value="<?php echo esc_html($s, 1); ?>" name="s" id="search-box"/ placeholder="<?php the_search_query(); ?>">
		<input type="submit" value="&#128270;" id="search-btn">
	</form>
</div>