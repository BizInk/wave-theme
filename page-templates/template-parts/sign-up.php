<?php 
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

?>
<!-- signup-section-start-->

<section class="signup-section<?= $general_class; ?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-7">
        <div class="text-left signup-content">
          <?php if(get_sub_field('sign_up_sub_title')) {  ?>
          <h4 class="dark"><?php echo get_sub_field('sign_up_sub_title'); ?></h4>
        <?php } ?>
         <?php if(get_sub_field('sign_up_title')) {  ?>
          <h2><?php echo get_sub_field('sign_up_title'); ?></h2>
          <?php } ?>
          <?php if(get_sub_field('sign_up_description')) {  ?>
          <div class="editor-design">
            <?php echo get_sub_field('sign_up_description'); ?>
          </div>
           <?php } ?>
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="form-wrap">
           <?php if(get_sub_field('sign_up_form_title')) {  ?>
            <h2 class="white"><?php echo get_sub_field('sign_up_form_title'); ?></h2>  
              <?php } ?>
              <?php
              $form_shortcode  = get_sub_field('form_shortcode');
              ?>

            <?php if( $form_shortcode ) { echo do_shortcode($form_shortcode); } ?>           
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- signup-section-end-->