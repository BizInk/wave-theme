<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
get_template_part('global-templates/inner-banner');

$reviewer_image = get_field('reviewer_image');
$reviewer_image = !empty($reviewer_image) ? $reviewer_image : get_stylesheet_directory_uri() . '/images/testimonial-default.jpg';
$reviewer_name = get_field('reviewer_name');
$reviewer_designation = get_field('reviewer_designation');
$reviewer_youtube = get_field('reviewer_youtube');
$rating_count = get_field('rating_count');
?>
<section class="single-testimonial-section comman-padding">
    <div class="container">        
        <div class="client-video">
            <div class="img-wrp">
                <a href="<?php if(!empty($reviewer_youtube)) { echo $reviewer_youtube; } else { echo "#"; } ?>" target="" data-fancybox="" tabindex="0"> 
                    <img src="<?= $reviewer_image; ?>" alt="client-video">
                </a>
            </div>
        </div>
        <div class="default-content">

            <?php if( !empty($reviewer_name) ){ ?>
                
                <h4><?= $reviewer_name; ?></h4>
            <?php }

            if( !empty($reviewer_designation) ){ ?>
                
                <i><?= $reviewer_designation; ?></i>
            <?php } ?>

            <div class="rate">
                <?php if( !empty($rating_count) ){

                    luca_star_rating($rating_count);
                } ?>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
<style type="text/css">
    .added-class::before {
      content:none !important;
    }
</style>
<script type="text/javascript">
    jQuery( document ).ready(function() {
        
        var youtube_link = jQuery('.img-wrp a').attr('href');

        var src = jQuery('.img-wrp img').attr('src'); //"images/banner/Penguins.jpg"
        var arr = src.split('/');      //["images","banner","Penguins.jpg"]
        var file = arr[arr.length - 1]; //Penguins.jpg
        var image_name = file.split('.')[0];  // "Penguins"

        

        if(youtube_link == "#"){
            console.log(youtube_link);
            jQuery(".img-wrp").addClass('added-class');
        }

        if(image_name == "testimonial-default"){
           //  console.log(image_name);
            jQuery(".img-wrp").addClass('added-class');
        }
  });
</script>