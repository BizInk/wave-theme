<?php

/**
 * Template Name: Testimonials
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

get_template_part('global-templates/inner-banner');

$tesimonials_post_obj = get_field('tesimonials_post_obj');
?>
<section class="comman-padding">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>
<?php
if ( !empty($tesimonials_post_obj) ) {
?>
    <section class="testimonial-list comman-padding">  
        <div class="container">
            <div class="row g-md-5">

                <?php foreach( $tesimonials_post_obj as $post ):
                    setup_postdata($post); 

                    $reviewer_image = get_field('reviewer_image');
                    $reviewer_name = get_field('reviewer_name') ?? get_the_title();
                    if( empty($reviewer_image) ){
                        $reviewer_image = get_stylesheet_directory_uri() . '/images/testimonial-default.jpg';
                    }
                    $reviewer_designation = get_field('reviewer_designation');
                    $review_content = get_field('review_content');
                    $rating_count = get_field('rating_count');
                    ?>

                    <a href="<?php the_permalink();?>" class="col-md-6 col-lg-4 our-word text-decoration-none d-block">
                        <div class="card-wrap">
                            <div class="star-wrap">

                                <?php if( !empty($rating_count) ){
                                    
                                    luca_star_rating($rating_count);
                                } ?>
                            </div>

                            <?php if( !empty($review_content) ){ ?>
                                
                               <div class="client-word-wrap"> <p><?php echo $review_content; ?></p></div>
                            <?php } ?>
                            <div class="client-details">
                                <div class="icon-wrap">
                                    
                                    <?php if( !empty($reviewer_image) ){ ?>
                                        <img src="<?php echo $reviewer_image; ?>" alt="<?php echo $reviewer_name; ?>">
                                    <?php } ?>
                                </div>
                                <div>                                        
                                    <h5><?php echo $reviewer_name; ?></h5>
                                    <span><?php echo $reviewer_designation; ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php 
                endforeach;
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </section>
<?php
}

get_footer();
?>