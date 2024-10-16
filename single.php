<?php

/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
get_template_part('global-templates/inner-banner');
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row justify-content-between">
			<div class="col-md-12 col-lg-7 col-xl-8">

				<main class="site-main" id="main">

					<?php
					while (have_posts()) {
						the_post();
						get_template_part('loop-templates/content', 'single'); 

					}
					get_template_part('global-templates/right-sidebar-check');
					?>

				</main><!-- #main -->

				<!-- Do the right sidebar check -->
			</div>
		</div><!-- .row -->

		<?php 
		$categories = wp_get_post_categories( get_the_id() );
		$related_args = array(
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'orderby'  => 'rand',
			'cat' => $categories,
		);

		$related_loop = new WP_Query( $related_args );

		if( $related_loop->have_posts() ){ ?>
		
			<section class="four-col-team-section comman-padding">
				<div class="text-left">
					<div class="container">
						<div class="editor-design mb-5">
							<h2><?php _e('Related Posts','wave-theme'); ?></h2>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="team-wrap">
						<div class="row g-lg-5">

							<?php

		                    while ( $related_loop->have_posts() ) {
		                        $related_loop->the_post();

		                        $post_content = get_the_content();
		                        $post_content = strip_tags($post_content);

		                        if ( strlen($post_content) > 100 ) {
		                            
		                            $post_content = substr($post_content, 0, 100); 
		                        } 

		                        $post_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/images/default.jpg';
		                        ?>

								<div class="col-md-6 col-xl-4 team-member">
									<div class="team-member-wrap">
										<a href="<?php the_permalink(); ?>" class="member-img">
											<img src="<?= $post_image; ?>" alt="member-img">
										</a>
										<div class="member-details">
											<a href="<?php the_permalink(); ?>">
												<h4 class="member-name"><?php the_title(); ?></h4>
											</a>

											<p><?= $post_content; ?></p>
											<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Read More','wave-theme'); ?></a>
										</div>
									</div>
								</div>
							<?php }
							wp_reset_query(); ?>						
						</div>
					</div>				
				</div>
			</section>
		<?php } ?>
	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
