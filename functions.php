<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

define('DEFAULT_IMG', get_stylesheet_directory_uri().'/images/default.jpg');


/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );

/*Website Settings*/
if( function_exists('acf_add_options_sub_page') ) {
	
	$parent = acf_add_options_sub_page(array(
            'page_title'  => __('Website Settings'),
            'menu_title'  => __('Website Settings'),
            'parent'     => 'options-general.php',
            'redirect'    => false,
        ));
	$parent = acf_add_options_sub_page(array(
            'page_title'  => __('Admin Settings'),
            'menu_title'  => __('Admin Settings'),
            'parent'     => 'options-general.php',
            'redirect'    => false,
        ));
}


// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
  'footer-menu' => __( 'Footer Menu', 'understrap-child' )
) );


//$new_color = get_field('primary_color', 'option');
// require_once(get_stylesheet_directory() . '/inc/scssphp/scss.inc.php');
// use ScssPhp\ScssPhp\Compiler;
// $compiler = new Compiler();
// echo $compiler->compileString('
//   $primary: '.$new_color.'')->getCss();

/**
 * Add a new dashboard widget.
 */
function wpdocs_add_dashboard_widgets() {
	$feed_url = get_field('feed_title', 'option');
    wp_add_dashboard_widget( 'dashboard_widget', $feed_url, 'dashboard_widget_function' );
}
add_action( 'wp_dashboard_setup', 'wpdocs_add_dashboard_widgets' );


  /*
*	Re-usable RSS feed reader with shortcode
*/
if ( !function_exists('base_rss_feed') ) {
	$feed_url = get_field('feed_url', 'option');
	function base_rss_feed($size = 5, $feed = '$feed_url', $date = false, $cache_time = 1800)
	{
		// Include SimplePie RSS parsing engine
		include_once ABSPATH . WPINC . '/feed.php';
 
		// Set the cache time for SimplePie
		add_filter( 'wp_feed_cache_transient_lifetime', create_function( '$a', "return $cache_time;" ) );
 
		// Build the SimplePie object
		$rss = fetch_feed($feed);

		// Check for errors in the RSS XML
		if ( !is_wp_error( $rss ) ) {
 
			// Set a limit for the number of items to parse
			$maxitems = $rss->get_item_quantity($size);
			$rss_items = $rss->get_items(0, $maxitems);
 
			// Store the total number of items found in the feed
			$i = 0;
			$total_entries = count($rss_items);
            
			// Output HTML
			$html = "<ul class='rss-widget'>";
            // echo '<ul class="rss-widget">';
			foreach ($rss_items as $item) {
				 
				$i++;
 
				// Add a class of "last" to the last item in the list
				if( $total_entries == $i ) {
					$last = " class='last'";
				} else {
					$last = "";
				}
 
				// Store the data we need from the feed
				$title = $item->get_title();
				$link = $item->get_permalink();
				$desc = $item->get_description();
				$date_posted = $item->get_date('F j, Y');
 
				// Output
				$html .= "";
				$html .= '<li class="rss-widget-title"><a href="'.$link.'"><b>'."$title".'</b></a><span clas="rss-date">&nbsp;'.$date_posted.'</span></li>';
				// if( $date == true ) $html .= "$date_posted";
				// $html .= '<li class="rss-widget-description">'."$desc".'</li>';
				$html .= '<li class="rss-widget-description">'.wp_trim_words( $desc, 50, '&nbsp[...]' ).'</li>';
				$html .= "";
			 
			}
			// echo '</ul>';
            $html .= "</ul>";

		} else {
			$html = "An error occurred while parsing your RSS feed. Check that it's a valid XML file.";
		}
		return $html;

	}
}

/** Define [rss] shortcode */
if( function_exists('base_rss_feed') && !function_exists('base_rss_shortcode') ) {

	$feed_url = get_field('feed_url', 'option');

	function base_rss_shortcode($atts) {
		extract(shortcode_atts(array(
			'size' => '3',
			'feed' => $feed_url,
			'date' => false,
		), $atts));
		
		$content = base_rss_feed($size, $feed, $date);
		return $content;
	}
	add_shortcode("rss", "base_rss_shortcode");
}

/**
 * Output the contents of the dashboard widget
 */
function dashboard_widget_function( $post, $callback_args ) {
    // esc_html_e( "Hello World, this is my first Dashboard Widget!", "textdomain" );
    $feed_url = get_field('feed_url', 'option');
   if( function_exists('base_rss_feed') ) echo base_rss_feed(3, $feed_url, true);

}

