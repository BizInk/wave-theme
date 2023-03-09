<?php
/**
* Template Name: Our Team
*
* Template to display listing of team members page
*
* @package Understrap
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

get_template_part('global-templates/inner-banner');

$team_args = array(  
    'post_type' => 'team-member',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC'
);

$team_loop = new WP_Query( $team_args );

if( $team_loop->have_posts() ){
?>
    <section class="teamlist-section comman-padding">
        <div class="container">
            <div class="row g-lg-5">
                <?php while( $team_loop->have_posts() ){
                    $team_loop->the_post();

                    $member_image = get_field('member_image');
                    $member_position = get_field('member_position');
                    $member_company = get_field('member_company'); ?>
                    <div class="col-md-6 col-lg-4 team-member">
                        <a href="<?php the_permalink(); ?>" class="team-member-wrap">
                            <div class="member-img">
                                <img src="<?php echo $member_image; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="member-details">
                                <h4><?php the_title(); ?></h4>
                                
                                <?php if( !empty($member_position) ){ ?>
                                    
                                    <h6><?= $member_position; ?></h6>
                                <?php }

                                if( !empty($member_company) ){ ?>
                                    
                                    <p><?= $member_company; ?></p>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                <?php }
                wp_reset_query(); ?>
            </div>
        </div>
    </section>
<?php }

get_footer(); ?>