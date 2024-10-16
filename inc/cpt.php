<?php
add_action( 'init', 'wave_custom_post_type' );
function wave_custom_post_type() {
	remove_post_type_support('post','excerpt');
	remove_post_type_support('fixed-price-packages','excerpt');
	remove_post_type_support('testimonial','excerpt');
	remove_post_type_support('team-member','excerpt');
	remove_post_type_support('mail-template','excerpt');
	remove_post_type_support('checklist','excerpt');

	// Remove editor from only flexible page template
	if ( isset($_GET['post']) ) {

        $page_id = $_GET['post'];
		$template = get_post_meta($page_id, '_wp_page_template', true);
		
		if( $template == 'page-templates/flexible-content.php' ){	

	        remove_post_type_support('page', 'editor');
		}
	}

    $enable_weeklydigests = get_field('enable_weeklydigests', 'option') ?? true;
	$labels = array(
		'name'                  => _x( 'Weekly Digests', 'Weekly Digest General Name', 'wave-theme' ),
		'singular_name'         => _x( 'Weekly Digest', 'Weekly Digest Singular Name', 'wave-theme' ),
		'menu_name'             => __( 'Weekly Digests', 'wave-theme' ),
		'name_admin_bar'        => __( 'Weekly Digest', 'wave-theme' ),
		'archives'              => __( 'Weekly Digest Archives', 'wave-theme' ),
		'attributes'            => __( 'Digest Attributes', 'wave-theme' ),
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
		'description'           => __( 'Weekly Digests', 'wave-theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'post-formats' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => $enable_weeklydigests,
		'show_ui'               => $enable_weeklydigests,
		'show_in_menu'          => $enable_weeklydigests,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => $enable_weeklydigests,
		'show_in_nav_menus'     => $enable_weeklydigests,
		'can_export'            => $enable_weeklydigests,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => $enable_weeklydigests,
		'rest_base'             => 'weekly_digests',
	);
	register_post_type( 'weekly-digest', $args );

	$labels = array(
		'name'                       => _x( 'Topics', 'Topics General Name', 'wave-theme' ),
		'singular_name'              => _x( 'Topic', 'Topic Singular Name', 'wave-theme' ),
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
		'hierarchical'               => true,
		'public'                     => $enable_weeklydigests,
		'show_ui'                    => $enable_weeklydigests,
		'show_admin_column'          => $enable_weeklydigests,
		'show_in_nav_menus'          => $enable_weeklydigests,
		'show_tagcloud'              => false,
		'show_in_rest'               => $enable_weeklydigests,
	);
	register_taxonomy( 'weekly-digest-topic', array( 'weekly-digest' ), $args );

	$labels = array(
		'name'                       => _x( 'Types', 'Types General Name', 'wave-theme' ),
		'singular_name'              => _x( 'Type Singular Name', 'Type', 'wave-theme' ),
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
		'hierarchical'               => true,
		'public'                     => $enable_weeklydigests,
		'show_ui'                    => $enable_weeklydigests,
		'show_admin_column'          => $enable_weeklydigests,
		'show_in_nav_menus'          => $enable_weeklydigests,
		'show_tagcloud'              => false,
		'show_in_rest'               => $enable_weeklydigests,
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
		'hierarchical'               => true,
		'public'                     => $enable_weeklydigests,
		'show_ui'                    => $enable_weeklydigests,
		'show_admin_column'          => $enable_weeklydigests,
		'show_in_nav_menus'          => $enable_weeklydigests,
		'show_tagcloud'              => false,
		'show_in_rest'               => $enable_weeklydigests,
	);
	register_taxonomy( 'weekly-digest-region', array( 'weekly-digest' ), $args );
    

	/**
	 * Post Type: Fixed Price Packages.
	 */
	$enable_fixedpricepackages = get_field('enable_packages', 'option') ?? true;
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
		"public" => $enable_fixedpricepackages,
		"publicly_queryable" => $enable_fixedpricepackages,
		"show_ui" => $enable_fixedpricepackages,
		"show_in_rest" => $enable_fixedpricepackages,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => $enable_fixedpricepackages,
		"show_in_nav_menus" => $enable_fixedpricepackages,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => $enable_fixedpricepackages,
		"rewrite" => [ "slug" => "fixed-price-packages", "with_front" => $enable_fixedpricepackages ],
		"query_var" => true,
		"menu_icon" => "dashicons-analytics",
		"supports" => [ "title", "thumbnail", "excerpt", "custom-fields", "author" ],
		"show_in_graphql" => $enable_fixedpricepackages,
	];

	register_post_type( "fixed-price-packages", $args );

	/**
	 * Post Type: Resources.
	 */
	$enable_resources = get_field('enable_resources', 'option') ?? true;
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
		"public" => $enable_resources,
		"publicly_queryable" => $enable_resources,
		"show_ui" => $enable_resources,
		"show_in_rest" => $enable_resources,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => $enable_resources,
		"show_in_nav_menus" => $enable_resources,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => $enable_resources,
		"rewrite" => [ "slug" => "resource", "with_front" => $enable_resources ],
		"query_var" => $enable_resources,
		"menu_icon" => "dashicons-book",
		"supports" => [ "title", "editor", "thumbnail" ],
		"taxonomies" => [ "content-topic", "content-type" ],
		"show_in_graphql" => false,
	];

	register_post_type( "resource", $args );
	// Taxonomies for Resource Content Topic
	$content_topic_labels = array(
		'name'              => _x( 'Content Topics', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Content Topic', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Content Topics', 'wave-theme' ),
		'all_items'         => __( 'All Content Topics', 'wave-theme' ),
		'parent_item'       => __( 'Parent Content Topic', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Content Topic:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Content Topic', 'wave-theme' ),
		'update_item'       => __( 'Update Content Topic', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Content Topic', 'wave-theme' ),
		'new_item_name'     => __( 'New Content Topic Name', 'wave-theme' ),
		'not_found'         => __( 'No Content Topics Found', 'wave-theme' ),
		'back_to_items'     => __( 'Back to Content Topics', 'wave-theme' ),
		'menu_name'         => __( 'Content Topics', 'wave-theme' ),
	);

	$content_topic_args = array(
		'hierarchical'      => true,
		'labels'            => $content_topic_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'content-topic' ),
	);

	register_taxonomy( 'content-topic', array( 'resource' ), $content_topic_args );

	// Taxonomies for Resource Content Type
	$content_type_labels = array(
		'name'              => _x( 'Content Types', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Content Type', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Content Types', 'wave-theme' ),
		'all_items'         => __( 'All Content Types', 'wave-theme' ),
		'parent_item'       => __( 'Parent Content Type', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Content Type:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Content Type', 'wave-theme' ),
		'update_item'       => __( 'Update Content Type', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Content Type', 'wave-theme' ),
		'new_item_name'     => __( 'New Content Type Name', 'wave-theme' ),
		'not_found'         => __( 'No Content Types Found', 'wave-theme' ),
		'back_to_items'     => __( 'Back to Content Types', 'wave-theme' ),
		'menu_name'         => __( 'Content Types', 'wave-theme' ),
	);

	$content_type_args = array(
		'hierarchical'      => true,
		'labels'            => $content_type_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'content-type' ),
	);

	register_taxonomy( 'content-type', array( 'resource' ), $content_type_args );

	/**
	 * Post Type: Testimonials.
	 */
	$enable_testimonials = get_field('enable_testimonials', 'option') ?? true;
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
		"public" => $enable_testimonials,
		"publicly_queryable" => $enable_testimonials,
		"show_ui" => $enable_testimonials,
		"show_in_rest" => $enable_testimonials,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => $enable_testimonials,
		"show_in_nav_menus" => $enable_testimonials,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => $enable_testimonials,
		"rewrite" => [ "slug" => "testimonial", "with_front" => $enable_testimonials ],
		"query_var" => $enable_testimonials,
		"menu_icon" => "dashicons-testimonial",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonial", $args );

	/**
	 * Post Type: Team Members.
	 */
	$enable_teammembers = get_field('enable_teammembers', 'option') ?? true;
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
		"public" => $enable_teammembers,
		"publicly_queryable" => $enable_teammembers,
		"show_ui" => $enable_teammembers,
		"show_in_rest" => $enable_teammembers,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => $enable_teammembers,
		"show_in_nav_menus" => $enable_teammembers,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => $enable_teammembers,
		"rewrite" => [ "slug" => "team-member", "with_front" => $enable_teammembers ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "team-member", $args );


	// Taxonomies for Team members Location
	$location_labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Locations', 'wave-theme' ),
		'all_items'         => __( 'All Locations', 'wave-theme' ),
		'parent_item'       => __( 'Parent Location', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Location:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Location', 'wave-theme' ),
		'update_item'       => __( 'Update Location', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Location', 'wave-theme' ),
		'new_item_name'     => __( 'New Location Name', 'wave-theme' ),
		'not_found'         => __( 'No Locations Found', 'wave-theme' ),
		'back_to_items'     => __( 'Back to Locations', 'wave-theme' ),
		'menu_name'         => __( 'Locations', 'wave-theme' ),
	);

	$location_args = array(
		'hierarchical'      => true,
		'labels'            => $location_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'locations' ),
	);

	register_taxonomy( 'locations', array( 'team-member' ), $location_args );

	// Taxonomies for Team members Firms
	$firms_labels = array(
		'name'              => _x( 'Firms', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Firm', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Firms', 'wave-theme' ),
		'all_items'         => __( 'All Firms', 'wave-theme' ),
		'parent_item'       => __( 'Parent Firm', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Firm:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Firm', 'wave-theme' ),
		'update_item'       => __( 'Update Firm', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Firm', 'wave-theme' ),
		'new_item_name'     => __( 'New Firm Name', 'wave-theme' ),
		'not_found'         => __( 'No Firms Found', 'wave-theme' ),
		'back_to_items'     => __( 'Back to Firms', 'wave-theme' ),
		'menu_name'         => __( 'Firms', 'wave-theme' ),
	);

	$firms_args = array(
		'hierarchical'      => true,
		'labels'            => $firms_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'firms' ),
	);

	register_taxonomy( 'firms', array( 'team-member' ), $firms_args );

	// Taxonomies for Team members Services
	$services_labels = array(
		'name'              => _x( 'Services', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Service', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Services', 'wave-theme' ),
		'all_items'         => __( 'All Services', 'wave-theme' ),
		'parent_item'       => __( 'Parent Service', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Service:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Service', 'wave-theme' ),
		'update_item'       => __( 'Update Service', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Service', 'wave-theme' ),
		'new_item_name'     => __( 'New Service Name', 'wave-theme' ),
		'not_found'         => __( 'No Services Found', 'wave-theme' ),
		'back_to_items'     => __( 'Back to Services', 'wave-theme' ),
		'menu_name'         => __( 'Services', 'wave-theme' ),
	);

	$services_args = array(
		'hierarchical'      => true,
		'labels'            => $services_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'services' ),
	);

	register_taxonomy( 'services', array( 'team-member' ), $services_args );

	// Taxonomies for Team members Specialisations
	$specialisations_labels = array(
		'name'              => _x( 'Specialisations', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Specialisation', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Specialisations', 'wave-theme' ),
		'all_items'         => __( 'All Specialisations', 'wave-theme' ),
		'parent_item'       => __( 'Parent Specialisation', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Specialisation:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Specialisation', 'wave-theme' ),
		'update_item'       => __( 'Update Specialisation', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Specialisation', 'wave-theme' ),
		'new_item_name'     => __( 'New Specialisation Name', 'wave-theme' ),
		'not_found'         => __( 'No Specialisations Found', 'wave-theme' ),
		'back_to_items'     => __( 'Back to Specialisations', 'wave-theme' ),
		'menu_name'         => __( 'Specialisations', 'wave-theme' ),
	);

	$specialisations_args = array(
		'hierarchical'      => true,
		'labels'            => $specialisations_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'specialisations' ),
	);

	register_taxonomy( 'specialisations', array( 'team-member' ), $specialisations_args );

	/**
	 * Post Type: Mail Templates.
	 */
	$enable_mailtemplates = get_field('enable_mail_posts_mail_templates', 'option') ?? true;
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
		"public" => $enable_mailtemplates,
		"publicly_queryable" => $enable_mailtemplates,
		"show_ui" => $enable_mailtemplates,
		"show_in_rest" => $enable_mailtemplates,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => $enable_mailtemplates,
		"show_in_nav_menus" => $enable_mailtemplates,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => $enable_mailtemplates,
		"rewrite" => [ "slug" => "mail-template", "with_front" => $enable_mailtemplates ],
		"query_var" => $enable_mailtemplates,
		"menu_icon" => "dashicons-book-alt",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "mail-template", $args );

	/**
	 * Post Type: Checklists.
	 */
	$enable_checklists = get_field('enable_checklists', 'option') ?? true;
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
		"public" => $enable_checklists,
		"publicly_queryable" => $enable_checklists,
		"show_ui" => $enable_checklists,
		"show_in_rest" => $enable_checklists,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => $enable_checklists,
		"show_in_nav_menus" => $enable_checklists,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => $enable_checklists,
		"rewrite" => [ "slug" => "checklist", "with_front" => $enable_checklists ],
		"query_var" => $enable_checklists,
		"menu_icon" => "dashicons-yes",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "checklist", $args );

	/**
	 * Post Type: Landing Pages.
	 */
	$enable_landingpages = get_field('enable_landingpages', 'option') ?? true;
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
		"public" => $enable_landingpages,
		"publicly_queryable" => $enable_landingpages,
		"show_ui" => $enable_landingpages,
		"show_in_rest" => $enable_landingpages,
		"has_archive" => false,
		"show_in_menu" => $enable_landingpages,
		"show_in_nav_menus" => $enable_landingpages,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"can_export" => $enable_landingpages,
		"rewrite" => [ "slug" => "landing-page", "with_front" => $enable_landingpages ],
		"query_var" => $enable_landingpages,
		"menu_icon" => "dashicons-desktop",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];

	register_post_type( "landing-page", $args );

	// Video registration
	$enable_videos = get_field('enable_videos', 'option') ?? true;
	$videos_labels = array(
		'name'                  => _x( 'Videos', 'Post type general name', 'wave-theme' ),
		'singular_name'         => _x( 'Video', 'Post type singular name', 'wave-theme' ),
		'menu_name'             => _x( 'Videos', 'Admin Menu text', 'wave-theme' ),
		'name_admin_bar'        => _x( 'Video', 'Add New on Toolbar', 'wave-theme' ),
		'add_new'               => __( 'Add New', 'wave-theme' ),
		'add_new_item'          => __( 'Add New Video', 'wave-theme' ),
		'new_item'              => __( 'New Video', 'wave-theme' ),
		'edit_item'             => __( 'Edit Video', 'wave-theme' ),
		'view_item'             => __( 'View Video', 'wave-theme' ),
		'all_items'             => __( 'All Videos', 'wave-theme' ),
		'search_items'          => __( 'Search Videos', 'wave-theme' ),
		'parent_item_colon'     => __( 'Parent Videos:', 'wave-theme' ),
		'not_found'             => __( 'No videos found.', 'wave-theme' ),
		'not_found_in_trash'    => __( 'No videos found in Trash.', 'wave-theme' )
	);

	$videos_args = array(
		'labels'             => $videos_labels,
		'public'             => $enable_videos,
		'publicly_queryable' => $enable_videos,
		'menu_icon'			 => 'dashicons-video-alt3',
		'show_ui'            => $enable_videos,
		'show_in_menu'       => $enable_videos,
		'query_var'          => $enable_videos,
		'rewrite'            => array( 'slug' => 'video' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'video', $videos_args );

	$videos_cat = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'wave-theme' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'wave-theme' ),
		'search_items'      => __( 'Search Categories', 'wave-theme' ),
		'all_items'         => __( 'All Categories', 'wave-theme' ),
		'parent_item'       => __( 'Parent Category', 'wave-theme' ),
		'parent_item_colon' => __( 'Parent Category:', 'wave-theme' ),
		'edit_item'         => __( 'Edit Category', 'wave-theme' ),
		'update_item'       => __( 'Update Category', 'wave-theme' ),
		'add_new_item'      => __( 'Add New Category', 'wave-theme' ),
		'new_item_name'     => __( 'New Category Name', 'wave-theme' ),
		'menu_name'         => __( 'Category', 'wave-theme' ),
	);

	$videos_cat_args = array(
		'hierarchical'      => true,
		'labels'            => $videos_cat,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'video_cat' ),
	);

	register_taxonomy( 'video_cat', array( 'video' ), $videos_cat_args );
}