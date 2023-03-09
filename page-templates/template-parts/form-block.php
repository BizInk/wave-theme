<?php
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

$form_title = get_sub_field('form_title');
$form_content = get_sub_field('form_content');
$gravity_forms = get_sub_field('gravity_forms');
$form_show_title = get_sub_field('form_show_title');
$form_show_title_var = $form_show_title ? 'true' : 'false';
$show_gravity_form = get_sub_field('show_form_gravity');
?>
<!-- form-section-start -->
<section class="call-to-action-section<?= $general_class; ?> book-appointment-section">
  <div class="full-width-wysiwyg text-center">
    <div class="container">
      <div class="editor-design">
        <?php if( $form_title ) { ?>
        <h2><?php echo $form_title; ?></h2>
        <?php }
        if( $form_content ) { ?>
        <p><?php echo $form_content; ?></p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-center comman-callto-action">      
      <?php } ?>
      <!-- <button class="btn navyblue-btn mt-2">Signup</button>-->

      <?php 
          if(!empty($show_gravity_form)){
             if( !empty($gravity_forms) ) {
                echo do_shortcode('[gravityform id="'. $gravity_forms .'" title="'. $form_show_title_var .'"]');
            }
          }
      ?>
    </div>
  </div>
</section>
<!-- form-section-end -->