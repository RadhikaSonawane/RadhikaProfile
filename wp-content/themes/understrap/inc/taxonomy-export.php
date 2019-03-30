<?php 

function cptui_register_my_taxes() {

/**
 * Taxonomy: Subjects.
 */

$labels = array(
    "name" => __( "Subjects", "understrap" ),
    "singular_name" => __( "Subject", "understrap" ),
);

$args = array(
    "label" => __( "Subjects", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "hierarchical" => true,
    "label" => "Subjects",
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => array( 'slug' => 'subject', 'with_front' => true,  'hierarchical' => true, ),
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "subject",
    "show_in_quick_edit" => true,
);
register_taxonomy( "subject", array( "portfolios" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );


function cptui_register_my_taxes_subject() {

	/**
	 * Taxonomy: Subjects.
	 */

	$labels = array(
		"name" => __( "Subjects", "understrap" ),
		"singular_name" => __( "Subject", "understrap" ),
	);

	$args = array(
		"label" => __( "Subjects", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Subjects",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'subject', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "subject",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "subject", array( "portfolios" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_subject' );
