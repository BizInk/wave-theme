<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap5');
$navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
$company_phone = get_field('company_phone', 'options');
$company_email = get_field('company_email', 'options');
$facebook = get_field('facebook', 'options'); 
$twitter = get_field('twitter', 'options'); 
$linkedin = get_field('linkedin', 'options');
$instagram = get_field('instagram', 'options');
$youtube = get_field('youtube', 'options');
$google_my_business = get_field('google_my_business', 'options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php
	wp_head();
	$header_custom_css = get_field('header_custom_css', 'option');
	if( !empty($header_custom_css) ){
		echo '<style>'. $header_custom_css .'</style>';
	}
	echo get_field('custom_embed_code_head', 'options');
	?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">
		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar" class="">
			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'wave-theme'); ?></a>
			<div class="top-nav">
				<div class="container">
					<div class="client-area-wrap">
						<?php if(has_nav_menu('client-area')): ?>
						<div class="dropdown">
							<?php
								$locations = get_nav_menu_locations();
								$menu = wp_get_nav_menu_object( $locations['client-area'] );
							?>
							<button class="dropdown-toggle client-area-anchor" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								<?php echo $menu->name ? $menu->name : "Client Area"; ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
							</button>							
							<?php 
							wp_nav_menu( array(
								'menu_class' => 'dropdown-menu',
								'container' => false,
								'fallback_cb' => false,
								'theme_location' => 'client-area', 
							) ); ?> 
						</div>
						<?php endif; 
						$enable_search = get_field('website_search', 'option');
							if ($enable_search) {
							?>
								<div class="header-search-form">
									<?php get_search_form(); ?>
								</div>
							<?php }
							?>
						</div>
					
					<div class="header-contact">
						<ul>
							<?php if( !empty($company_phone) ){ ?>
								<li>
									<a href="tel:<?= $company_phone; ?>" target="_blank">
										<i class="fa fa-phone" aria-hidden="true"></i><?= $company_phone; ?>
									</a>
								</li>						
							<?php }
							
							if( !empty($company_email) ){ ?>
								<li>
									<a href="mailto:<?= $company_email; ?>" target="_blank">
										<i class="fa fa-envelope" aria-hidden="true"></i><?= $company_email; ?>
									</a>
								</li>
							<?php } ?>
						</ul>

						<!-- Social icons -->
						<nav class="social-nav">
							<ul>
								<?php if( !empty($facebook) ){ ?>
									<li>
										<a href="<?= $facebook; ?>" target="_blank">
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
										</a>
									</li>
								<?php }

								if( !empty($twitter) ){ ?>
									<li>
										<a href="<?= $twitter; ?>" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
												<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
											</svg>
											<!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
										</a>
									</li>
								<?php }

								if( !empty($linkedin) ){ ?>
									<li>
										<a href="<?= $linkedin; ?>" target="_blank">
											<i class="fa fa-linkedin-square" aria-hidden="true"></i>
										</a>
									</li>
								<?php } 

								if( !empty($instagram) ){ ?>
									<li>
										<a href="<?= $instagram; ?>" target="_blank">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
								<?php }

								if( !empty($youtube) ){ ?>
									<li>
										<a href="<?= $youtube; ?>" target="_blank">
											<i class="fa fa-youtube-square" aria-hidden="true"></i>
										</a>
									</li>
								<?php }
		
								if( !empty($google_my_business) ){ ?>
									<li>
										<a href="<?= $google_my_business; ?>" target="_blank">
											<i class="fa fa-building" aria-hidden="true"></i>
										</a>
									</li>
								<?php } ?>

							</ul>
						</nav>

					</div>

											
				</div>
			</div>
			<?php get_template_part('global-templates/navbar', $navbar_type . '-' . $bootstrap_version); ?>
		</header>
		<?php
		include get_stylesheet_directory() . '/inc/password-check.php';
		?>