<!-- logo-section-start -->
<?php
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

$logo_title = get_sub_field('logo_title');
$logo_description = get_sub_field('logo_description');

$logo_grid = get_sub_field('logo_grid_layout') ? true : false;
$logo_grid_cols = get_sub_field('logo_grid_layout_width') ? get_sub_field('logo_grid_layout_width') : 5;

if( have_rows('logo') ): ?>

    <section class="logo-section text-center<?= $general_class; ?>">
        <div class="full-width-wysiwyg text-center">
            <div class="container">
                <div class="editor-design">
                    <?= !empty($logo_title) ? '<h2>'. $logo_title .'</h2>' : null; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="<?php echo ($logo_grid ? "logo-grid logo-grid-".$logo_grid_cols : "logo-slider"); ?>">
                <?php if( have_rows('logo') ):

                    while( have_rows('logo') ):
                    the_row();

                        $slider_image = get_sub_field('slider_image');
                        $logo_url = get_sub_field('add_logo_url');

                        if( !empty($slider_image) ){ ?>

                            <div class="logo">
                                <?php if( !empty($logo_url) ){ ?>

                                    <a href="<?php echo $logo_url; ?>" target="_blank">
                                <?php } ?>
                                
                                    <img src="<?php echo $slider_image['url']; ?>" class="img-fluid" alt="<?php echo $slider_image['alt'] ? esc_attr($slider_image['alt']):'slider-img'; ?>">

                                <?php if( !empty($logo_url) ){ ?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php }
                    endwhile;
                endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- logo-section-end -->