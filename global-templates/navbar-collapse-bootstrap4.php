<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


<?php if ( 'container' === $container ) : ?>
	<div class="container">
<?php endif; ?>

	<!-- Your site title as branding in the menu -->
		<?php $main_logo = get_field('logo','option') ?>
		<?php if ( empty($main_logo)) { ?>

			<?php if ( is_front_page() && is_home() ) : ?>

				<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

			<?php else : ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

			<?php endif; ?>

			<?php
		} else { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo $main_logo; ?>"> </a>
	<?php	}
		?>
		<!-- end custom logo -->

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		
		$header_client_button = get_field('header_client_button', 'option');
		$header_client_button2 = get_field('header_client_button2', 'option');

		if( !empty($header_client_button['url']) && !empty($header_client_button['title']) ){
		?>

			<a href="<?= $header_client_button['url']; ?>" class="btn" target="<?= $header_client_button['target']; ?>"><?= $header_client_button['title']; ?></a>
		<?php }

		if( !empty($header_client_button2['url']) && !empty($header_client_button2['title']) ){
		?>

			<a href="<?= $header_client_button2['url']; ?>" class="btn" target="<?= $header_client_button2['target']; ?>"><?= $header_client_button2['title']; ?></a>
		<?php } ?>

<?php if ( 'container' === $container ) : ?>
	</div><!-- .container -->
<?php endif; ?>

</nav><!-- .site-navigation -->
