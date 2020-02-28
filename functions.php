<?php
function nandine_wordpress(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('slider');
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_image_size( 'slider-thumb', 920, 285, true );
	add_image_size( 'client-thumb', 170, 180, true );
	add_image_size( 'testimonial-thumb', 150, 150, true );
	add_image_size( 'portfolio-thumb', 360, 234, true );
	
	// Option Panel Include
	require_once('lib/redux-framework/ReduxCore/framework.php');
	require_once('lib/redux-framework/sample/config.php');
	require_once('lib/redux-vendor-support-master/redux-vendor-support.php');
	require_once('lib/cmb/init.php');
	


	require_once get_template_directory().'/nandine-walker.php';
	
	register_nav_menu('mainmenu', __('Main Menu','nandine'));
	
// CMB2 Portfolio Link field
function theme_portfolio_field(){

	$portfolio = new_cmb2_box(
		array(
			'id'=>'portfolio_link',
			'title'=>'Portfolio Section',
			'object_types'=> array('portfolio'),
		));

	$portfolio->add_field(array(
		'id'=>'g_link',
		'name'=>'Portfolio Text',		
		'type'=>'text',
		'desc'=>'you can set your portfolio title from here.',
		));
}
add_action('cmb2_admin_init', 'theme_portfolio_field');




	
	function default_menu(){
		echo '<ul class="navbar-nav nav">';
		echo '<li class="nav-item"><a class="nav-link" href="'.esc_url(home_url()).'">Home</a></li>';
		echo '</ul>';
	}
	
	
	load_theme_textdomain('nandine', get_template_directory_uri().'/languages');

	register_post_type('slider', [
		'public'     					=> true,
		'labels' 						=> [
			'name' 						=> 'Nandine Slider',
			'singular_name' 			=> __( 'Slider' ),
			'add_new' 					=> 'Add Slider',
			'add_new_item'				=> __( 'Add New Slider' ),
			'edit_item' 				=> __( 'Edit Slider' ),
			'all_items' 				=> 'All  Slider',
			'add_new_item' 				=> 'Add New Slider',
			'new_item' 					=> __( 'New Slider' ),
			'view_item' 				=> __( 'View Slider' ),
			'not_found' 				=> __( 'Sorry, we couldn\'t find the Slider you are looking for.' ),
			'set_featured_image'		=> 'Set Slider Image',
			'featured_image'			=> 'Slider Image',
			'remove_featured_image'		=> 'Remove Slider Image Easy',
		],
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'menu_position' => 5,
		'supports'=>array('title','editor'),
		'menu_icon' => 'dashicons-smiley',
		'has_archive' => true,
		'hierarchical' => false, 
		'capability_type' => 'page',
		'rewrite' => array( 'slug' => 'Slider' ),

	]);			
	
	
	register_post_type('services', [
		'public'     					=> true,
		'labels' 						=> [
			'name' 						=> 'Nandine Services',
			'singular_name' 			=> __( 'Service' ),
			'add_new' 					=> 'Add Service',
			'add_new_item'				=> __( 'Add New Service' ),
			'edit_item' 				=> __( 'Edit Service' ),
			'all_items' 				=> 'All  Service',
			'add_new_item' 				=> 'Add New Service',
			'new_item' 					=> __( 'New Service' ),
			'view_item' 				=> __( 'View Service' ),
			'not_found' 				=> __( 'Sorry, we couldn\'t find the Service you are looking for.' ),
			'set_featured_image'		=> 'Set Service Image',
			'featured_image'			=> 'Service Image',
			'remove_featured_image'		=> 'Remove Service Image Easy',
		],
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'menu_position' => 5,
		'supports'=>array('title','editor','custom-fields'),
		'menu_icon' => 'dashicons-smiley',
		'has_archive' => true,
		'hierarchical' => false, 
		'capability_type' => 'page',
		'rewrite' => array( 'slug' => 'Service' ),

	]);	

	register_post_type('coffee', [
		'public'     					=> true,
		'labels' 						=> [
			'name' 						=> 'Nandine Coffee',
			'singular_name' 			=> __( 'Coffee' ),
			'add_new' 					=> 'Add Coffee',
			'add_new_item'				=> __( 'Add New Coffee' ),
			'edit_item' 				=> __( 'Edit Coffee' ),
			'all_items' 				=> 'All  Coffee',
			'add_new_item' 				=> 'Add New Coffee',
			'new_item' 					=> __( 'New Coffee' ),
			'view_item' 				=> __( 'View Coffee' ),
			'not_found' 				=> __( 'Sorry, we couldn\'t find the Coffee you are looking for.' ),
			'set_featured_image'		=> 'Set Coffee Image',
			'featured_image'			=> 'Coffee Image',
			'remove_featured_image'		=> 'Remove Coffee Image Easy',
		],
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'menu_position' => 5,
		'supports'=>array('title','editor','custom-fields'),
		'menu_icon' => 'dashicons-smiley',
		'has_archive' => true,
		'hierarchical' => false, 
		'capability_type' => 'page',
		'rewrite' => array( 'slug' => 'Service' ),

	]);	
	register_post_type('our-team', [
		'public'     					=> true,
		'labels' 						=> [
			'name' 						=> 'Nandine Team',
			'singular_name' 			=> __( 'Team' ),
			'add_new' 					=> 'Add Team',
			'add_new_item'				=> __( 'Add New Team' ),
			'edit_item' 				=> __( 'Edit Team' ),
			'all_items' 				=> 'All Team',
			'add_new_item' 				=> 'Add New Team',
			'new_item' 					=> __( 'New Team' ),
			'view_item' 				=> __( 'View Team' ),
			'not_found' 				=> __( 'Sorry, we couldn\'t find the Team you are looking for.' ),
			'set_featured_image'		=> 'Set Team Image',
			'featured_image'			=> 'Team Image',
			'remove_featured_image'		=> 'Remove Team Image Easy',
		],
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'menu_position' => 5,
		'supports'=>array('title','editor','custom-fields', 'thumbnail'),
		'menu_icon' => 'dashicons-smiley',
		'has_archive' => true,
		'hierarchical' => false, 
		'capability_type' => 'page',
		'rewrite' => array( 'slug' => 'team' ),

	]);	
	
	
	register_post_type('testimonial', [
		'public'     					=> true,
		'labels' 						=> [
			'name' 						=> 'Nandine Testimonial',
			'singular_name' 			=> __( 'Testimonial' ),
			'add_new' 					=> 'Add Testimonial',
			'add_new_item'				=> __( 'Add New Testimonial' ),
			'edit_item' 				=> __( 'Edit Testimonial' ),
			'all_items' 				=> 'All Testimonial',
			'add_new_item' 				=> 'Add New Testimonial',
			'new_item' 					=> __( 'New Testimonial' ),
			'view_item' 				=> __( 'View Testimonial' ),
			'not_found' 				=> __( 'Sorry, we couldn\'t find the Testimonial you are looking for.' ),
			'set_featured_image'		=> 'Set Testimonial Image',
			'featured_image'			=> 'Testimonial Image',
			'remove_featured_image'		=> 'Remove Testimonial Image Easy',
		],
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'menu_position' => 5,
		'supports'=>array('title','editor','custom-fields', 'thumbnail'),
		'menu_icon' => 'dashicons-smiley',
		'has_archive' => true,
		'hierarchical' => false, 
		'capability_type' => 'page',
		'rewrite' => array( 'slug' => 'team' ),

	]);	


/* ----------------------------------------------------- */
/* Register Filter Post */
/* ----------------------------------------------------- */
	register_post_type('portfolio', [
		'public'     					=> true,
		'labels' 						=> [
			'name' 						=> 'Nandine Portfolio',
			'add_new' 					=> 'Add Portfolio',
			'all_items' 				=> 'All Portfolio',
			'add_new_item' 				=> 'Add New Portfolio',
			'set_featured_image'		=> 'Set Portfolio Image',
			'featured_image'			=> 'Portfolio Image',
			'remove_featured_image'		=> 'Remove Portfolio Image Easy',
		],
		'supports' 						=> ['title', 'editor', 'thumbnail', ],
		'menu_icon'						=> 'dashicons-smiley',
		'menu_position'					=> 5,

	]);	
	// Register Taxonomy Category.
	register_taxonomy('porfolio_category', 'portfolio', array(
		'public'					=>true,
		'hierarchal'				=>true,
		'labels'					=> array(
			'name'					=> 'Portfolio Category',
			'hierarchical'			=> false,
			'description' 			=> 'Display your works by filters',
			'supports' 				=> array( 'title', 'custom-fields', 'thumbnail' ),
			'public' 				=> true,
			'show_ui' 				=> true,
			'show_in_menu' 			=> true,
			'show_in_nav_menus' 	=> false,
			'publicly_queryable' 	=> true,
			'exclude_from_search' 	=> false,
			'has_archive' 			=> true,
			'query_var' 			=> true,
			'can_export' 			=> true,
			'rewrite' 				=> true,
			'capability_type' => 'portfolio'
			))
	);		
/* ----------------------------------------------------- */
/* Filter Taxonomy */
/* ----------------------------------------------------- */

/*
* Adds terms from a custom taxonomy to post_class
*/
add_filter( 'post_class', 'theme_t_wp_taxonomy_post_class', 10, 3 );
	function theme_t_wp_taxonomy_post_class( $classes, $class, $ID ) {
	$taxonomy = 'porfolio_category';
	$terms = get_the_terms( (int) $ID, $taxonomy );
	if( !empty( $terms ) ) {
		foreach( (array) $terms as $order => $term ) {
			if( !in_array( $term->slug, $classes ) ) {
			$classes[] = $term->slug;
			}
		}
	}
	return $classes;
	}
			
	
	
	
	
	
	
	
}; 
add_action('after_setup_theme', 'nandine_wordpress');




