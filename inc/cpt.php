<?php
function cptui_register_my_cpts() {


	
	/**
	 * Post Type: Weekly Digests
	 */
	$labels = array(
		'name'                  => _x( 'Weekly Digests', 'Post Type General Name', 'wave-theme' ),
		'singular_name'         => _x( 'Weekly Digest', 'Post Type Singular Name', 'wave-theme' ),
		'menu_name'             => __( 'Weekly Digests', 'wave-theme' ),
		'name_admin_bar'        => __( 'Weekly Digest', 'wave-theme' ),
		'archives'              => __( 'Weekly Digest Archives', 'wave-theme' ),
		'attributes'            => __( 'igest Attributes', 'wave-theme' ),
		'parent_item_colon'     => __( 'Parent Digest:', 'wave-theme' ),
		'all_items'             => __( 'All Digests', 'wave-theme' ),
		'add_new_item'          => __( 'Add New Weekly Digest', 'wave-theme' ),
		'add_new'               => __( 'Add New', 'wave-theme' ),
		'new_item'              => __( 'New Digest', 'wave-theme' ),
		'edit_item'             => __( 'Edit Digest', 'wave-theme' ),
		'update_item'           => __( 'Update Digest', 'wave-theme' ),
		'view_item'             => __( 'View Weekly Digest', 'wave-theme' ),
		'view_items'            => __( 'View Weekly Digests', 'wave-theme' ),
		'search_items'          => __( 'Search Weekly Digest', 'wave-theme' ),
		'not_found'             => __( 'Not found', 'wave-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wave-theme' ),
		'featured_image'        => __( 'Featured Image', 'wave-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'wave-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'wave-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'wave-theme' ),
		'insert_into_item'      => __( 'Insert into Digest', 'wave-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wave-theme' ),
		'items_list'            => __( 'Weekly Digests list', 'wave-theme' ),
		'items_list_navigation' => __( 'Digests list navigation', 'wave-theme' ),
		'filter_items_list'     => __( 'Filter Digests list', 'wave-theme' ),
	);
	$args = array(
		'label'                 => __( 'Weekly Digest', 'wave-theme' ),
		'description'           => __( 'Post Type Description', 'wave-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'             => 'weekly_digests',
	);
	register_post_type( 'weekly-digest', $args );

	$labels = array(
		'name'                       => _x( 'Topics', 'Topics', 'wave-theme' ),
		'singular_name'              => _x( 'Topic', 'Topic', 'wave-theme' ),
		'menu_name'                  => __( 'Topic', 'wave-theme' ),
		'all_items'                  => __( 'All Topics', 'wave-theme' ),
		'parent_item'                => __( 'Parent Topic', 'wave-theme' ),
		'parent_item_colon'          => __( 'Parent Topic:', 'wave-theme' ),
		'new_item_name'              => __( 'New Topic Name', 'wave-theme' ),
		'add_new_item'               => __( 'Add New Topic', 'wave-theme' ),
		'edit_item'                  => __( 'Edit Topic', 'wave-theme' ),
		'update_item'                => __( 'Update Topic', 'wave-theme' ),
		'view_item'                  => __( 'View Topic', 'wave-theme' ),
		'separate_items_with_commas' => __( 'Separate Topics with commas', 'wave-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Topics', 'wave-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wave-theme' ),
		'popular_items'              => __( 'Popular Topics', 'wave-theme' ),
		'search_items'               => __( 'Search Topics', 'wave-theme' ),
		'not_found'                  => __( 'Not Found', 'wave-theme' ),
		'no_terms'                   => __( 'No Topics', 'wave-theme' ),
		'items_list'                 => __( 'Topics list', 'wave-theme' ),
		'items_list_navigation'      => __( 'Topics list navigation', 'wave-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'weekly-digest-topic', array( 'weekly-digest' ), $args );

	$labels = array(
		'name'                       => _x( 'Types', 'Types', 'wave-theme' ),
		'singular_name'              => _x( 'Type', 'Type', 'wave-theme' ),
		'menu_name'                  => __( 'Type', 'wave-theme' ),
		'all_items'                  => __( 'All Types', 'wave-theme' ),
		'parent_item'                => __( 'Parent Type', 'wave-theme' ),
		'parent_item_colon'          => __( 'Parent Type:', 'wave-theme' ),
		'new_item_name'              => __( 'New Type Name', 'wave-theme' ),
		'add_new_item'               => __( 'Add New Type', 'wave-theme' ),
		'edit_item'                  => __( 'Edit Type', 'wave-theme' ),
		'update_item'                => __( 'Update Type', 'wave-theme' ),
		'view_item'                  => __( 'View Type', 'wave-theme' ),
		'separate_items_with_commas' => __( 'Separate Types with commas', 'wave-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Types', 'wave-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wave-theme' ),
		'popular_items'              => __( 'Popular Types', 'wave-theme' ),
		'search_items'               => __( 'Search Types', 'wave-theme' ),
		'not_found'                  => __( 'Not Found', 'wave-theme' ),
		'no_terms'                   => __( 'No Types', 'wave-theme' ),
		'items_list'                 => __( 'Types list', 'wave-theme' ),
		'items_list_navigation'      => __( 'Types list navigation', 'wave-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'weekly-digest-type', array( 'weekly-digest' ), $args );

	$labels = array(
		'name'                       => _x( 'Regions', 'Regions', 'wave-theme' ),
		'singular_name'              => _x( 'Region', 'Region', 'wave-theme' ),
		'menu_name'                  => __( 'Region', 'wave-theme' ),
		'all_items'                  => __( 'All Regions', 'wave-theme' ),
		'parent_item'                => __( 'Parent Region', 'wave-theme' ),
		'parent_item_colon'          => __( 'Parent Region:', 'wave-theme' ),
		'new_item_name'              => __( 'New Region Name', 'wave-theme' ),
		'add_new_item'               => __( 'Add New Region', 'wave-theme' ),
		'edit_item'                  => __( 'Edit Region', 'wave-theme' ),
		'update_item'                => __( 'Update Region', 'wave-theme' ),
		'view_item'                  => __( 'View Region', 'wave-theme' ),
		'separate_items_with_commas' => __( 'Separate Regions with commas', 'wave-theme' ),
		'add_or_remove_items'        => __( 'Add or remove Regions', 'wave-theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'wave-theme' ),
		'popular_items'              => __( 'Popular Regions', 'wave-theme' ),
		'search_items'               => __( 'Search Regions', 'wave-theme' ),
		'not_found'                  => __( 'Not Found', 'wave-theme' ),
		'no_terms'                   => __( 'No Regions', 'wave-theme' ),
		'items_list'                 => __( 'Regions list', 'wave-theme' ),
		'items_list_navigation'      => __( 'Regions list navigation', 'wave-theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'weekly-digest-region', array( 'weekly-digest' ), $args );

	/**
	 * Post Type: Fixed Price Packages.
	 */

	$labels = [
		"name" => esc_html__( "Fixed Price Packages", "wave-theme" ),
		"singular_name" => esc_html__( "Fixed Price Package", "wave-theme" ),
		"menu_name" => esc_html__( "Fixed Price Packages", "wave-theme" ),
		"add_new" => esc_html__( "Add New Fixed Price Package", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Fixed Price Packages", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "fixed-price-packages", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-analytics",
		"supports" => [ "title", "thumbnail", "excerpt", "custom-fields", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "fixed-price-packages", $args );

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => esc_html__( "Testimonials", "wave-theme" ),
		"singular_name" => esc_html__( "Testimonial", "wave-theme" ),
		"menu_name" => esc_html__( "Testimonials", "wave-theme" ),
		"add_new" => esc_html__( "Add New Testimonial", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Testimonial", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Testimonials", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonial", $args );

	/**
	 * Post Type: Team Members.
	 */

	$labels = [
		"name" => esc_html__( "Team Members", "wave-theme" ),
		"singular_name" => esc_html__( "Team Member", "wave-theme" ),
		"menu_name" => esc_html__( "Team Members", "wave-theme" ),
		"add_new" => esc_html__( "Add New Team Member", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Team Members", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "team-member", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team-member", $args );

	/**
	 * Post Type: Mail Templates.
	 */

	$labels = [
		"name" => esc_html__( "Mail Templates", "wave-theme" ),
		"singular_name" => esc_html__( "Mail Template", "wave-theme" ),
		"menu_name" => esc_html__( "Mail Templates", "wave-theme" ),
		"add_new" => esc_html__( "Add New Mail Template", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Mail Templates", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "mail-template", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "mail-template", $args );

	/**
	 * Post Type: Checklists.
	 */

	$labels = [
		"name" => esc_html__( "Checklists", "wave-theme" ),
		"singular_name" => esc_html__( "Checklist", "wave-theme" ),
		"menu_name" => esc_html__( "Checklists", "wave-theme" ),
		"add_new" => esc_html__( "Add New Checklist", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Checklists", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "checklist", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-yes",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "checklist", $args );

	/**
	 * Post Type: Landing Pages.
	 */

	$labels = [
		"name" => esc_html__( "Landing Pages", "wave-theme" ),
		"singular_name" => esc_html__( "Landing Page", "wave-theme" ),
		"menu_name" => esc_html__( "Landing Pages", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Landing Page", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Landing Pages", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "landing-page", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-desktop",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "landing-page", $args );

	/**
	 * Post Type: Resources.
	 */

	$labels = [
		"name" => esc_html__( "Resources", "wave-theme" ),
		"singular_name" => esc_html__( "Resource", "wave-theme" ),
		"menu_name" => esc_html__( "Resources", "wave-theme" ),
		"all_items" => esc_html__( "All Resources", "wave-theme" ),
		"add_new" => esc_html__( "Add new", "wave-theme" ),
		"add_new_item" => esc_html__( "Add new Resource", "wave-theme" ),
		"edit_item" => esc_html__( "Edit Resource", "wave-theme" ),
		"new_item" => esc_html__( "New Resource", "wave-theme" ),
		"view_item" => esc_html__( "View Resource", "wave-theme" ),
		"view_items" => esc_html__( "View Resources", "wave-theme" ),
		"search_items" => esc_html__( "Search Resources", "wave-theme" ),
		"not_found" => esc_html__( "No Resources found", "wave-theme" ),
		"not_found_in_trash" => esc_html__( "No Resources found in trash", "wave-theme" ),
		"parent" => esc_html__( "Parent Resource:", "wave-theme" ),
		"featured_image" => esc_html__( "Featured image for this Resource", "wave-theme" ),
		"set_featured_image" => esc_html__( "Set featured image for this Resource", "wave-theme" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Resource", "wave-theme" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Resource", "wave-theme" ),
		"archives" => esc_html__( "Resource archives", "wave-theme" ),
		"insert_into_item" => esc_html__( "Insert into Resource", "wave-theme" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Resource", "wave-theme" ),
		"filter_items_list" => esc_html__( "Filter Resources list", "wave-theme" ),
		"items_list_navigation" => esc_html__( "Resources list navigation", "wave-theme" ),
		"items_list" => esc_html__( "Resources list", "wave-theme" ),
		"attributes" => esc_html__( "Resources attributes", "wave-theme" ),
		"name_admin_bar" => esc_html__( "Resource", "wave-theme" ),
		"item_published" => esc_html__( "Resource published", "wave-theme" ),
		"item_published_privately" => esc_html__( "Resource published privately.", "wave-theme" ),
		"item_reverted_to_draft" => esc_html__( "Resource reverted to draft.", "wave-theme" ),
		"item_scheduled" => esc_html__( "Resource scheduled", "wave-theme" ),
		"item_updated" => esc_html__( "Resource updated.", "wave-theme" ),
		"parent_item_colon" => esc_html__( "Parent Resource:", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Resources", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "resource", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-book",
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "content-topic", "content-type" ],
		"show_in_graphql" => false,
	];

	register_post_type( "resource", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_cpts_fixed_price_packages() {

	/**
	 * Post Type: Fixed Price Packages.
	 */

	$labels = [
		"name" => esc_html__( "Fixed Price Packages", "wave-theme" ),
		"singular_name" => esc_html__( "Fixed Price Package", "wave-theme" ),
		"menu_name" => esc_html__( "Fixed Price Packages", "wave-theme" ),
		"add_new" => esc_html__( "Add New Fixed Price Package", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Fixed Price Packages", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "fixed-price-packages", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-analytics",
		"supports" => [ "title", "thumbnail", "excerpt", "custom-fields", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "fixed-price-packages", $args );
}

add_action( 'init', 'cptui_register_my_cpts_fixed_price_packages' );

function cptui_register_my_cpts_testimonial() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => esc_html__( "Testimonials", "wave-theme" ),
		"singular_name" => esc_html__( "Testimonial", "wave-theme" ),
		"menu_name" => esc_html__( "Testimonials", "wave-theme" ),
		"add_new" => esc_html__( "Add New Testimonial", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Testimonial", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Testimonials", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "testimonial", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonial", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonial' );

function cptui_register_my_cpts_team_member() {

	/**
	 * Post Type: Team Members.
	 */

	$labels = [
		"name" => esc_html__( "Team Members", "wave-theme" ),
		"singular_name" => esc_html__( "Team Member", "wave-theme" ),
		"menu_name" => esc_html__( "Team Members", "wave-theme" ),
		"add_new" => esc_html__( "Add New Team Member", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Team Members", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "team-member", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team-member", $args );
}

add_action( 'init', 'cptui_register_my_cpts_team_member' );

function cptui_register_my_cpts_mail_template() {

	/**
	 * Post Type: Mail Templates.
	 */

	$labels = [
		"name" => esc_html__( "Mail Templates", "wave-theme" ),
		"singular_name" => esc_html__( "Mail Template", "wave-theme" ),
		"menu_name" => esc_html__( "Mail Templates", "wave-theme" ),
		"add_new" => esc_html__( "Add New Mail Template", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Mail Templates", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "mail-template", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "mail-template", $args );
}

add_action( 'init', 'cptui_register_my_cpts_mail_template' );

function cptui_register_my_cpts_checklist() {

	/**
	 * Post Type: Checklists.
	 */

	$labels = [
		"name" => esc_html__( "Checklists", "wave-theme" ),
		"singular_name" => esc_html__( "Checklist", "wave-theme" ),
		"menu_name" => esc_html__( "Checklists", "wave-theme" ),
		"add_new" => esc_html__( "Add New Checklist", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Checklists", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "checklist", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-yes",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "checklist", $args );
}

add_action( 'init', 'cptui_register_my_cpts_checklist' );

function cptui_register_my_cpts_landing_page() {

	/**
	 * Post Type: Landing Pages.
	 */

	$labels = [
		"name" => esc_html__( "Landing Pages", "wave-theme" ),
		"singular_name" => esc_html__( "Landing Page", "wave-theme" ),
		"menu_name" => esc_html__( "Landing Pages", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Landing Page", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Landing Pages", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "landing-page", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-desktop",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "landing-page", $args );
}

add_action( 'init', 'cptui_register_my_cpts_landing_page' );

function cptui_register_my_cpts_resource() {

	/**
	 * Post Type: Resources.
	 */

	$labels = [
		"name" => esc_html__( "Resources", "wave-theme" ),
		"singular_name" => esc_html__( "Resource", "wave-theme" ),
		"menu_name" => esc_html__( "Resources", "wave-theme" ),
		"all_items" => esc_html__( "All Resources", "wave-theme" ),
		"add_new" => esc_html__( "Add new", "wave-theme" ),
		"add_new_item" => esc_html__( "Add new Resource", "wave-theme" ),
		"edit_item" => esc_html__( "Edit Resource", "wave-theme" ),
		"new_item" => esc_html__( "New Resource", "wave-theme" ),
		"view_item" => esc_html__( "View Resource", "wave-theme" ),
		"view_items" => esc_html__( "View Resources", "wave-theme" ),
		"search_items" => esc_html__( "Search Resources", "wave-theme" ),
		"not_found" => esc_html__( "No Resources found", "wave-theme" ),
		"not_found_in_trash" => esc_html__( "No Resources found in trash", "wave-theme" ),
		"parent" => esc_html__( "Parent Resource:", "wave-theme" ),
		"featured_image" => esc_html__( "Featured image for this Resource", "wave-theme" ),
		"set_featured_image" => esc_html__( "Set featured image for this Resource", "wave-theme" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Resource", "wave-theme" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Resource", "wave-theme" ),
		"archives" => esc_html__( "Resource archives", "wave-theme" ),
		"insert_into_item" => esc_html__( "Insert into Resource", "wave-theme" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Resource", "wave-theme" ),
		"filter_items_list" => esc_html__( "Filter Resources list", "wave-theme" ),
		"items_list_navigation" => esc_html__( "Resources list navigation", "wave-theme" ),
		"items_list" => esc_html__( "Resources list", "wave-theme" ),
		"attributes" => esc_html__( "Resources attributes", "wave-theme" ),
		"name_admin_bar" => esc_html__( "Resource", "wave-theme" ),
		"item_published" => esc_html__( "Resource published", "wave-theme" ),
		"item_published_privately" => esc_html__( "Resource published privately.", "wave-theme" ),
		"item_reverted_to_draft" => esc_html__( "Resource reverted to draft.", "wave-theme" ),
		"item_scheduled" => esc_html__( "Resource scheduled", "wave-theme" ),
		"item_updated" => esc_html__( "Resource updated.", "wave-theme" ),
		"parent_item_colon" => esc_html__( "Parent Resource:", "wave-theme" ),
	];

	$args = [
		"label" => esc_html__( "Resources", "wave-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "resource", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-book",
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "content-topic", "content-type" ],
		"show_in_graphql" => false,
	];

	register_post_type( "resource", $args );
}

add_action( 'init', 'cptui_register_my_cpts_resource' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Mail Template Region.
	 */

	$labels = [
		"name" => esc_html__( "Mail Template Region", "wave-theme" ),
		"singular_name" => esc_html__( "Mail Template Region", "wave-theme" ),
		"menu_name" => esc_html__( "Mail Template Region", "wave-theme" ),
		"new_item_name" => esc_html__( "Add New Mail Template Region", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Mail Template Region", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'mail_template_region', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "mail_template_region",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "mail_template_region", [ "mail-template" ], $args );

	/**
	 * Taxonomy: Mail Template Type.
	 */

	$labels = [
		"name" => esc_html__( "Mail Template Type", "wave-theme" ),
		"singular_name" => esc_html__( "Mail Template Type", "wave-theme" ),
		"menu_name" => esc_html__( "Mail Template Type", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Mail Template Type", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Mail Template Type", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'mail_template_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "mail_template_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "mail_template_type", [ "mail-template" ], $args );

	/**
	 * Taxonomy: Checklist type.
	 */

	$labels = [
		"name" => esc_html__( "Checklist type", "wave-theme" ),
		"singular_name" => esc_html__( "Checklist type", "wave-theme" ),
		"menu_name" => esc_html__( "Checklist type", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Checklist type", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Checklist type", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'checklist_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "checklist_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "checklist_type", [ "checklist" ], $args );

	/**
	 * Taxonomy: Checklist region.
	 */

	$labels = [
		"name" => esc_html__( "Checklist region", "wave-theme" ),
		"singular_name" => esc_html__( "Checklist region", "wave-theme" ),
		"menu_name" => esc_html__( "Checklist region", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Checklist region", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Checklist region", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'checklist_region', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "checklist_region",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "checklist_region", [ "checklist" ], $args );

	/**
	 * Taxonomy: Content Topics.
	 */

	$labels = [
		"name" => esc_html__( "Content Topics", "wave-theme" ),
		"singular_name" => esc_html__( "Content Topic", "wave-theme" ),
		"menu_name" => esc_html__( "Content Topics", "wave-theme" ),
		"all_items" => esc_html__( "All Content Topics", "wave-theme" ),
		"edit_item" => esc_html__( "Edit Content Topic", "wave-theme" ),
		"view_item" => esc_html__( "View Content Topic", "wave-theme" ),
		"update_item" => esc_html__( "Update Content Topic name", "wave-theme" ),
		"add_new_item" => esc_html__( "Add new Content Topic", "wave-theme" ),
		"new_item_name" => esc_html__( "New Content Topic name", "wave-theme" ),
		"parent_item" => esc_html__( "Parent Content Topic", "wave-theme" ),
		"parent_item_colon" => esc_html__( "Parent Content Topic:", "wave-theme" ),
		"search_items" => esc_html__( "Search Content Topics", "wave-theme" ),
		"popular_items" => esc_html__( "Popular Content Topics", "wave-theme" ),
		"separate_items_with_commas" => esc_html__( "Separate Content Topics with commas", "wave-theme" ),
		"add_or_remove_items" => esc_html__( "Add or remove Content Topics", "wave-theme" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Content Topics", "wave-theme" ),
		"not_found" => esc_html__( "No Content Topics found", "wave-theme" ),
		"no_terms" => esc_html__( "No Content Topics", "wave-theme" ),
		"items_list_navigation" => esc_html__( "Content Topics list navigation", "wave-theme" ),
		"items_list" => esc_html__( "Content Topics list", "wave-theme" ),
		"back_to_items" => esc_html__( "Back to Content Topics", "wave-theme" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "wave-theme" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "wave-theme" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "wave-theme" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Content Topics", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'content-topic', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "content-topic",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "content-topic", [ "resource" ], $args );

	/**
	 * Taxonomy: Content Types.
	 */

	$labels = [
		"name" => esc_html__( "Content Types", "wave-theme" ),
		"singular_name" => esc_html__( "Content Type", "wave-theme" ),
		"menu_name" => esc_html__( "Content Types", "wave-theme" ),
		"all_items" => esc_html__( "All Content Types", "wave-theme" ),
		"edit_item" => esc_html__( "Edit Content Type", "wave-theme" ),
		"view_item" => esc_html__( "View Content Type", "wave-theme" ),
		"update_item" => esc_html__( "Update Content Type name", "wave-theme" ),
		"add_new_item" => esc_html__( "Add new Content Type", "wave-theme" ),
		"new_item_name" => esc_html__( "New Content Type name", "wave-theme" ),
		"parent_item" => esc_html__( "Parent Content Type", "wave-theme" ),
		"parent_item_colon" => esc_html__( "Parent Content Type:", "wave-theme" ),
		"search_items" => esc_html__( "Search Content Types", "wave-theme" ),
		"popular_items" => esc_html__( "Popular Content Types", "wave-theme" ),
		"separate_items_with_commas" => esc_html__( "Separate Content Types with commas", "wave-theme" ),
		"add_or_remove_items" => esc_html__( "Add or remove Content Types", "wave-theme" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Content Types", "wave-theme" ),
		"not_found" => esc_html__( "No Content Types found", "wave-theme" ),
		"no_terms" => esc_html__( "No Content Types", "wave-theme" ),
		"items_list_navigation" => esc_html__( "Content Types list navigation", "wave-theme" ),
		"items_list" => esc_html__( "Content Types list", "wave-theme" ),
		"back_to_items" => esc_html__( "Back to Content Types", "wave-theme" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "wave-theme" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "wave-theme" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "wave-theme" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Content Types", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'content-type', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "content-type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "content-type", [ "resource" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes_mail_template_region() {

	/**
	 * Taxonomy: Mail Template Region.
	 */

	$labels = [
		"name" => esc_html__( "Mail Template Region", "wave-theme" ),
		"singular_name" => esc_html__( "Mail Template Region", "wave-theme" ),
		"menu_name" => esc_html__( "Mail Template Region", "wave-theme" ),
		"new_item_name" => esc_html__( "Add New Mail Template Region", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Mail Template Region", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'mail_template_region', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "mail_template_region",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "mail_template_region", [ "mail-template" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_mail_template_region' );

function cptui_register_my_taxes_mail_template_type() {

	/**
	 * Taxonomy: Mail Template Type.
	 */

	$labels = [
		"name" => esc_html__( "Mail Template Type", "wave-theme" ),
		"singular_name" => esc_html__( "Mail Template Type", "wave-theme" ),
		"menu_name" => esc_html__( "Mail Template Type", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Mail Template Type", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Mail Template Type", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'mail_template_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "mail_template_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "mail_template_type", [ "mail-template" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_mail_template_type' );

function cptui_register_my_taxes_checklist_type() {

	/**
	 * Taxonomy: Checklist type.
	 */

	$labels = [
		"name" => esc_html__( "Checklist type", "wave-theme" ),
		"singular_name" => esc_html__( "Checklist type", "wave-theme" ),
		"menu_name" => esc_html__( "Checklist type", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Checklist type", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Checklist type", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'checklist_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "checklist_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "checklist_type", [ "checklist" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_checklist_type' );

function cptui_register_my_taxes_checklist_region() {

	/**
	 * Taxonomy: Checklist region.
	 */

	$labels = [
		"name" => esc_html__( "Checklist region", "wave-theme" ),
		"singular_name" => esc_html__( "Checklist region", "wave-theme" ),
		"menu_name" => esc_html__( "Checklist region", "wave-theme" ),
		"add_new_item" => esc_html__( "Add New Checklist region", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Checklist region", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'checklist_region', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "checklist_region",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "checklist_region", [ "checklist" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_checklist_region' );

function cptui_register_my_taxes_content_topic() {

	/**
	 * Taxonomy: Content Topics.
	 */

	$labels = [
		"name" => esc_html__( "Content Topics", "wave-theme" ),
		"singular_name" => esc_html__( "Content Topic", "wave-theme" ),
		"menu_name" => esc_html__( "Content Topics", "wave-theme" ),
		"all_items" => esc_html__( "All Content Topics", "wave-theme" ),
		"edit_item" => esc_html__( "Edit Content Topic", "wave-theme" ),
		"view_item" => esc_html__( "View Content Topic", "wave-theme" ),
		"update_item" => esc_html__( "Update Content Topic name", "wave-theme" ),
		"add_new_item" => esc_html__( "Add new Content Topic", "wave-theme" ),
		"new_item_name" => esc_html__( "New Content Topic name", "wave-theme" ),
		"parent_item" => esc_html__( "Parent Content Topic", "wave-theme" ),
		"parent_item_colon" => esc_html__( "Parent Content Topic:", "wave-theme" ),
		"search_items" => esc_html__( "Search Content Topics", "wave-theme" ),
		"popular_items" => esc_html__( "Popular Content Topics", "wave-theme" ),
		"separate_items_with_commas" => esc_html__( "Separate Content Topics with commas", "wave-theme" ),
		"add_or_remove_items" => esc_html__( "Add or remove Content Topics", "wave-theme" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Content Topics", "wave-theme" ),
		"not_found" => esc_html__( "No Content Topics found", "wave-theme" ),
		"no_terms" => esc_html__( "No Content Topics", "wave-theme" ),
		"items_list_navigation" => esc_html__( "Content Topics list navigation", "wave-theme" ),
		"items_list" => esc_html__( "Content Topics list", "wave-theme" ),
		"back_to_items" => esc_html__( "Back to Content Topics", "wave-theme" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "wave-theme" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "wave-theme" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "wave-theme" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Content Topics", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'content-topic', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "content-topic",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "content-topic", [ "resource" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_content_topic' );

function cptui_register_my_taxes_content_type() {

	/**
	 * Taxonomy: Content Types.
	 */

	$labels = [
		"name" => esc_html__( "Content Types", "wave-theme" ),
		"singular_name" => esc_html__( "Content Type", "wave-theme" ),
		"menu_name" => esc_html__( "Content Types", "wave-theme" ),
		"all_items" => esc_html__( "All Content Types", "wave-theme" ),
		"edit_item" => esc_html__( "Edit Content Type", "wave-theme" ),
		"view_item" => esc_html__( "View Content Type", "wave-theme" ),
		"update_item" => esc_html__( "Update Content Type name", "wave-theme" ),
		"add_new_item" => esc_html__( "Add new Content Type", "wave-theme" ),
		"new_item_name" => esc_html__( "New Content Type name", "wave-theme" ),
		"parent_item" => esc_html__( "Parent Content Type", "wave-theme" ),
		"parent_item_colon" => esc_html__( "Parent Content Type:", "wave-theme" ),
		"search_items" => esc_html__( "Search Content Types", "wave-theme" ),
		"popular_items" => esc_html__( "Popular Content Types", "wave-theme" ),
		"separate_items_with_commas" => esc_html__( "Separate Content Types with commas", "wave-theme" ),
		"add_or_remove_items" => esc_html__( "Add or remove Content Types", "wave-theme" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Content Types", "wave-theme" ),
		"not_found" => esc_html__( "No Content Types found", "wave-theme" ),
		"no_terms" => esc_html__( "No Content Types", "wave-theme" ),
		"items_list_navigation" => esc_html__( "Content Types list navigation", "wave-theme" ),
		"items_list" => esc_html__( "Content Types list", "wave-theme" ),
		"back_to_items" => esc_html__( "Back to Content Types", "wave-theme" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "wave-theme" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "wave-theme" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "wave-theme" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "wave-theme" ),
	];

	
	$args = [
		"label" => esc_html__( "Content Types", "wave-theme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'content-type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "content-type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "content-type", [ "resource" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_content_type' );