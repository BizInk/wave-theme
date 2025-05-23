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
$enable_team_link = get_field('enable_teammember_link') ? true : false;
$show_social = get_field('show_social') ? true : false;
$show_position = get_field('show_position') ? true : false;
$show_company = get_field('show_company') ? true : false;
?>
    <section class="teamlist-section comman-padding">
        <div class="container">
            <div class="row g-lg-5 justify-content-center">
                <?php foreach( $our_members as $our_member ){ 
                    $member_image = get_field('member_image', $our_member);
                    $member_image_hover = get_field('member_image_hover', $our_member);
                    $member_position = get_field('member_position', $our_member);
                    $member_company = get_field('member_company', $our_member); 
                    ?>
                    <div class="col-md-6 col-lg-4 team-member">
                        <div class="team-member-wrap">
                            <?php if($enable_team_link){ ?>
                                <a href="<?= get_the_permalink($our_member); ?>" class="member-link">
                            <?php } ?>
                            <div class="member-img <?php if( !empty($member_image_hover) ){echo "img-hover";}?>">
                                <img src="<?php echo $member_image; ?>" class="img-fluid main-img" alt="<?= $our_member->post_title; ?>" />
                                <?php if( !empty($member_image_hover) ){ ?>
                                    <img src="<?php echo $member_image_hover; ?>" class="img-fluid hover-img" alt="<?= $our_member->post_title; ?>" />
                                <?php } ?>
                            </div>
                            <?php if($enable_team_link){ ?>
                                </a>
                            <?php } ?>
                            <div class="member-details">
                                <?php if($enable_team_link){ ?>
                                    <a href="<?= get_the_permalink($our_member); ?>" class="member-link">
                                <?php } ?>
                                <h4><?= $our_member->post_title; ?></h4>
                                <?php if( !empty($member_position) && $show_position ){ ?>
                                    <h6><?= $member_position; ?></h6>
                                <?php }
                                if( !empty($member_company) && $show_company ){ ?>
                                    <p><?= $member_company; ?></p>
                                <?php }
                                if($enable_team_link){ ?>
                                    </a>
                                <?php }
                                $facebook = get_field('member_facebook', $our_member);
                                $twitter = get_field('member_twitter', $our_member);
                                $linkedin = get_field('member_linkedin', $our_member);
                                if( $show_social && ($facebook || $twitter || $linkedin) ){ ?>
                                    <div class="social-nav">
                                        <?php 
                                        if( $facebook ){ 
                                            ?><a href="<?php echo $facebook; ?>" target="_blank"><i aria-label="Facebook" class="fa fa-facebook-square" aria-hidden="true"></i></a><?php 
                                        }
                                        if( $twitter ){ 
                                            ?><a href="<?php echo $twitter; ?>" target="_blank"><i aria-label="Twitter (X)" class="fa fa-twitter" aria-hidden="true"></i></a><?php 
                                        }
                                        if( $linkedin ){
                                            ?><a href="<?php echo $linkedin; ?>" target="_blank"><i aria-label="LinkedIn" class="fa fa-linkedin-square" aria-hidden="true"></i></a><?php 
                                        } 
                                        ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }

get_footer(); ?>