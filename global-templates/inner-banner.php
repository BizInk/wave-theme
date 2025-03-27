<?php if( is_page() ){

	$inner_banner_shape_1_color = get_field('inner_banner_shape_1_color');
	$inner_banner_shape_2_color = get_field('inner_banner_shape_2_color');
	$inner_banner_title = get_field('inner_banner_title');
	$inner_banner_content = get_field('inner_banner_content'); 
    $inner_banner_image = get_field('inner_banner_image') ? get_field('inner_banner_image') : get_field('inner_banner_image', 'option');
    if(empty($inner_banner_title)){
        $inner_banner_title = get_the_title();
        // No title set, use the default colors as well
        $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
	    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    }
}else if( is_singular('team-member') ){

	$inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
	$inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
	$inner_banner_title = get_the_title();
	$inner_banner_content = '<p>'.get_field('member_position').'</p>';
    $inner_banner_image = get_field('inner_banner_image', 'option');
}else if( is_single() ){

    global $post;
    $author_id=$post->post_author;

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = get_the_title();
    $inner_banner_content = '<p class="post-meta">
            <span>'. get_the_author_meta('display_name', $author_id) .'</span> | <span>'. get_the_date('d M, Y') .'</span>
        </p>';
    $inner_banner_image = get_field('inner_banner_image', 'option');
}else if( is_home() ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = __('Blog','wave-theme');
    $inner_banner_content = get_field('inner_banner_content', 'option');
    $inner_banner_image = get_field('inner_banner_image', 'option');
}else if( is_archive() ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = single_cat_title( '', false );
    if(empty($inner_banner_title) && is_post_type_archive()){
        $inner_banner_title = post_type_archive_title( '', false );
    }
    $inner_banner_content = '';
    $inner_banner_image = get_field('inner_banner_image', 'option');
}else if( is_404() ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = get_field('404_banner_title', 'option'); 
    $inner_banner_content = get_field('404_banner_content', 'option');
    $inner_banner_image = get_field('inner_banner_image', 'option');
    if(empty($inner_banner_title)){
        $inner_banner_title = __('Error 404','wave-theme');
    }
}else if( is_search() ){

    $search_term = $_GET['s'];
    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = !empty($search_term) ? 'Search results for "' . $search_term .'"' : 'Search results'; 
    $inner_banner_image = get_field('inner_banner_image', 'option');
}

if( empty($inner_banner_shape_1_color) || !$inner_banner_shape_1_color ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
}

if( empty($inner_banner_shape_2_color) || !$inner_banner_shape_2_color ){
        
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
}

if( empty($inner_banner_title) || !$inner_banner_title ){

    $inner_banner_title = get_field('inner_banner_title', 'option');
}

if( empty($inner_banner_content) || !$inner_banner_content ){
        
    $inner_banner_content = get_field('inner_banner_content', 'option');
}

if( empty($inner_banner_image) || !$inner_banner_image ){
        
    $inner_banner_image = get_field('inner_banner_image', 'option');
}

$background_html = '';
if( !empty($inner_banner_image) ){

    $background_html = 'style="background-image: url('. $inner_banner_image .');"';
}else if( !empty($inner_banner_shape_1_color) ){

    $background_html = 'style="background-color: '. $inner_banner_shape_1_color .';"';
}

?>

<!-- call-to-action-section-start -->
<section class="call-to-action-section" <?= $background_html; ?>>   
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 143.354" class="call-to-action-shape">
      <g id="Group_10972" data-name="Group 10972" transform="translate(0 -978.371)">
        <path id="Path_5617" data-name="Path 5617" d="M-11204-14102.437s92.412,44.744,262.622,52.714,288.14,5.086,288.14,5.086l49.01-3.355s115.889-5.456,270.481-36.54,259.3-56.565,404.6-69,318.238-14.437,455.516,7.214,189.628,44.1,189.628,44.1v61.873l-1920,20.313Z" transform="translate(11204 15141.763)" fill="#fff"/>
        <path id="Union_1" data-name="Union 1" d="M1255.512,77.868c-206.273-7.111-379.014,0-379.014,0S1152.857,4.554,1423.172,1.675C1657.7-7.8,1791.58,26.042,1792.027,26.137c78.1,15.424,127.974,34.9,127.974,34.9v58.34S1461.783,84.979,1255.512,77.868ZM165.95,111.736C91.134,109.38,0,91.7,0,91.7V60.76s100.75,31.617,181.371,42.96c53.7,7.556,70.269,9.238,75.344,9.519-2.062.05-5.72.108-11.581.108C232.024,113.346,207.893,113.056,165.95,111.736Zm90.765,1.5c1.552-.038,2.2-.07,2.2-.07s.193.119-.783.119C257.806,113.287,257.351,113.273,256.715,113.238Z" transform="translate(0 978.371)" fill="<?= !empty($inner_banner_shape_2_color) ? $inner_banner_shape_2_color: '#ffd803'; ?>"/>
      </g>
    </svg>

    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">

                <?php if( !empty($inner_banner_title) ) { ?>

                    <h1><?php echo do_shortcode($inner_banner_title); ?></h1>
                <?php }

                if( !empty($inner_banner_content) && !is_singular('resource') ) { ?>

                    <p><?php echo $inner_banner_content; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>      
</section>
<!-- call-to-action-section-end --> 