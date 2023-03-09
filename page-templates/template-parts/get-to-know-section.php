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
                $member_position = get_field('member_position', $team_member);
                if( $member_image ){
                $get_to_know_member_image = $member_image;
                }else{
                $get_to_know_member_image = get_stylesheet_directory_uri().'/images/team4.jpg';
                } ?>
                <div class="col-md-4 col-lg-3 team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo $get_to_know_member_image; ?>" alt="member-img">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name"><?php echo $team_member->post_title; ?></h4>
                            <h6 class="designation"><?php echo $member_position ? $member_position : 'Web Designer'; ?></h6>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>