function theme_enquque_script(){
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_enquque_script');


	


//Register Style Css
/*
function nandine_enquque_script(){
wp_register_style('normalize', get_template_directory_uri().'/assets/css/normalize.css');
wp_register_style('animate', get_template_directory_uri().'/assets/css/plugin/animate.css');
wp_register_style('hover', get_template_directory_uri().'/assets/css/plugin/hover-min.css');
wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
wp_register_style('awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
wp_register_style('magnific', get_template_directory_uri().'/assets/css/plugin/magnific-popup.css');
wp_register_style('style', get_template_directory_uri().'/assets/css/style.css');
wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css');
wp_register_style('modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js');

wp_enqueue_style('normalize');
wp_enqueue_style('animate');
wp_enqueue_style('hover');
wp_enqueue_style('bootstrap');
wp_enqueue_style('awesome');
wp_enqueue_style('magnific');
wp_enqueue_style('style');
wp_enqueue_style('responsive');
wp_enqueue_style('modernizr');
*/
//Register Jquery Script
/*
wp_register_script('mixitup', get_template_directory_uri().'/assets/js/plugin/mixitup.min.js', array('jquery'));
wp_register_script('skill', get_template_directory_uri().'/assets/js/plugin/skill.bars.jquery.js', array('jquery'));
wp_register_script('magnific', get_template_directory_uri().'/assets/js/plugin/jquery.magnific-popup.min.js', array('jquery'));
wp_register_script('carousel', get_template_directory_uri().'/assets/js/plugin/owl.carousel.min.js', array('jquery'));
wp_register_script('wow', get_template_directory_uri().'/assets/js/plugin/wow.min.js', array('jquery'));
wp_register_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'));
wp_register_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'));
wp_register_script('modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js', array('jquery'));


wp_register_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery', 'main'));


wp_enqueue_script('jquery');
wp_enqueue_script('main');
wp_enqueue_script('mixitup');
wp_enqueue_script('skill');
wp_enqueue_script('magnific');
wp_enqueue_script('carousel');
wp_enqueue_script('wow');
wp_enqueue_script('popper');
wp_enqueue_script('bootstrap');
wp_enqueue_script('modernizr');

};
add_action('wp_enqueue_scripts', 'nandine_enquque_script');



*/

function themeslug_enqueue_style() {
	wp_enqueue_style( 'core', '', false ); 
}

function themeslug_enqueue_script() {
	wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );









?>