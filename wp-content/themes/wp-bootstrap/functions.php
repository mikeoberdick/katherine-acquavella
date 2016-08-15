<?php

function theme_styles() {
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css?family=Montserrat');
	wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css?family=Fjalla+One');
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
	global $wp_scripts;
		wp_register_script( 'html5-shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
		wp_register_script( 'respond-js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data( 'html5-shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond-js', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery', 'bootstrap-js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-navigation'	=> __( 'Header Navigation ')
			)
		);
}
add_action( 'init', 'register_theme_menus' );

// Add the ACF options page for the header and footer content
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'general-theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header ',
		'parent_slug'	=> 'general-theme-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'general-theme-settings',
	));
	
}

//Add theme's widget areas
add_action( 'widgets_init', 'theme_widgets' );
function theme_widgets() {
    register_sidebar( array (
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
    )
    	);
}





?>