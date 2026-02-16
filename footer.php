<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
$container = get_theme_mod('understrap_container_type');
get_template_part('sidebar-templates/sidebar', 'footerfull');

$footer_logo = get_field('footer_logo', 'options');
$footer_text = get_field('footer_text', 'options');
$column_1_title = get_field('column_1_title', 'options') ? get_field('column_1_title', 'options') : 'Who We Are';
$column_2_title = get_field('column_2_title', 'options') ? get_field('column_2_title', 'options') : 'Contact Us';
$column_3_title = get_field('column_3_title', 'options') ? get_field('column_3_title', 'options') : 'Follow Us On';
$column_4_title = get_field('column_4_title', 'options') ? get_field('column_4_title', 'options') : 'Helpful Links';

$footer_shape_color_1 = get_field('footer_shape_color_1', 'options');
$footer_shape_color_2 = get_field('footer_shape_color_2', 'options');

$company_phone = get_field('company_phone', 'options');
$company_email = get_field('company_email', 'options');

$facebook = get_field('facebook', 'options');
$twitter = get_field('twitter', 'options');
$linkedin = get_field('linkedin', 'options');
$instagram = get_field('instagram', 'options');
$youtube = get_field('youtube', 'options');
$google_my_business = get_field('google_my_business', 'options');
$threads = get_field('threads', 'options');

$copyright_information = get_field('copyright_information', 'options'); ?>
<?php
echo get_field('custom_embed_code_after_body', 'options');
?>
<footer>
	<svg xmlns="http://www.w3.org/2000/svg" width="2000" viewBox="0 0 1920 523.414" class="footer-shape-blue">
		<path data-name="Path 152" d="M0-24.427s348.259,76.692,963.854,0,956.146,0,956.146,0V464.9H0Z" transform="translate(0 58.512)" fill="<?php echo $footer_shape_color_1; ?>" />
	</svg>
	<svg xmlns="http://www.w3.org/2000/svg" width="2000" viewBox="0 0 1920 523.414" class="footer-shape-yellow">
		<path data-name="Path 153" d="M0-13.07s176.422-27.809,673.333,0S1920-29.939,1920-29.939V493.474H0Z" transform="translate(0 29.939)" fill="<?php echo $footer_shape_color_2; ?>" />
	</svg>
	<div class="shape-color primary-bg" style="background-color: <?php echo $footer_shape_color_1; ?>;">
	</div>

	<div class="container">
		<div class="row footer-wrap mb-5 pb-5">
			<div class="col-sm-12 d-flex align-items-center justify-content-center">
				<div class="footer-logo">
					<?php if ($footer_logo): ?>
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row footer-wrap">
			<div class="col col-md-9">
				<div class="row">
					<div class="col">
						<?php if ($column_1_title): echo '<h5>' . $column_1_title . '</h5>';
						endif; ?>
						<div class="footer-content">
							<?php echo $footer_text; ?>
						</div>
					</div>
					<div class="col">
						<?php if ($column_2_title): echo '<h5>' . $column_2_title . '</h5>';
						endif; ?>
						<nav class="contact-details">
							<ul>
								<?php if (!empty($company_phone)) { ?>
									<li>
										<a href="tel:<?php echo $company_phone; ?>" target="_blank">
											<i class="fa fa-phone" aria-hidden="true"></i><?php echo $company_phone; ?>
										</a>
									</li>
								<?php }

								if (!empty($company_email)) { ?>
									<li>
										<a href="mailto:<?php echo $company_email; ?>" target="_blank">
											<i class="fa fa-envelope" aria-hidden="true"></i><?php echo $company_email; ?>
										</a>
									</li>
								<?php
								}
								if (!empty($company_address)) { ?>
									<li><a href="https://maps.google.com?q=<?php echo urlencode($company_address); ?>" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $company_address; ?></a></li>
								<?php
								}
								?>
							</ul>
						</nav>
					</div>
					<div class="col">
						<?php if ($column_3_title): echo '<h5>' . $column_3_title . '</h5>';
						endif; ?>
						<nav class="social-nav">
							<ul>
								<?php if (!empty($facebook)) { ?>
									<li>
										<a href="<?php echo $facebook; ?>" target="_blank">
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
										</a>
									</li>
								<?php }

								if (!empty($twitter)) { ?>
									<li>
										<a href="<?php echo $twitter; ?>" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
												<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
											</svg>
										</a>
									</li>
								<?php }

								if (!empty($linkedin)) { ?>
									<li>
										<a href="<?php echo $linkedin; ?>" target="_blank">
											<i class="fa fa-linkedin-square" aria-hidden="true"></i>
										</a>
									</li>
								<?php }

								if (!empty($instagram)) { ?>
									<li>
										<a href="<?php echo $instagram; ?>" target="_blank">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								<?php }

								if (!empty($youtube)) { ?>
									<li>
										<a href="<?php echo $youtube; ?>" target="_blank">
											<i class="fa fa-youtube-square" aria-hidden="true"></i>
										</a>
									</li>
								<?php }

								if (!empty($google_my_business)) { ?>
									<li>
										<a href="<?php echo $google_my_business; ?>" target="_blank">
											<i class="fa fa-building" aria-hidden="true"></i>
										</a>
									</li>
								<?php } ?>

							</ul>
						</nav>
					</div>
				</div>
				<div class="row footer-newsletter">

					<?php if (get_field('enable_footer_newsletter', 'options')):
						$newsletter_title = get_field('newsletter_title', 'options');
						$newsletter_content = get_field('newsletter_content', 'options');
						$newsletter_gravity_forms = get_field('newsletter_gravity_forms', 'options');
					?>
						<div class="col col-4">
							<div class="full-width-wysiwyg text-left">
								<div class="editor-design">

									<?php if (!empty($newsletter_title)) { ?>

										<h2><?= $newsletter_title; ?></h2>
									<?php }

									echo $newsletter_content; ?>
								</div>
							</div>
						</div>
						<div class="col">
							<?php
							if (!empty($newsletter_gravity_forms)) {
								echo do_shortcode('[gravityform id="' . $newsletter_gravity_forms . '" title="false"]');
							}
							?> 
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col col-md-3">
				<?php
				if ($column_4_title): echo '<h5>' . $column_4_title . '</h5>';
				endif;
				wp_nav_menu(
					array(
						'container'		  => 'nav',
						'theme_location'  => 'footer-menu',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'fallback_cb'     => '',
						'menu_id'         => 'footer-menu'
					)
				); ?>
			</div>
		</div>

		<div class="social-wrap footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="copyright-wrap" style="color:<?php echo get_field('copyright_color', 'options') ? get_field('copyright_color', 'options') : '#fefefe'; ?>;">
							<?php echo do_shortcode($copyright_information); ?> | <a style="color:<?php echo get_field('copyright_color', 'options') ? get_field('copyright_color', 'options') : '#fefefe'; ?>;" target="_blank" href="https://www.bizinkonline.com"><?php _e('Website By Bizink', 'wave-theme'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page we need this extra closing tag here -->
<?php
wp_footer();
echo get_field('custom_embed_code_-_footer', 'options');
?>
</body>

</html>