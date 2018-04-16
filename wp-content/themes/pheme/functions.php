<?php
function theme_head_script() { ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php }
add_action( 'wp_head', 'theme_head_script' );

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );


add_theme_support( 'post-thumbnails' ); 



function recipes() {

	$labels = array(
		'name'                  => _x( 'Recipes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Recipes', 'text_domain' ),
		'name_admin_bar'        => __( 'Recipes', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Recipes', 'text_domain' ),
		'add_new_item'          => __( 'Add New Recipe', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Recipe', 'text_domain' ),
		'edit_item'             => __( 'Edit Recipe', 'text_domain' ),
		'update_item'           => __( 'Update Recipe', 'text_domain' ),
		'view_item'             => __( 'View Recipe', 'text_domain' ),
		'view_items'            => __( 'View Recipes', 'text_domain' ),
		'search_items'          => __( 'Search Recipe', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Recipe', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Recipe', 'text_domain' ),
		'items_list'            => __( 'Recipes list', 'text_domain' ),
		'items_list_navigation' => __( 'Recipes list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Recipes list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Recipe', 'text_domain' ),
		'description'           => __( 'Recipes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'recipes', $args );

}
add_action( 'init', 'recipes', 0 );


?>