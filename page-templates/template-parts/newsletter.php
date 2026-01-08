<?php
$newsletter_background_color = get_sub_field('newsletter_background_color');
$newsletter_title = get_sub_field('newsletter_title');
$newsletter_content = get_sub_field('newsletter_content');
$gravity_forms = get_sub_field('gravity_forms');
?>
<section class="newsletter-section">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 391" class="shape-light-grey">
        <g id="Mask_Group_3" data-name="Mask Group 3" transform="translate(0 -6166)" clip-path="url(#clip-path)">
            <path id="Path_5615" data-name="Path 5615" d="M0,39.554S564.9-44.391,1127.7-44.391,2251.2,39.554,2251.2,39.554s375.088,1090.965,20.686,1386.133-826.348,31.227-1326.069,123.258S0,1425.688,0,1425.688Z" transform="translate(-252 4985.235)" fill="<?= $newsletter_background_color; ?>" />
        </g>
    </svg>
    <div class="shape-color" style="background-color: <?= $newsletter_background_color; ?>;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full-width-wysiwyg text-left">
                    <div class="editor-design">

                        <?php if (!empty($newsletter_title)) { ?>

                            <h2><?= $newsletter_title; ?></h2>
                        <?php }

                        echo $newsletter_content; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php 
                if( !empty( $gravity_forms ) ){
                    echo do_shortcode('[gravityform id="' . $gravity_forms . '" title="false"]');
                }
                ?>
            </div>
        </div>

    </div>
</section>