<?php

/**
 * Template Name: Testimonial List
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

get_template_part('global-templates/inner-banner');

$testimonial_args = array(  
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC'
);

$testimonial_loop = new WP_Query( $testimonial_args );

if( $testimonial_loop->have_posts() ){ ?>

    <section class="testimonial-list comman-padding">  
        <div class="container">
            <div class="row g-md-5">

                <?php while( $testimonial_loop->have_posts() ){
                    $testimonial_loop->the_post(); 

                    $reviewer_image = get_field('reviewer_image');
                    $reviewer_name = get_field('reviewer_name');
                    $reviewer_designation = get_field('reviewer_designation');
                    $review_content = get_field('review_content');
                    $rating_count = get_field('rating_count');
                    ?>

                    <a  href="<?php the_permalink();?>" class="col-md-6 col-lg-4 our-word text-decoration-none d-block">
                        <div class="card-wrap">
                            <div class="star-wrap">

                                <?php if( !empty($rating_count) ){
                                    
                                    luca_star_rating($rating_count);
                                } ?>
                            </div>

                            <?php if( !empty($review_content) ){ ?>
                                
                               <div class="client-word-wrap"> <p><?= $review_content; ?></p></div>
                            <?php } ?>
                            <div class="client-details">
                                <div class="icon-wrap">
                                    
                                    <?php if( !empty($reviewer_image) ){ ?>
                                        
                                        <img src="<?= $reviewer_image; ?>" alt="">
                                    <?php } ?>
                                </div>
                                <div>
                                    <?php if( !empty($reviewer_name) ){ ?>
                                        
                                        <h5><?= $reviewer_name; ?></h5>
                                    <?php }

                                    if( !empty($reviewer_designation) ){ ?>
                                        
                                        <span><?= $reviewer_designation; ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php }
                wp_reset_query(); ?>
            </div>
        </div>
    </section>

<?php }

get_footer();
?>