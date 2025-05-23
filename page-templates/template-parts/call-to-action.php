<?php
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

$background_imagecolor = get_sub_field('background_imagecolor');
$background_image = get_sub_field('background_image');
$background_color = get_sub_field('background_color');
$background_image_url = isset($background_image['url']) ? $background_image['url'] : '';
$button_with_color = get_sub_field('button_with_color');
$call_to_action_title = get_sub_field('call_to_action_title');
$call_to_action_description = get_sub_field('call_to_action_description');
$cta_wave_color = get_sub_field('cta_wave_color');
$show_wave = get_sub_field('show_wave');

if( $background_imagecolor == 'Image' && !empty($background_image_url) ){

    $background_html = 'style="background-image: url('. $background_image_url .');"';
}else if( $background_imagecolor == 'Color' ){

    $background_html = 'style="background-color: '. $background_color .';"';
} ?>

<!-- call-to-action-section-start -->
<section class="call-to-action-section<?= $general_class; ?>" <?= $background_html; ?>>
    <?php if( $show_wave ){ ?>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 143.354" class="call-to-action-shape">
          <g id="Group_10972" data-name="Group 10972" transform="translate(0 -978.371)">
            <path id="Path_5617" data-name="Path 5617" d="M-11204-14102.437s92.412,44.744,262.622,52.714,288.14,5.086,288.14,5.086l49.01-3.355s115.889-5.456,270.481-36.54,259.3-56.565,404.6-69,318.238-14.437,455.516,7.214,189.628,44.1,189.628,44.1v61.873l-1920,20.313Z" transform="translate(11204 15141.763)" fill="#fff"/>
            <path id="Union_1" data-name="Union 1" d="M1255.512,77.868c-206.273-7.111-379.014,0-379.014,0S1152.857,4.554,1423.172,1.675C1657.7-7.8,1791.58,26.042,1792.027,26.137c78.1,15.424,127.974,34.9,127.974,34.9v58.34S1461.783,84.979,1255.512,77.868ZM165.95,111.736C91.134,109.38,0,91.7,0,91.7V60.76s100.75,31.617,181.371,42.96c53.7,7.556,70.269,9.238,75.344,9.519-2.062.05-5.72.108-11.581.108C232.024,113.346,207.893,113.056,165.95,111.736Zm90.765,1.5c1.552-.038,2.2-.07,2.2-.07s.193.119-.783.119C257.806,113.287,257.351,113.273,256.715,113.238Z" transform="translate(0 978.371)" fill="<?= !empty($cta_wave_color) ? $cta_wave_color: '#ffd803'; ?>"/>
          </g>
        </svg>
    <?php } ?>

    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">

                <?php if( !empty($call_to_action_title) ) { ?>

                    <h1><?php echo do_shortcode($call_to_action_title); ?></h1>
                <?php }

                if( !empty($call_to_action_description) ) { ?>

                    <p><?php echo $call_to_action_description; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>     
    <div class="row text-center comman-callto-action">
        <div class="container">
            <div class="d-md-flex justify-content-center px-md-5 mt-4 btn-wrap">

                <?php if( !empty($button_with_color['url']) && !empty($button_with_color['title']) ) { ?>

                    <a href="<?php echo $button_with_color['url']; ?>" target="<?php echo $button_with_color['target']; ?>" class="btn"><?php echo $button_with_color['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>      
</section>
<!-- call-to-action-section-end -->