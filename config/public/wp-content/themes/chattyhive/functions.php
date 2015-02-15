<?php

/*-----------------------------------------------------------------------------------*/
/*	Options Framework
/*-----------------------------------------------------------------------------------*/


// You can mess with these 2 if you wish.

define('OPTIONS', 'of_options'); // Name of the database row where your options are stored

/* Options Framework */
require_once('admin/index.php');


/*-----------------------------------------------------------------------------------*/
/*	Theme Setup
/*-----------------------------------------------------------------------------------*/

function ft_setup() {
	// Add language supports.
	load_theme_textdomain('ft');

	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'related', 430, 344, true );
	add_image_size( 'sidebar', 100, 80, true );

	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary_navigation' => __('Primary Navigation', 'ft'),
		'footer_navigation' => __('Footer Navigation', 'ft')
	));	
	
	// Functions

	include_once('lib/theme-functions/theme-pagination.php');
	include_once('lib/theme-functions/breadcrumbs.php');
	
	// Widgets

	include_once('lib/theme-widgets/widget-ads.php');
	include_once('lib/theme-widgets/widget-flickrphotos.php');
	include_once('lib/theme-widgets/widget-popularposts.php');
	include_once('lib/theme-widgets/widget-recentposts.php');
	include_once('lib/theme-widgets/widget-randomposts.php');
	include_once('lib/theme-widgets/widget-newsletter.php');
}
add_action('after_setup_theme', 'ft_setup');


/*-----------------------------------------------------------------------------------*/
/*	Content Width
/*-----------------------------------------------------------------------------------*/

$content_width = 720;

if ( is_page_template('page-full.php') ) $content_width = 1220;


/*-----------------------------------------------------------------------------------*/
/*	Limit Words
/*-----------------------------------------------------------------------------------*/

function limit_words($string, $word_limit) {
		 
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit)); 
}


/*-----------------------------------------------------------------------------------*/
/*	Theme Javascripts
/*-----------------------------------------------------------------------------------*/

function ft_theme_js() {

	if(!is_admin()) {
	
		wp_register_script( 'jpanel', get_template_directory_uri() . '/js/jpanelmenu.js', array('jquery'), '1.3.0', true );
		wp_register_script( 'fitvids', get_template_directory_uri() . '/js/fitvids.js', array('jquery'), '1.0.0', true );
		wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', false );
		wp_register_script( 'header_shrink', get_template_directory_uri() . '/js/header_shrink.js', array('jquery'), '1.0.0', false );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jpanel' );
		wp_enqueue_script( 'header_shrink' );
		wp_enqueue_script( 'fitvids' );
		wp_enqueue_script( 'custom' );
		
		if ( is_singular() ) {
			wp_enqueue_script( 'comment-reply' );
		}
 
		// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
		wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );


	}

}

add_action('wp_enqueue_scripts', 'ft_theme_js');


/*-----------------------------------------------------------------------------------*/
/*	Theme Styles
/*-----------------------------------------------------------------------------------*/

function ft_theme_style()  {  

	wp_register_style( 'default-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' ); 
	wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Bitter:400,700', array(), null ); 
	wp_register_style( 'fontawesome-style', get_template_directory_uri() . '/css/font-awesome.css', array(), '3.2', 'all' );
	wp_register_style( 'typography-style', get_template_directory_uri() . '/css/typography.css', array(), '1.0', 'all' ); 
	wp_register_style( 'web-font-style', get_template_directory_uri() . '/css/web-font.css', array(), '1.0', 'all' ); 

	wp_enqueue_style( 'default-style' );
	wp_enqueue_style( 'google-fonts' );
	wp_enqueue_style( 'fontawesome-style' );  
	wp_enqueue_style( 'typography-style' );  
	wp_enqueue_style( 'web-font-style' );

}  
add_action( 'wp_enqueue_scripts', 'ft_theme_style' );  


/*-----------------------------------------------------------------------------------*/
/*	Custom Style
/*-----------------------------------------------------------------------------------*/

function ft_custom_color() {
	get_template_part('header', 'style');
}
add_action('wp_head', 'ft_custom_color');

function ft_custom_css() {
	global $smof_data;
	if(!empty($smof_data['ft_custom_css'])) {
		echo'<style type="text/css">' .$smof_data['ft_custom_css']. '</style>';
	}
}
add_action('wp_head', 'ft_custom_css');


/*-----------------------------------------------------------------------------------*/
/*	Widgets Register
/*-----------------------------------------------------------------------------------*/

if(function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Left Sidebar Widgets',
		'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="widget-section">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Right Sidebar Widgets',
		'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="widget-section">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Widgets',
		'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="widget-section">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

}


/*-----------------------------------------------------------------------------------*/
/*	Limit Title
/*-----------------------------------------------------------------------------------*/

function the_title_limit($length, $replacer = '...') {
	$string = the_title('','',FALSE);
	if(mb_strlen($string) > $length)
	$string = (preg_match('/^(.*)\W.*$/', mb_substr($string, 0, $length+1), $matches) ? $matches[1] : mb_substr($string, 0, $length)) . $replacer;
	echo $string;
}


/*-----------------------------------------------------------------------------------*/
/*	Browser Classes
/*-----------------------------------------------------------------------------------*/

add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if($is_lynx) $classes[] = 'lynx';
    elseif($is_gecko) $classes[] = 'gecko';
    elseif($is_opera) $classes[] = 'opera';
    elseif($is_NS4) $classes[] = 'ns4';
    elseif($is_safari) $classes[] = 'safari';
    elseif($is_chrome) $classes[] = 'chrome';
    elseif($is_IE) $classes[] = 'ie';
    else $classes[] = 'unknown';
    if($is_iphone) $classes[] = 'iphone';
    return $classes;
}


/*-----------------------------------------------------------------------------------*/
/*	Class to Menus
/*-----------------------------------------------------------------------------------*/

add_filter('nav_menu_css_class', 'dt_add_ancestor_class', 2, 10);

function dt_add_ancestor_class($classlist, $item){
	global $wp_query, $wpdb;
	//get the ID of the object, to which menu item points
	$id = get_post_meta($item->ID, '_menu_item_object_id', true);
	//get first menu item that is a child of that object
	$children = $wpdb->get_var('SELECT post_id FROM '.$wpdb->postmeta.' WHERE meta_key like "_menu_item_menu_item_parent" AND meta_value='.$item->ID.' LIMIT 1');
	//if there is at least one item, then $children variable will contain it's ID (which is of course more than 0)
	if($children>0)
		//in that case - add the CSS class
		$classlist[]='menu-item-ancestor';
	//return class list
	return $classlist;
}


/*-----------------------------------------------------------------------------------*/
/* Update Theme
/*-----------------------------------------------------------------------------------*/

require_once('notifier/theme-update-notifier.php');


/*-----------------------------------------------------------------------------------*/
/* Pinterest
/*-----------------------------------------------------------------------------------*/

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

/*-----------------------------------------------------------------------------------*/
/* Prevent scroll when clicking in Continue Reading
/*-----------------------------------------------------------------------------------*/

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
