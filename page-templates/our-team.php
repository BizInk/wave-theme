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

$our_members = get_field('our_members');

if( !empty($our_members) ){
?>
    <section class="teamlist-section comman-padding">
        <div class="container">
            <div class="row g-lg-5 justify-content-center">
                <?php foreach( $our_members as $our_member ){ 

                    $member_image = get_field('member_image', $our_member);
                    $member_position = get_field('member_position', $our_member);
                    $member_company = get_field('member_company', $our_member); ?>

                    <div class="col-md-6 col-lg-4 team-member">
                        <a href="<?= get_permalink($our_member); ?>" class="team-member-wrap">
                            <div class="member-img">
                                <img src="<?php echo $member_image; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="member-details">
                                <h4><?= $our_member->post_title; ?></h4>
                                
                                <?php if( !empty($member_position) ){ ?>
                                    
                                    <h6><?= $member_position; ?></h6>
                                <?php }

                                if( !empty($member_company) ){ ?>
                                    
                                    <p><?= $member_company; ?></p>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }

get_footer(); ?>