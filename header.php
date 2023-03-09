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

$facebook_icon = get_field('facebook_icon', 'options'); 
$facebook = get_field('facebook', 'options'); 
$twitter_icon = get_field('twitter_icon', 'options'); 
$twitter = get_field('twitter', 'options'); 
$linkedin_icon = get_field('linkedin_icon', 'options'); 
$linkedin = get_field('linkedin', 'options'); 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
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
					<div class="header-contact">
						<ul>
							<?php if( !empty($company_phone) ){ ?>
								
								<li><a href="tel:<?= $company_phone; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon ionic-ios-call.png" class="img-fluid" alt=""><?= $company_phone; ?></a></li>						
							<?php }
							
							if( !empty($company_email) ){ ?>
							
								<li><a href="mailto:<?= $company_email; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail-ic.png" class="img-fluid" alt=""><?= $company_email; ?></a></li>
							<?php } ?>
						</ul>
					</div>

					<nav class="social-nav">
						<ul>
							<?php if( !empty($facebook) && !empty($facebook_icon['url']) ){ ?>
								
								<li><a href="<?= $facebook; ?>" target="_blank"><img src="<?php echo $facebook_icon['url']; ?>" class="img-fluid" alt="<?php echo $facebook_icon['alt']; ?>"></a></li>
							<?php }

							if( !empty($twitter) && !empty($twitter_icon['url']) ){ ?>
								
								<li><a href="<?= $twitter; ?>" target="_blank"><img src="<?php echo $twitter_icon['url']; ?>" class="img-fluid" alt="<?php echo $twitter_icon['alt']; ?>"></a></li>
							<?php }

							if( !empty($linkedin) && !empty($linkedin_icon['url']) ){ ?>
								
								<li><a href="<?= $linkedin; ?>" target="_blank"><img src="<?php echo $linkedin_icon['url']; ?>" class="img-fluid" alt="<?php echo $linkedin_icon['alt']; ?>"></a></li>
							<?php } ?>
						</ul>
					</nav>					
				</div>
			</div>
			<?php get_template_part('global-templates/navbar', $navbar_type . '-' . $bootstrap_version); ?>
		</header>