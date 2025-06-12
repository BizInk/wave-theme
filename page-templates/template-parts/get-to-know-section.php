<?php
$general_settings = get_sub_field('general_settings');
$general_class = '';
if( in_array('Add Common Padding', $general_settings) ){

$general_class .= ' comman-padding';
}
if( in_array('Add Common Margin', $general_settings) ){

$general_class .= ' comman-margin';
}
$team_members = get_sub_field('team_members');
$get_to_know_title = get_sub_field('get_to_know_title');
$get_to_know_subtitle = get_sub_field('get_to_know_subtitle');

$enable_team_link = get_sub_field('enable_teammember_link') ? true : false;
$show_social = get_sub_field('show_social') ? true : false;
$show_position = get_sub_field('show_position') ? true : false;
$show_company = get_sub_field('show_company') ? true : false;
?>
<section class="teamlist-section<?= $general_class; ?>">   
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">
               <!-- <h6>our team</h6>  Note for developer: add option in backend to add content -->
                <h2><?php echo $get_to_know_title ? $get_to_know_title : 'Get to know us, we are<br>dedicated'; ?></h2>
                <p><?php echo $get_to_know_subtitle ? $get_to_know_subtitle : 'Lorem dolor sit amet, consectetur tempor incididun psum <br> sit amet, consectetur tempor incididunt'; ?></p>
            </div>
        </div>
    </div>
    
    <?php if( !empty($team_members) ): ?>
    <div class="container">
        <div class="team-wrap">
            <div class="row g-lg-5">
                <?php foreach( $team_members as $team_member  ):
                $member_image = get_field('member_image', $team_member);
                $member_image_hover = get_field('member_image_hover', $team_member);
                $member_position = get_field('member_position', $team_member);
                if( $member_image ){
                    $get_to_know_member_image = $member_image;
                }
                else{
                    $get_to_know_member_image = get_stylesheet_directory_uri().'/images/team4.jpg';
                } ?>
                <div class="col-md-4 col-lg-3 team-member">
                    <div class="team-member-wrap">
                        <?php if($enable_team_link){ ?>
                            <a href="<?= get_the_permalink($team_member); ?>" class="member-link">
                        <?php } ?>
                        <div class="member-img <?php if( !empty($member_image_hover) ){echo "img-hover";}?>">
                            <img src="<?php echo $get_to_know_member_image; ?>" alt="<?= $team_member->post_title; ?>" class="img-fluid main-img" />
                            <?php if( !empty($member_image_hover) ){ ?>
                                <img src="<?php echo $member_image_hover; ?>" class="img-fluid hover-img" alt="<?= $team_member->post_title; ?>" />
                            <?php } ?>
                        </div>
                        <?php if($enable_team_link){ ?>
                            </a>
                        <?php } ?>
                        <div class="member-details">
                            <?php if($enable_team_link){ ?>
                                <a href="<?= get_the_permalink($team_member); ?>" class="member-link">
                            <?php } ?>
                            <h4 class="member-name"><?php echo $team_member->post_title; ?></h4>
                            <?php if( !empty($member_position) && $show_position ){ ?>
                                <h6 class="designation"><?= $member_position; ?></h6>
                            <?php }
                            if( !empty($member_company) && $show_company ){ ?>
                                <p><?= $member_company; ?></p>
                            <?php }
                            if($enable_team_link){ ?>
                                </a>
                            <?php }
                            $facebook = get_field('member_facebook', $team_member);
                            $twitter = get_field('member_twitter', $team_member);
                            $linkedin = get_field('member_linkedin', $team_member);
                            $member_phone = get_field('member_phone', $our_member); 
                            $member_email = get_field('member_email', $our_member); 
                            if( $show_social && ($facebook || $twitter || $linkedin || $member_phonea || $member_email ) ){ ?>
                            <div class="social-nav">
                                <?php 
                                if( !empty($facebook) ){ 
                                    ?><a href="<?php echo $facebook; ?>" target="_blank"><i aria-label="Facebook" class="fa fa-facebook-square" aria-hidden="true"></i></a><?php 
                                }
                                if( !empty($twitter) ){ 
                                    ?><a href="<?php echo $twitter; ?>" target="_blank"><i aria-label="Twitter (X)" class="fa fa-twitter" aria-hidden="true"></i></a><?php 
                                }
                                if( !empty($linkedin) ){
                                    ?><a href="<?php echo $linkedin; ?>" target="_blank"><i aria-label="LinkedIn" class="fa fa-linkedin-square" aria-hidden="true"></i></a><?php 
                                }
                                if( !empty($member_phone) ){ 
                                    ?><a href="tel:<?= $member_phone; ?>" target="_blank" title="<?= $member_phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a><?php
                                }
                                if( !empty($member_email) ){
                                    ?><a href="mailto:<?= $member_email; ?>" target="_blank" title="<?= $member_email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php
                                }
                                ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>