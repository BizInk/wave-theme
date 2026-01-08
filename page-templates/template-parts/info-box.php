<!-- infobox-section-start -->
<?php
$general_settings = get_sub_field('general_settings');
$info_box_shape_color = get_sub_field('info_box_shape_color');
$info_box_small_title = get_sub_field('info_box_small_title');
$info_box_title = get_sub_field('info_box_title');
$info_box_content = get_sub_field('info_box_content');
$info_box_columns = get_sub_field('info_box_columns');
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

	$general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

	$general_class .= ' comman-margin';
}

$show_wave = get_sub_field('show_wave') ? get_sub_field('show_wave') : true;

if( have_rows('information_box') ):
	?>
	<section class="infobox-section<?= $general_class; ?>" <?php if( $show_wave ): ?> style="background-color: <?= $info_box_shape_color; ?>;" <?php endif; ?>>
		<?php if( $show_wave ): ?>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2068.956 1146.139" class="shape-blue">
				<path id="Path_149" data-name="Path 149" d="M0,344S291.253,28.3,609.423,28.3s472.592,157.527,824.791,157.527c3.522,0,415.688-25.288,545.152-180.776s80.514,1065.735,80.514,1065.735-362.5-94.041-651.086-65.67c-229.912,22.6-463.99,132.394-680.577,132.394C238.2,1137.506,0,1034.171,0,1034.171Z" transform="translate(0 8.633)" fill="<?= $info_box_shape_color; ?>"/>
			</svg>
			<div class="shape-color primary-bg d-block d-lg-none" style="background-color: <?= $info_box_shape_color; ?>;">
			</div>
		<?php endif; ?>
		<div class="full-width-wysiwyg text-center">
			<div class="container">
				<div class="editor-design">

					<?php if( !empty($info_box_small_title) ){ ?>

						<h6><?= $info_box_small_title; ?></h6>
					<?php }

					if( !empty($info_box_title) ){ ?>
						
						<h2><?= $info_box_title; ?></h2>
					<?php }

					echo $info_box_content; ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="infobox-warp">
				<div class="row gy-5 g-md-5">
					<?php if( have_rows('information_box') ):

						while( have_rows('information_box') ):
							the_row();

							$info_image = get_sub_field('info_image');
							$info_title = get_sub_field('info_title');
							$info_description = get_sub_field('info_description');
							$info_button = get_sub_field('info_button');
							?>
							<div class="<?php echo $info_box_columns; ?>">
								<div class="info-box text-center h-100">

									<?php if( !empty($info_image) ) { ?>

										<img src="<?php echo $info_image; ?>" class="img-fluid" alt="">
									<?php }

									if( !empty($info_title) ) { ?>

										<h4><?php echo $info_title; ?></h4>
									<?php }

									if( !empty($info_description) ) { ?>

										<div class="info-description"><?php echo $info_description; ?></div>
									<?php }

									if( !empty($info_button['url']) && !empty($info_button['title']) ) { ?>
										
										<a href="<?php echo $info_button['url']; ?>" class="btn btn-sm navyblue-btn mt-2"><?php echo $info_button['title']; ?></a>
									<?php } ?>
								</div>
							</div>
						<?php endwhile;
					endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- infobox-section-end -->