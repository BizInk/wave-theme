<?php
$general_settings = get_sub_field('general_settings'); 
$choose_pricing_packeges = get_sub_field('choose_pricing_packeges');
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

$pricing_sub_title = get_sub_field('pricing_sub_title');
$pricing_title = get_sub_field('pricing_title');
$pricing_description = get_sub_field('pricing_description');
$columns_number = get_sub_field('columns_number');
$columns_classes = 'col-md-6 col-lg-4';
if( $columns_number == 4 ){
$columns_classes = 'col-md-6 col-lg-3';
}
?>

<?php get_template_part('global-templates/inner-banner'); ?>


<section class="pricing-section<?php echo $general_class; ?>">
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">
                <?php if($pricing_sub_title) { ?>
                <h6><?php echo $pricing_sub_title; ?></h6>
                <?php }
                if($pricing_title) { ?>
                <h2><?php echo $pricing_title; ?></h2>
                <?php }
                if($pricing_description) { ?>
                <p><?php echo $pricing_description; ?></p>
                <?php } ?>                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-5 g-md-5 <?php echo $columns_number == 5 ? 'row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5' : null; ?>">
                <?php
                if( $choose_pricing_packeges ){
                  
                    foreach( $choose_pricing_packeges as $post ){
                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post);

                        $most_popular = get_field('most_popular');
                        $price_from = get_field('price_from');
                        $gstvat = get_field('gstvat');
                        $price_button = get_field('price_button');
                        $price = get_field('price');
                        $price_features_alignment = get_field( 'price_features_alignment' );
                        $show_decimals = get_field( 'show_decimals' );
                        $show_price_per_period = get_field( 'show_price_per_period' ); ?>
                        
                        <div class="<?php echo $columns_classes; ?><?php echo $most_popular ? ' highlighted' : null; ?>">
                            <div class="card box-shadow">
                                <div class="card-header">
                                    <h5><?php echo get_the_title(); ?></h5>
                                    <p><?php echo get_field('price_description')?></p>
                                    <?php if( $price ) {

                                        echo $price_from ? '<span class="pricefrom">From: </span>' : null; ?>

                                        <h2 class="card-title pricing-card-title<?php echo $show_decimals ? ' show-decimals' : null; ?>">$<?php echo $price; ?>
                                        <?php if( $show_decimals ){ ?>
                                        
                                            <sup>,00</sup>
                                        <?php } ?>
                                            <small>/ <?php echo $show_price_per_period; ?></small></h2>
                                        <?php echo $gstvat ? '<span class="gstvat"> +VAT</span>' : null;
                                    } ?>  
                                </div>

                                <?php if( have_rows('price_features') ){ ?>

                                    <div class="card-body pt-0 <?php echo $price_features_alignment; ?>">
                                        <ul>
                                            <?php while( have_rows('price_features') ){
                                                the_row();
                                                
                                                $features = get_sub_field('features');
                                                if( !empty($features) ) { ?>
                                                
                                                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span><?php echo $features; ?></span></li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <div class="card-footer">
                                    <?php                                            
                                    if( !empty($price_button['url']) && !empty($price_button['title']) ) { ?>
                                        
                                        <a href="<?php echo $price_button['url']; ?>" class="btn navyblue-btn mt-2 ms-5"><?php echo $price_button['title']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php }

                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata();
                } ?>
        </div>
    </div>
</section>