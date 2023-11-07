<?php
$general_settings = get_sub_field('general_settings');
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

    $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

    $general_class .= ' comman-margin';
}

$latest_posts_small_title = get_sub_field('latest_posts_small_title');
$latest_posts_title = get_sub_field('latest_posts_title');
$latest_posts_content = get_sub_field('latest_posts_content');
$latest_posts_button = get_sub_field('latest_posts_button');
$latest_posts_background_color = get_sub_field('latest_posts_background_color');

$latest_posts_args = array(
    'post_type' => 'post',
    'posts_per_page'  => 3,
    'order' => 'DESC',
    'post_status' => 'publish',
);

$latest_posts_query = new WP_Query($latest_posts_args);

if ( $latest_posts_query->have_posts() ) { ?>

    <section class="four-col-team-section<?= $general_class; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1226" class="shape-light-grey">
            <g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(0 -4941)" clip-path="url(#clip-path)">
                <path id="Path_150" data-name="Path 150" d="M0,39.554S564.9-44.391,1127.7-44.391,2251.2,39.554,2251.2,39.554s375.088,1090.965,20.686,1386.133-826.348,31.227-1326.069,123.258S0,1425.688,0,1425.688Z" transform="translate(-252 4985.235)" fill="<?= $latest_posts_background_color; ?>"/>
            </g>
        </svg>
        <div class="shape-color" style="background-color: <?= $latest_posts_background_color; ?>;"></div>

        <div class="full-width-wysiwyg text-center">
            <div class="container">
                <div class="editor-design">

                    <?php if( !empty($latest_posts_small_title) ){ ?>

                        <h6><?= $latest_posts_small_title; ?></h6>
                    <?php }

                    if( !empty($latest_posts_title) ){ ?>

                        <h2><?= $latest_posts_title; ?></h2>
                    <?php }

                    echo $latest_posts_content; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-wrap">
                <div class="row g-lg-5">
                    <?php while ( $latest_posts_query->have_posts() ) {

                        $latest_posts_query->the_post();
                        $excerpt = get_the_excerpt();
                        $latest_posts_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : DEFAULT_IMG; ?>

                        <div class="col-md-6 col-xl-4 team-member">
                            <div class="team-member-wrap">
                                <a href="<?php the_permalink(); ?>" class="member-img">
                                    <img src="<?= $latest_posts_image; ?>" alt="member-img">
                                </a>
                                <div class="member-details">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="member-name"><?php the_title(); ?></h4>
                                </a>
                                    <?php if( !empty($excerpt) ){ ?>
                                        
                                        <p><?php echo wp_trim_words($excerpt, 20, ''); ?></p>
                                    <?php } ?>
                                    <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>

            <?php if( !empty($latest_posts_button['url']) && !empty($latest_posts_button['title']) ){ ?>

                <a href="<?= $latest_posts_button['url']; ?>" class="btn" target="<?= $latest_posts_button['target']; ?>"><?= $latest_posts_button['title']; ?></a>
            <?php } ?>
        </div>
    </section>
<?php } ?>