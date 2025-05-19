<?php
$general_settings = get_sub_field('general_settings');  
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

	$general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

	$general_class .= ' comman-margin';
}

if( have_rows('column_section') ):
	?>
	<section class="multi-col-section<?= $general_class; ?>">
		<div class="container">
			<div class="row">
				<?php
				while( have_rows('column_section') ):
					the_row();
					$title_align = get_sub_field('align_title') ? get_sub_field('align_title') : 'start';
					if($title_align == 'left'){
						$title_align = 'start';
					} else if($title_align == 'right'){
						$title_align = 'end';
					}
					$title_align_class = 'text-' . $title_align;

					?>
					<div class="col">
						<div class="col-content default-content">
							<?php if( get_sub_field('column_small_title') ) { ?>
								<h6 class="<?php echo $title_align_class;?>"><?php echo get_sub_field('column_small_title'); ?></h6>
							<?php }

							if( get_sub_field('column_title') ) { ?>
								<h2 class="<?php echo $title_align_class;?>"><?php echo do_shortcode(get_sub_field('column_title')); ?></h2>
							<?php }

							if( get_sub_field('column_content') ) {
								echo get_sub_field('column_content');
							} ?>
						</div>
					</div>					
					<?php
				endwhile;
				?>
			</div>
		</div>
	</section>
	<?php
endif;
?>