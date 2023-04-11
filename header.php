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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	$header_custom_css = get_field('header_custom_css', 'option');
	
	if( !empty($header_custom_css) ){

		echo '<style>'. $header_custom_css .'</style>';
	} ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar" class="">


			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>
			<div class="top-nav">
				<div class="container">
					<div class="client-area-wrap">						
						<div class="dropdown">
							<button class="dropdown-toggle client-area-anchor" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
								Client Area <i class="fa fa-angle-down" aria-hidden="true"></i>
							</button>							
							<?php 
							wp_nav_menu( array(
								'menu_class' => 'dropdown-menu',
								'container' => false,
								'fallback_cb' => false,
								'theme_location' => 'client-area', 
							) ); ?> 
						</div>
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
					</div>

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
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
								</li>
							<?php }

							if( !empty($linkedin) ){ ?>
								<li>
									<a href="<?= $linkedin; ?>" target="_blank">
										<i class="fa fa-linkedin-square" aria-hidden="true"></i>
									</a>
								</li>
							<?php } ?>
						</ul>
					</nav>						
				</div>
			</div>
			<?php get_template_part('global-templates/navbar', $navbar_type . '-' . $bootstrap_version); ?>
		</header>