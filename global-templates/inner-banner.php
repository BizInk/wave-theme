<?php if( is_page() ){

	$inner_banner_shape_1_color = get_field('inner_banner_shape_1_color');
	$inner_banner_shape_2_color = get_field('inner_banner_shape_2_color');
	$inner_banner_title = get_field('inner_banner_title');
	$inner_banner_content = get_field('inner_banner_content'); 
}else if( is_singular('team-member') ){

	$inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
	$inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
	$inner_banner_title = get_the_title();
	$inner_banner_content = '<p>'.get_field('member_position').'</p>';
}else if( is_single() ){

    global $post;
    $author_id=$post->post_author;

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = get_the_title();
    $inner_banner_content = '<p class="post-meta">
            <span>'. get_the_author_meta('display_name', $author_id) .'</span> | <span>'. get_the_date('d M, Y') .'</span>
        </p>';
}else if( is_home() ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = 'Blogs'; 
    $inner_banner_content = get_field('inner_banner_content', 'option');
}else if( is_archive() ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = single_cat_title( '', false ); 
    $inner_banner_content = '';
}else if( is_404() ){

    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = get_field('404_banner_title', 'option'); 
    $inner_banner_content = get_field('404_banner_content', 'option');
}else if( is_search() ){

    $search_term = $_GET['s'];
    $inner_banner_shape_1_color = get_field('inner_banner_shape_1_color', 'option');
    $inner_banner_shape_2_color = get_field('inner_banner_shape_2_color', 'option');
    $inner_banner_title = !empty($search_term) ? 'Search results for "' . $search_term .'"' : 'Search results'; 
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

 ?>

<section class="inner-banner-section">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 666.539" class="inner-banner-blue-shape">
    <path id="Path_235" data-name="Path 235" d="M1920,564.622s-348.259-97.663-963.854,0S0,564.622,0,564.622V-58.512H1920Z" transform="translate(0 58.512)" fill="<?= $inner_banner_shape_1_color; ?>"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 666.54" class="inner-banner-yellow-shape">
    <path id="Path_236" data-name="Path 236" d="M0,615.118s176.422,35.413,673.333,0S1920,636.6,1920,636.6V-29.939H0Z" transform="translate(0 29.939)" fill="<?= $inner_banner_shape_2_color; ?>"/>
    </svg>
    <div class="shape-color primary-bg" style="background-color: <?= $inner_banner_shape_1_color; ?>;"></div>
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">                
                <h1><?= $inner_banner_title; ?></h1>

                <?php 

                    if(!is_singular('resource')){
                        echo $inner_banner_content; 
                    }
                  
                  ?>

            </div>
        </div>
    </div>
</section>