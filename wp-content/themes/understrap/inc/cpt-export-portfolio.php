<?php 

function cptui_register_my_cpts() {

/**
 * Post Type: Portfolios.
 */

$labels = array(
    "name" => __( "Portfolios", "understrap" ),
    "singular_name" => __( "Portfolio", "understrap" ),
    "featured_image" => __( "Featured Image for this Portfolio", "understrap" ),
    "set_featured_image" => __( "Set Featured Image for This Portfolio", "understrap" ),
);

$args = array(
    "label" => __( "Portfolios", "understrap" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => array( "slug" => "portfolios", "with_front" => true ),
    "query_var" => true,
    "menu_icon" => "dashicons-images-alt2",
    "supports" => array( "title", "editor", "thumbnail", "comments" ),
    "taxonomies" => array( "category", "post_tag" ),
);

register_post_type( "portfolios", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



function cptui_register_my_cpts_portfolios() {

	/**
	 * Post Type: Portfolios.
	 */

	$labels = array(
		"name" => __( "Portfolios", "understrap" ),
		"singular_name" => __( "Portfolio", "understrap" ),
		"featured_image" => __( "Featured Image for this Portfolio", "understrap" ),
		"set_featured_image" => __( "Set Featured Image for This Portfolio", "understrap" ),
	);

	$args = array(
		"label" => __( "Portfolios", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "portfolios", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-images-alt2",
		"supports" => array( "title", "editor", "thumbnail", "comments" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "portfolios", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portfolios' );
