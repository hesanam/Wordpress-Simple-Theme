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

	add_theme_support('post-formats',array('link','aside','gallery','quote','image','status','video','audio','chat','link') );
}

add_action('after_setup_theme','themeSetup');

function customExcerptLenght() {
	return 17;
}

add_filter('excerpt_length','customExcerptLenght' );
  
function excerpt_more( $more ) {
	return '...';
}

add_filter( 'excerpt_more', 'excerpt_more' );


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


function customize_register($wp_customize){


	$wp_customize->	add_panel('header_panel',array(
		'title'		=>	__('Header','ThemeTut'),
		'priority'	=>	60,
	));
	$wp_customize->	add_panel('footer_panel',array(
		'title'		=>	__('Footer','ThemeTut'),
		'priority'	=>	90,
	));
	





	$wp_customize->	add_setting('simple_theme_link_colors',array(
		'default'	=>	'#fff',
		'transport'	=>	'refresh',
	));
	$wp_customize->	add_setting('simple_theme_button_colors',array(
		'default'	=>	'#000',
		'transport'	=>	'refresh',
	));
	$wp_customize-> add_setting('simple_theme_menu_bg',array(
		'default'	=>	'#000',
		'transport'	=>	'refresh',
	));
	$wp_customize-> add_setting('simple_theme_menu_link_color',array(
		'default'	=>	'#fff',
		'transport'	=>	'refresh',
	));
	$wp_customize-> add_setting('simple_theme_footer_bg',array(
		'default'	=>	'#000',
		'transport'	=>	'refresh',
	));




	$wp_customize-> add_section('header_change_colors',array(
		'title'		=>	__('Header Color Options','ThemeTut'),
		'priority'	=>	30,
		'panel'		=>	'header_panel',
	));
	$wp_customize-> add_section('footer_change_colors',array(
		'title'		=>	__('Footer Color Options','ThemeTut'),
		'priority'	=>	30,
		'panel'		=>	'footer_panel',
	));



	$wp_customize->	add_control(new WP_Customize_Color_Control($wp_customize,'simple_theme_link_colors',array(
		'label'		=>	__('Link Colors','ThemeTut'),
		'section'	=>	'header_change_colors',
		'settings'	=>	'simple_theme_link_colors',
	)));
	$wp_customize->	add_control(new WP_Customize_Color_Control($wp_customize,'simple_theme_button_colors',array(
		'label'		=>	__('Button Colors','ThemeTut'),
		'section'	=>	'header_change_colors',
		'settings'	=>	'simple_theme_button_colors',
	)));
	$wp_customize->	add_control(new WP_Customize_Color_Control($wp_customize,'simple_theme_menu_bg',array(
		'label'		=>	__('Top Menu Background','ThemeTut'),
		'section'	=>	'header_change_colors',
		'settings'	=>	'simple_theme_menu_bg',
	)));
	$wp_customize->	add_control(new WP_Customize_Color_Control($wp_customize,'simple_theme_menu_link_color',array(
		'label'		=>	__('Top Menu Link Color','ThemeTut'),
		'section'	=>	'header_change_colors',
		'settings'	=>	'simple_theme_menu_link_color',
	)));
	$wp_customize->	add_control(new WP_Customize_Color_Control($wp_customize,'simple_theme_footer_bg',array(
		'label'		=>	__('Footer Background','ThemeTut'),
		'section'	=>	'footer_change_colors',
		'settings'	=>	'simple_theme_footer_bg',
	)));
}
add_action('customize_register','customize_register');


function customized_css(){ ?>
	<style type="text/css">
		header ul li.current-menu-item{
			background: <?php echo get_theme_mod('simple_theme_button_colors') ;?>;
			border: 1px solid <?php echo get_theme_mod('simple_theme_button_colors') ;?>;
		}
		header ul li.current-menu-item{
			color: <?php echo  get_theme_mod('simple_theme_link_colors') ;?>;
		}
		.menu-category{
			background: <?php echo get_theme_mod('simple_theme_menu_bg') ;?>
		}
		.menu-category nav ul li,
		.menu-category h4{
			color:<?php echo get_theme_mod('simple_theme_menu_link_color'); ?>;
		}
		footer{
			background: <?php echo get_theme_mod('simple_theme_footer_bg'); ?>;
		}
	</style>
<?php }
add_action('wp_head','customized_css');