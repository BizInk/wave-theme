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
<!-- hero-section-start -->
<section class="banner-section light-blue-bg<?= $general_class; ?>">
  <div class="container">
    <?php if( have_rows('hero_section') ): ?>
      <?php while( have_rows('hero_section') ): the_row(); ?>
        <?php 
        $hero_title = get_sub_field('hero_title');
        $hero_description = get_sub_field('hero_description');
        $hero_button = get_sub_field('hero_button');
        $show_signup_form = get_sub_field('show_signup_form');
        $signup_form = get_sub_field('gravity_forms');
        $hero_image = get_sub_field('hero_image');
        $image_position = '';
        if(get_sub_field('image_position') == 'right'){
          $image_position = 'flex-md-row';
        } elseif(get_sub_field('image_position') == 'left'){
          $image_position = 'flex-md-row-reverse';
        }
        ?>
        <div class="row align-item-center <?php echo $image_position; ?> flex-column-reverse">
          <div class="col-md-6 banner-left mb-5 mb-md-0">
            <div class="banner-content-wrap <?php if(get_sub_field('image_position') == 'left') { echo "ms-auto"; } ?>">
              <?php if($hero_title) { ?>
                <h2><?php echo $hero_title; ?></h2>
              <?php } ?>
              <?php if($hero_description) { ?>
                <?php echo $hero_description; ?>
              <?php } ?>
              <?php if($hero_button['title']) {

                $toggle_modal = !empty($show_signup_form) ? 'data-bs-toggle="modal" data-bs-target="#signupModal"' : '';
                
                if( !empty($show_signup_form) && !is_user_logged_in() ){ ?>
                  
                  <a href="<?php echo $hero_button['url']; ?>" <?= $toggle_modal; ?> class="btn navyblue-btn mt-3"><?php echo $hero_button['title']; ?></a>
                <?php }
                } ?>
            </div>
          </div>
          <div class="col-md-6 banner-img mb-5 mb-md-0">
            <?php if($hero_image) { ?>
              <img src="<?php echo $hero_image; ?>" class="img-fluid" alt="">
            <?php } ?>
          </div>
        </div>

        <?php if( !empty($show_signup_form) ){ ?>
          
          <!-- Signup Modal -->
          <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered signup_modal">
              <div class="modal-content form-wrap"> 
                <div class="modal-header">                
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?= do_shortcode('[gravityform id="'. $signup_form .'" title="true"]'); ?>
                </div> 
              </div>
            </div>
          </div>
      <?php }
      endwhile; ?>
    <?php endif; ?>
  </div>
</section>