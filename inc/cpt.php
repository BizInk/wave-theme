<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: Fixed Price Packages.
	 */

	$labels = [
		"name" => esc_html__( "Fixed Price Packages", "understrap-child" ),
		"singular_name" => esc_html__( "Fixed Price Package", "understrap-child" ),
		"menu_name" => esc_html__( "Fixed Price Packages", "understrap-child" ),
		"add_new" => esc_html__( "Add New Fixed Price Package", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Fixed Price Packages", "understrap-child" ),
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
		"name" => esc_html__( "Testimonials", "understrap-child" ),
		"singular_name" => esc_html__( "Testimonial", "understrap-child" ),
		"menu_name" => esc_html__( "Testimonials", "understrap-child" ),
		"add_new" => esc_html__( "Add New Testimonial", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New Testimonial", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Testimonials", "understrap-child" ),
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
		"name" => esc_html__( "Team Members", "understrap-child" ),
		"singular_name" => esc_html__( "Team Member", "understrap-child" ),
		"menu_name" => esc_html__( "Team Members", "understrap-child" ),
		"add_new" => esc_html__( "Add New Team Member", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Team Members", "understrap-child" ),
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
		"name" => esc_html__( "Mail Templates", "understrap-child" ),
		"singular_name" => esc_html__( "Mail Template", "understrap-child" ),
		"menu_name" => esc_html__( "Mail Templates", "understrap-child" ),
		"add_new" => esc_html__( "Add New Mail Template", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Mail Templates", "understrap-child" ),
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
		"name" => esc_html__( "Checklists", "understrap-child" ),
		"singular_name" => esc_html__( "Checklist", "understrap-child" ),
		"menu_name" => esc_html__( "Checklists", "understrap-child" ),
		"add_new" => esc_html__( "Add New Checklist", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Checklists", "understrap-child" ),
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
		"name" => esc_html__( "Landing Pages", "understrap-child" ),
		"singular_name" => esc_html__( "Landing Page", "understrap-child" ),
		"menu_name" => esc_html__( "Landing Pages", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New Landing Page", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Landing Pages", "understrap-child" ),
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
		"name" => esc_html__( "Resources", "understrap-child" ),
		"singular_name" => esc_html__( "Resource", "understrap-child" ),
		"menu_name" => esc_html__( "Resources", "understrap-child" ),
		"all_items" => esc_html__( "All Resources", "understrap-child" ),
		"add_new" => esc_html__( "Add new", "understrap-child" ),
		"add_new_item" => esc_html__( "Add new Resource", "understrap-child" ),
		"edit_item" => esc_html__( "Edit Resource", "understrap-child" ),
		"new_item" => esc_html__( "New Resource", "understrap-child" ),
		"view_item" => esc_html__( "View Resource", "understrap-child" ),
		"view_items" => esc_html__( "View Resources", "understrap-child" ),
		"search_items" => esc_html__( "Search Resources", "understrap-child" ),
		"not_found" => esc_html__( "No Resources found", "understrap-child" ),
		"not_found_in_trash" => esc_html__( "No Resources found in trash", "understrap-child" ),
		"parent" => esc_html__( "Parent Resource:", "understrap-child" ),
		"featured_image" => esc_html__( "Featured image for this Resource", "understrap-child" ),
		"set_featured_image" => esc_html__( "Set featured image for this Resource", "understrap-child" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Resource", "understrap-child" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Resource", "understrap-child" ),
		"archives" => esc_html__( "Resource archives", "understrap-child" ),
		"insert_into_item" => esc_html__( "Insert into Resource", "understrap-child" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Resource", "understrap-child" ),
		"filter_items_list" => esc_html__( "Filter Resources list", "understrap-child" ),
		"items_list_navigation" => esc_html__( "Resources list navigation", "understrap-child" ),
		"items_list" => esc_html__( "Resources list", "understrap-child" ),
		"attributes" => esc_html__( "Resources attributes", "understrap-child" ),
		"name_admin_bar" => esc_html__( "Resource", "understrap-child" ),
		"item_published" => esc_html__( "Resource published", "understrap-child" ),
		"item_published_privately" => esc_html__( "Resource published privately.", "understrap-child" ),
		"item_reverted_to_draft" => esc_html__( "Resource reverted to draft.", "understrap-child" ),
		"item_scheduled" => esc_html__( "Resource scheduled", "understrap-child" ),
		"item_updated" => esc_html__( "Resource updated.", "understrap-child" ),
		"parent_item_colon" => esc_html__( "Parent Resource:", "understrap-child" ),
	];

	$args = [
		"label" => esc_html__( "Resources", "understrap-child" ),
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
		"taxonomies" => [ "content_topic", "content_type" ],
		"show_in_graphql" => false,
	];

	register_post_type( "resource", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Mail Template Region.
	 */

	$labels = [
		"name" => esc_html__( "Mail Template Region", "understrap-child" ),
		"singular_name" => esc_html__( "Mail Template Region", "understrap-child" ),
		"menu_name" => esc_html__( "Mail Template Region", "understrap-child" ),
		"new_item_name" => esc_html__( "Add New Mail Template Region", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "Mail Template Region", "understrap-child" ),
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
		"name" => esc_html__( "Mail Template Type", "understrap-child" ),
		"singular_name" => esc_html__( "Mail Template Type", "understrap-child" ),
		"menu_name" => esc_html__( "Mail Template Type", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New Mail Template Type", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "Mail Template Type", "understrap-child" ),
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
		"name" => esc_html__( "Checklist type", "understrap-child" ),
		"singular_name" => esc_html__( "Checklist type", "understrap-child" ),
		"menu_name" => esc_html__( "Checklist type", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New Checklist type", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "Checklist type", "understrap-child" ),
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
		"name" => esc_html__( "Checklist region", "understrap-child" ),
		"singular_name" => esc_html__( "Checklist region", "understrap-child" ),
		"menu_name" => esc_html__( "Checklist region", "understrap-child" ),
		"add_new_item" => esc_html__( "Add New Checklist region", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "Checklist region", "understrap-child" ),
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
		"name" => esc_html__( "Content Topics", "understrap-child" ),
		"singular_name" => esc_html__( "Content Topic", "understrap-child" ),
		"menu_name" => esc_html__( "Content Topics", "understrap-child" ),
		"all_items" => esc_html__( "All Content Topics", "understrap-child" ),
		"edit_item" => esc_html__( "Edit Content Topic", "understrap-child" ),
		"view_item" => esc_html__( "View Content Topic", "understrap-child" ),
		"update_item" => esc_html__( "Update Content Topic name", "understrap-child" ),
		"add_new_item" => esc_html__( "Add new Content Topic", "understrap-child" ),
		"new_item_name" => esc_html__( "New Content Topic name", "understrap-child" ),
		"parent_item" => esc_html__( "Parent Content Topic", "understrap-child" ),
		"parent_item_colon" => esc_html__( "Parent Content Topic:", "understrap-child" ),
		"search_items" => esc_html__( "Search Content Topics", "understrap-child" ),
		"popular_items" => esc_html__( "Popular Content Topics", "understrap-child" ),
		"separate_items_with_commas" => esc_html__( "Separate Content Topics with commas", "understrap-child" ),
		"add_or_remove_items" => esc_html__( "Add or remove Content Topics", "understrap-child" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Content Topics", "understrap-child" ),
		"not_found" => esc_html__( "No Content Topics found", "understrap-child" ),
		"no_terms" => esc_html__( "No Content Topics", "understrap-child" ),
		"items_list_navigation" => esc_html__( "Content Topics list navigation", "understrap-child" ),
		"items_list" => esc_html__( "Content Topics list", "understrap-child" ),
		"back_to_items" => esc_html__( "Back to Content Topics", "understrap-child" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "understrap-child" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "understrap-child" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "understrap-child" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "Content Topics", "understrap-child" ),
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

	/**
	 * Taxonomy: Content Types.
	 */

	$labels = [
		"name" => esc_html__( "Content Types", "understrap-child" ),
		"singular_name" => esc_html__( "Content Type", "understrap-child" ),
		"menu_name" => esc_html__( "Content Types", "understrap-child" ),
		"all_items" => esc_html__( "All Content Types", "understrap-child" ),
		"edit_item" => esc_html__( "Edit Content Type", "understrap-child" ),
		"view_item" => esc_html__( "View Content Type", "understrap-child" ),
		"update_item" => esc_html__( "Update Content Type name", "understrap-child" ),
		"add_new_item" => esc_html__( "Add new Content Type", "understrap-child" ),
		"new_item_name" => esc_html__( "New Content Type name", "understrap-child" ),
		"parent_item" => esc_html__( "Parent Content Type", "understrap-child" ),
		"parent_item_colon" => esc_html__( "Parent Content Type:", "understrap-child" ),
		"search_items" => esc_html__( "Search Content Types", "understrap-child" ),
		"popular_items" => esc_html__( "Popular Content Types", "understrap-child" ),
		"separate_items_with_commas" => esc_html__( "Separate Content Types with commas", "understrap-child" ),
		"add_or_remove_items" => esc_html__( "Add or remove Content Types", "understrap-child" ),
		"choose_from_most_used" => esc_html__( "Choose from the most used Content Types", "understrap-child" ),
		"not_found" => esc_html__( "No Content Types found", "understrap-child" ),
		"no_terms" => esc_html__( "No Content Types", "understrap-child" ),
		"items_list_navigation" => esc_html__( "Content Types list navigation", "understrap-child" ),
		"items_list" => esc_html__( "Content Types list", "understrap-child" ),
		"back_to_items" => esc_html__( "Back to Content Types", "understrap-child" ),
		"name_field_description" => esc_html__( "The name is how it appears on your site.", "understrap-child" ),
		"parent_field_description" => esc_html__( "Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.", "understrap-child" ),
		"slug_field_description" => esc_html__( "The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.", "understrap-child" ),
		"desc_field_description" => esc_html__( "The description is not prominent by default; however, some themes may show it.", "understrap-child" ),
	];

	
	$args = [
		"label" => esc_html__( "Content Types", "understrap-child" ),
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

    /**
	 * Taxonomy: Content Region.
	 */

	$labels = [
		"name" => esc_html__( "Content Region", "wave" ),
		"singular_name" => esc_html__( "Content Regions", "wave" ),
	];
	
	$args = [
		"label" => esc_html__( "Content Region", "wave" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'content-region', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "content-region",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => true,
		"sort" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "content-region", [ "resource" ], $args );

}
add_action( 'init', 'cptui_register_my_taxes' );
