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
		<path id="Path_152" data-name="Path 152" d="M0-24.427s348.259,76.692,963.854,0,956.146,0,956.146,0V464.9H0Z" transform="translate(0 58.512)" fill="<?= $footer_shape_color_1; ?>"/>
	</svg>
	<svg xmlns="http://www.w3.org/2000/svg" width="2000" viewBox="0 0 1920 523.414" class="footer-shape-yellow">
		<path id="Path_153" data-name="Path 153" d="M0-13.07s176.422-27.809,673.333,0S1920-29.939,1920-29.939V493.474H0Z" transform="translate(0 29.939)" fill="<?= $footer_shape_color_2; ?>"/>
	</svg>
	<div class="shape-color primary-bg" style="background-color: <?= $footer_shape_color_1; ?>;">
	</div>
	<div class="container">
		<div class="row footer-wrap mb-5 pb-5">
			<div class="col-sm-12 d-flex align-items-center justify-content-center">
				<div class="footer-logo">
					<?php if($footer_logo): ?><a href="<?= site_url(); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"></a><?php endif; ?>
				</div>	
			</div>
		</div>
		<div class="row footer-wrap">
			<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
				<h5><?= ($column_1_title ? $column_1_title : ''); ?></h5>
				<div class="footer-content">
					<?= $footer_text; ?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
				<h5><?= ($column_2_title ? $column_2_title : ''); ?></h5>
				<nav class="contact-details">
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
				</nav>
			</div>
			<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
				<h5><?= ($column_3_title ? $column_3_title : ''); ?></h5>
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
			<div class="col-md-6 col-lg-2">
			<h5><?= ($column_4_title ? $column_4_title : ''); ?></h5>
				<?php
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
	</div>
	<div class="social-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright-wrap" style="color:<?php echo get_field('copyright_color', 'options') ? get_field('copyright_color', 'options') : '#fefefe'; ?>;">
						<?= do_shortcode($copyright_information); ?> | <a style="color:<?php echo get_field('copyright_color', 'options') ? get_field('copyright_color', 'options') : '#fefefe'; ?>;" href="https://www.bizinkonline.com"><?php _e('Website By Bizink','wave-theme');?></a>
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
<script type="text/javascript">
	var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	function fetch_blog_posts(category='', pagenumber=1){
		// Check if we are on correct page
		if( jQuery('.blog-posts-cont').length ){
			if( pagenumber == 1 ){

				jQuery('.blog-posts-cont').html('Loading...');
			}else{
				jQuery('.load-more').text('Loading...');
			}
           
			jQuery.ajax({
				type : "post",
				url  :  ajaxurl,
				data : {action: "fetch_blog_posts", category: category, pagenumber: pagenumber},
				success: function(response) {
					var result = JSON.parse(response);

					if( pagenumber == 1 ){
						
						jQuery('.blog-posts-cont').html(result.content);
					}else{
						jQuery('.load-more').remove();
						jQuery('.blog-posts-cont .row').append(result.content);
					}
					jQuery('.blog-posts-cont').append(result.load_more);
				}
			}); 
		}
	}
	
	fetch_blog_posts(); 

	jQuery(document).on('click', '.filter-wrap li', function(e){
		e.preventDefault();

		jQuery('.filter-wrap li.active').removeClass('active');
		jQuery(this).addClass('active');

		fetch_blog_posts(jQuery(this).attr('data-cat'));

		console.log("data cat ", jQuery(this).attr('data-cat') )
	});

	jQuery(document).on('click', '.load-more', function(e){
		e.preventDefault();

		fetch_blog_posts(jQuery('.filter-wrap li.active').attr('data-cat'), jQuery(this).attr('data-pagenumber'));
	});
</script>
</body>
</html>