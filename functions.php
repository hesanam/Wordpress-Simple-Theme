<?php 


function getThemeStyles(){
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css');
}
	

add_action( 'wp_enqueue_scripts', 'getThemeStyles');


function theme_queue_js(){
if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )
  wp_enqueue_script( 'comment-reply' );
}
add_action('wp_print_scripts', 'theme_queue_js');


function themeSetup(){

	register_nav_menus( array(
		'top_header'		=> 'Top Header Menu',
		'cat_navigation'	=> 'Category Navigation',
		'footer_nav'		=> 'Footer Navigation'
	 ));

	add_theme_support('post-thumbnails');
	
	add_image_size('main-page-thumb', 220 , 150 , true);
	add_image_size('single-thumb', 626 , 380 , true);

	// register_widget('widget');
}

add_action('after_setup_theme','themeSetup');


function widgetSupp(){

	   	$rightsidebar = array(
	   		'name'          => __( 'Right Sidebar Widget'),
	   		'id'            => 'rightsidebar',
	   		'description'   => 'Right side Widget',
	   		'before_widget' => '<div class="widget">',
	   		'after_widget'  => '</div>',
	   		'before_title'  => '<h2>',
	   		'after_title'   => '</h2>'
	   	);
	   
	   	register_sidebar( $rightsidebar );
	   
	   	$footer1 = array(
	   		'name'          => __( 'Footer Widget 1'),
	   		'id'            => 'footer1',
	   		'description'   => 'footer widgets',
	   		'before_widget' => '<div class="footer-widgets">',
	   		'after_widget'  => '</div>',
	   		'before_title'  => '<h4>',
	   		'after_title'   => '</h4>'
	   	);
	   
	   	register_sidebar( $footer1 );
	   
	   	$footer2 = array(
	   		'name'          => __( 'Footer Widget 2'),
	   		'id'            => 'footer2',
	   		'description'   => 'footer widgets',
	   		'before_widget' => '<div class="footer-widgets">',
	   		'after_widget'  => '</div>',
	   		'before_title'  => '<h4>',
	   		'after_title'   => '</h4>'
	   	);
	   
	   	register_sidebar( $footer2 );

	   		$footer3 = array(
	   		'name'          => __( 'Footer Widget 3'),
	   		'id'            => 'footer3',
	   		'description'   => 'footer widgets',
	   		'before_widget' => '<div class="footer-widgets">',
	   		'after_widget'  => '</div>',
	   		'before_title'  => '<h4>',
	   		'after_title'   => '</h4>'
	   	);
	   
	   	register_sidebar( $footer3 );
	
}

add_action('widgets_init' , 'widgetSupp');