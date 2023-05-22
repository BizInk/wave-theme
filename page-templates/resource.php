<?php

/**
 * Template Name: Resource
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

get_template_part('global-templates/inner-banner');

$content_topics_small_title = get_field('content_topics_small_title');
$content_topics_title = get_field('content_topics_title');
$content_topics_content = get_field('content_topics_content');
$content_types_small_title = get_field('content_types_small_title');
$content_types_title = get_field('content_types_title');
$content_types_content = get_field('content_types_content');

$ppp = 90;
$content_topics = get_terms(array(
    'taxonomy' => 'content-topic',
    'hide_empty' => false,
));

if( !empty($content_topics) ){ ?>

    <section class="infobox-section resource-infobox comman-padding">
        <div class="full-width-wysiwyg text-center">
            <div class="container">
                <div class="editor-design">
                    
                    <?php if( !empty($content_topics_small_title) ){ ?>
                        
                        <h6><?= $content_topics_small_title; ?></h6>
                    <?php }
                    
                    if( !empty($content_topics_title) ){ ?>
                        
                        <h2><?= $content_topics_title; ?></h2>
                    <?php }

                    echo $content_topics_content; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="infobox-warp">
                <div class="row gy-5 g-md-5">

                    <?php
                    $topics_counter = 1;

                    foreach( $content_topics as $content_topic ){

                        $icon = get_field('content_topic_icon', $content_topic); ?>

                        <a href="<?= get_term_link($content_topic); ?>" class="col-md-6 col-lg-4 text-decoration-none" <?= $topics_counter > $ppp ? 'style="display:none;"' : ''; ?> data-pagenumber="topics<?= ceil($topics_counter/$ppp); ?>">
                            <div class="info-box text-center h-100">
                                
                                <?php if( !empty($icon) ){ ?>
                                    
                                    <img src="<?php echo $icon; ?>" class="img-fluid" alt="">
                                <?php } ?>
                                <h4><?= $content_topic->name; ?></h4>

                                <?php if( !empty($content_topic->description) ){ ?>

                                    <div class="info-description">
                                        <p><?= do_shortcode($content_topic->description); ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </a>
                    <?php $topics_counter++;
                    } ?>
                </div>

                <?php if( count($content_topics) > $ppp ){ ?>

                    <a href="javascript:void(0);" class="btn red-btn topics-load-more" data-pagenumber="1">Load More</a>
                <?php } ?>

                <script>
                    // Script to load more topics
                    jQuery(document).on('click', '.topics-load-more', function(e){
                        e.preventDefault();

                        var pagenumber = parseInt(jQuery(this).attr('data-pagenumber'));
                        pagenumber = parseInt(pagenumber+1);

                        jQuery('[data-pagenumber="topics'+ pagenumber +'"]').show();

                        jQuery(this).attr('data-pagenumber', pagenumber);

                        pagenumber = parseInt(pagenumber+1);
                        
                        if( jQuery('[data-pagenumber="topics'+ pagenumber +'"]').length == 0 ){

                            jQuery(this).remove();
                        }
                    });
                </script>
            </div>
        </div>
    </section>
<?php }

$content_types = get_terms(array(
    'taxonomy' => 'content-type',
    'hide_empty' => false,
));

if( !empty($content_types) ){ ?>

    <section class="infobox-section resource-infobox checklist-infobox comman-padding">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1226" class="shape-light-grey">
                <g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(0 -4941)" clip-path="url(#clip-path)">
                    <path id="Path_150" data-name="Path 150" d="M0,39.554S564.9-44.391,1127.7-44.391,2251.2,39.554,2251.2,39.554s375.088,1090.965,20.686,1386.133-826.348,31.227-1326.069,123.258S0,1425.688,0,1425.688Z" transform="translate(-252 4985.235)" fill="#f9f9f9"></path>
                </g>
            </svg>
            <div class="shape-color" style="background-color: #f9f9f9;"></div>
        <div class="full-width-wysiwyg text-center">
            <div class="container">
                <div class="editor-design">
                    
                    <?php if( !empty($content_types_small_title) ){ ?>
                        
                        <h6><?= $content_types_small_title; ?></h6>
                    <?php }

                    if( !empty($content_types_title) ){ ?>
                        
                        <h2><?= $content_types_title; ?></h2>
                    <?php }

                    echo $content_types_content; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="infobox-warp">
                <div class="row gy-5 g-md-5">

                    <?php
                    $types_counter = 1;
                    foreach( $content_types as $content_type ){ ?>

                        <div class="col-md-6 col-lg-4" <?= $types_counter > $ppp ? 'style="display:none;"' : ''; ?> data-pagenumber="types<?= ceil($types_counter/$ppp); ?>">
                            <div class="info-box text-center h-100">                        
                                <h4><?= $content_type->name; ?></h4>
                                <div class="info-description">

                                    <?php if( !empty($content_type->description) ){ ?>

                                        <p><?= do_shortcode($content_type->description); ?></p>
                                    <?php } ?>
                                </div>
                                <a href="<?= get_term_link($content_type); ?>" class="btn">View more</a>
                            </div>
                        </div>
                    <?php $types_counter++;
                    } ?>
                </div>

                <?php if( count($content_types) > $ppp ){ ?>

                    <a href="javascript:void(0);" class="btn red-btn types-load-more" data-pagenumber="1">Load More</a>
                <?php } ?>

                <script>
                    // Script to load more types
                    jQuery(document).on('click', '.types-load-more', function(e){
                        e.preventDefault();

                        var pagenumber = parseInt(jQuery(this).attr('data-pagenumber'));
                        pagenumber = parseInt(pagenumber+1);

                        jQuery('[data-pagenumber="types'+ pagenumber +'"]').show();

                        jQuery(this).attr('data-pagenumber', pagenumber);

                        pagenumber = parseInt(pagenumber+1);
                        
                        if( jQuery('[data-pagenumber="types'+ pagenumber +'"]').length == 0 ){

                            jQuery(this).remove();
                        }
                    });
                </script>
            </div>
        </div>
    </section>
<?php
}

get_footer(); ?>