<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

//Custom changes
function wpse_remove_edit_post_link( $link ) {
return '';
}
add_filter('edit_post_link', 'wpse_remove_edit_post_link');
add_theme_support( 'custom-header' );
$args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'    => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

register_sidebar( array(
  'name' => __( 'Header Widgets Area' ),
  'id' => 'sidebar-header',
  'description' => __( 'Header widgets area for my theme.' ,  'evanjfarmer' ),
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
) );

if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'name' => 'Extra Header Widget Area',
	'id' => 'extra-widget-area',
	'description' => 'Extra widget area after the header',
	'before_widget' => '<div class="widget my-extra-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
}

 function evanjfarmer_setup() {
     register_nav_menu( 'primary-res-navigation', __( 'Primary MobRes Navigation', 'evanjfarmer' ) );
 }
 add_action( 'after_setup_theme', 'evanjfarmer_setup' );
 $defaults = array(
	'default-color'          => 'blue',
	'default-image'          => 'https://www.evanjfarmer.dev/wp-content/uploads/2016/08/grid.jpg'
	);
 add_theme_support( 'custom-background' );
 