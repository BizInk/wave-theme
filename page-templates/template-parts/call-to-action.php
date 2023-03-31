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

if( $background_imagecolor == 'Image' && !empty($background_image_url) ){

    $background_html = 'style="background-image: url('. $background_image_url .');"';
}else if( $background_imagecolor == 'Color' ){

    $background_html = 'style="background-color: '. $background_color .';"';
} ?>

<!-- call-to-action-section-start -->
<section class="call-to-action-section<?= $general_class; ?>" <?= $background_html; ?>>
    <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="939.724" viewBox="0 0 1920 939.724" class="call-to-action-shape">
    <path id="Path_236" data-name="Path 236" d="M0,879.5s176.422,49.927,673.333,0S1920,909.785,1920,909.785V-29.939H0Z" transform="translate(0 29.939)" fill="<?= !empty($cta_wave_color) ? $cta_wave_color: '#ffd803'; ?>"/>
</svg>
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