add_filter( 'gform_enable_password_field', '__return_true' );
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $paths;
    
}

add_action( 'init', 'wpdocs_custom_init' );
function wpdocs_custom_init() {
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
}

// Adding option to select gravity form in ACF
add_filter( 'acf/load_field/name=gravity_forms', 'luca_acf_populate_gf_forms_ids' );
function luca_acf_populate_gf_forms_ids( $field ) {
	if ( class_exists( 'GFFormsModel' ) ) {
		$choices = [];

		foreach ( \GFFormsModel::get_forms() as $form ) {
			$choices[ $form->id ] = $form->title;
		}

		$field['choices'] = $choices;
	}

	return $field;
}

// Function to show star rating
function luca_star_rating($rating){
	if( $rating > 0 && $rating <= 5 ){

	    $rating_round = (int)$rating;
	    $half = $rating - $rating_round;
	    $half = $half > 0 ? true : false;

	    while( $rating_round > 0 ){
	    	echo '<i class="fa fa-star" aria-hidden="true"></i>';

	    	$rating_round--;
	    }

	    echo $half ? '<i class="fa fa-star-half-o" aria-hidden="true"></i>' : null;
	}
}

// Shortcode for yellow text
add_shortcode('yellow-text', 'yellow_text_cb');
function yellow_text_cb($atts, $content = null ){
    return '<span class="yellow">' . $content . '</span>';
}

// Shortcode for line break
add_shortcode('br', 'br_cb');
function br_cb(){
    return '<br>';
}

// Shortcode for current year
add_shortcode('current-year', 'current_year_cb');
function current_year_cb(){
    return date('Y');
}



// Ajax callback function to fetch and load more posts on blog page
add_action("wp_ajax_fetch_blog_posts", "fetch_blog_posts");
add_action("wp_ajax_nopriv_fetch_blog_posts", "fetch_blog_posts");

function fetch_blog_posts() {

	$category = $_POST['category'];
	$pagenumber = $_POST['pagenumber'];
    $ppp = 3;

	$posts_args = array(
	    'post_status' => 'publish', 
	    'order' => 'DESC',
	    'paged'	=> $pagenumber,
	    'posts_per_page' => $ppp, 
	);

	if( !empty($category) ){

		$posts_args['cat'] = $category;
	}

	$posts_loop = new WP_Query( $posts_args );

	$return_content = array('content' => '', 'load_more' => '');

	if( $posts_loop->have_posts() ){

		ob_start();

		if( $pagenumber == 1 ){ ?>

			<div class="row g-lg-5">
		<?php }
			while( $posts_loop->have_posts() ){
				$posts_loop->the_post();

				$post_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : DEFAULT_IMG; ?>

				<div class="col-md-6 col-xl-4 team-member">
	                    <div class="team-member-wrap">
	                        
	                        <a href="<?php the_permalink(); ?>" class="member-img">
	                        	<img src="<?= $post_image; ?>" alt="blog-post-img">
	                        </a>
	                        <div class="member-details">
	                        	
	                            <a href="<?php the_permalink(); ?>" class="member-name"><h4><?php the_title(); ?></h4></a>
	                            <p><?php the_excerpt(); ?></p>
	   
	                            <a href="<?php the_permalink(); ?>" >Read More</a>                           
	                        </div>
	                    </div>
	            </div>
			<?php }
		if( $pagenumber == 1 ){ ?>
			
			</div>
		<?php }
		$return_content['content'] = ob_get_contents();
		ob_end_clean();

		if( $posts_loop->found_posts > ($ppp*$pagenumber) ){
			
			$return_content['load_more'] = ' <div class="d-flex justify-content-center"><a href="#" class="btn blue-btn load-more" data-pagenumber="'. ($pagenumber+1) .'">Load More<img src="'. get_stylesheet_directory_uri() .'/images/arrow-right.png" class="img-fluid btn-arrow" alt=""></a></div>';
		}

	}

	wp_reset_query();

	echo json_encode($return_content);

die();
}


// Theme Updater
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
$myUpdateChecker = PucFactory::buildUpdateChecker('https://github.com/BizInk/wave-theme',__FILE__,'wave-theme');
// Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');
// Using a private repository, specify the access token 
$myUpdateChecker->setAuthentication('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');