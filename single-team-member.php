<?php
defined('ABSPATH') || exit;
get_header();
get_template_part('global-templates/inner-banner');

$member_image = get_field('member_image');
$member_image = !empty($member_image) ? $member_image : get_stylesheet_directory_uri() . '/images/testimonial-default.jpg';
$member_full_profile = get_field('member_full_profile'); 
$member_my_story = get_field('member_my_story'); 
$member_contact_text = get_field('member_contact_text'); 
$member_phone = get_field('member_phone'); 
$member_email = get_field('member_email'); 
$member_address = get_field('member_address'); 
$member_facebook = get_field('member_facebook'); 
$member_twitter = get_field('member_twitter'); 
$member_linkedin = get_field('member_linkedin');

$gravity_forms = get_field('gravity_forms', 'option'); 
?>

<section class="member-details-section comman-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="member-img">
                    <img src="<?php echo $member_image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="editor-design">
                    <div class="d-flex justify-content-between mb-4">
                        <h3>About Me</h3>
                    </div>
                    <?= $member_full_profile; ?>
                </div>
            </div>

            <?php if( !empty($member_my_story) ){ ?>

                <div class="col-md-12">
                    <div class="editor-design">
                        <h3><?php _e('My Story','wave-theme'); ?></h3>
                        <?= $member_my_story; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="get-in-touch comman-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="location-wrap">
                    <h2><?php _e('Get In Touch','wave-theme');?></h2>
                    <?= $member_contact_text; ?>
                    <ul class="social-nav">    
                        <?php if( !empty($member_facebook) ){ ?>
                            <li><a href="<?= $member_facebook; ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <?php }

                        if( !empty($member_twitter) ){ ?>
                            <li><a href="<?= $member_twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <?php }

                        if( !empty($member_linkedin) ){ ?>
                            <li><a href="<?= $member_linkedin; ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <?php } ?>
                    </ul>
                    <ul>
                        <?php if( !empty($member_address) ){ ?>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="https://maps.google.com?q=<?= $member_address; ?>" target="_blank"><?= $member_address; ?></a></li>
                        <?php }
                        if( !empty($member_phone) ){ ?>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?= $member_phone; ?>"><?= $member_phone; ?></a></li>
                        <?php }
                        if( !empty($member_email) ){ ?>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?= $member_email; ?>"><?= $member_email; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <?php if( !empty($gravity_forms) ){
                    echo do_shortcode('[gravityform id="'. $gravity_forms .'" title="false"]');
                } ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>