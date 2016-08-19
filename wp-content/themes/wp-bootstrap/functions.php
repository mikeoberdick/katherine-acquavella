<?php

function theme_styles() {
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css?family=Montserrat');
	wp_enqueue_style( 'oswald-font', 'https://fonts.googleapis.com/css?family=Fjalla+One');
	wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css?family=Roboto');
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

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-navigation'	=> 'Header Navigation'
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

//The ACF widget 
class ACF_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
    parent::__construct(
      'acf_widget', // Base ID
      'Work Logos', // Name
      array( 'description' => 'Display your work experience.', ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    if ( !empty($instance['title']) ) {
      echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
    }

	$wid = 'widget_' . $args["widget_id"];

	if( have_rows('job', $wid) ): ?>
	<div class="jobs">
	    <?php while ( have_rows('job', $wid) ) : the_row(); ?>
	        <a href = "<?php the_sub_field("website"); ?>" alt = "<?php the_sub_field("name"); ?>"><img src="<?php the_sub_field("logo"); ?>" /></a>        
	    <?php endwhile; ?>
	</div>
	<?php endif;

	    echo $args['after_widget'];
	  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form( $instance ) {
    if ( isset($instance['title']) ) {
      $title = $instance['title'];
    }
    else {
      $title = __( 'New title', 'text_domain' );
    }
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <?php
  }

//Sanitize widget form values as they are saved.

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
  }

} // class ACF_Widget

// register ACF_Widget widget
add_action( 'widgets_init', function(){
  register_widget( 'ACF_Widget' );
});

//Create the Work Custom Post Type
add_action( 'init', 'work_post_type', 0 );
function work_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => 'Work Samples',
		'singular_name'       => 'Work Sample',
		'menu_name'           => 'Work Samples',
		'parent_item_colon'   => 'Parent Work Sample',
		'all_items'           => 'All Work Samples',
		'view_item'           => 'View Work Sample',
		'add_new_item'        => 'Add New Work Sample',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Work Sample',
		'update_item'         => 'Update Work Sample',
		'search_items'        => 'Search Work Samples',
		'not_found'           => 'Not Found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	
// Set other options for Custom Post Type
	$args = array(
		'label'               => 'Work Sample',
		'description'         => 'Work Samples',
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'media-outlet, sport' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'ka-work', $args );

}

//Create the Media Outlet Taxonomy
add_action( 'init', 'create_media_outlet_taxonomy' );
function create_media_outlet_taxonomy() {
	register_taxonomy(
		'media-outlet',
		'ka-work',
		array(
			'label' => 'Media Outlet',
			'rewrite' => array( 'slug' => 'media-outlet' ),
			'hierarchical' => true,
		)
	);
}

//Create the Sport Taxonomy
add_action( 'init', 'create_sport_taxonomy' );
function create_sport_taxonomy() {
	register_taxonomy(
		'sport',
		'ka-work',
		array(
			'label' => 'Sports',
			'rewrite' => array( 'slug' => 'sport' ),
			'hierarchical' => false,
		)
	);
}










?>