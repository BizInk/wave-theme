<?php
/**
 * The template for displaying search results pages
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
get_template_part('global-templates/inner-banner');

?>

<div class="wrapper" id="search-wrapper">
	<div class="search-page-section comman-margin">
		<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<div class="row">

				<!-- Do the left sidebar check and opens the primary div -->
				<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>			
					<?php if ( have_posts() ) : ?>					
						
						<?php /* Start the Loop */ ?>
						<?php
						while ( have_posts() ) :
							the_post();

							/*
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'search' );
						endwhile;
						?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>			
				<!-- The pagination component -->
				<?php understrap_pagination(); ?>

				<!-- Do the right sidebar check -->				

			</div><!-- .row -->

		</div><!-- #content -->
	</div>
</div><!-- #search-wrapper -->

<?php
get_footer();
