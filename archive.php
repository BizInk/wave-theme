<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
get_template_part('global-templates/inner-banner');

?>
<section class="four-col-team-section blog-listing-section comman-padding">
  <div class="container">
    <div class="team-wrap blog-posts-cont">
      <?php
      if (have_posts()):
            $enable_categories = get_field('enable_categories', 'option') ?? true;
			if($enable_categories && is_category()):
			$categories = get_categories();
        ?>
				<div class="row">
					<div class="col m-4 pb-4 text-center category_links">
						<?php
						$count = count($categories);
						$i = 0;
                        $c = get_the_category();
                        $current_category = $c[0];
						foreach($categories as $category) {
							$i++;
                            $selected = '';
                            if($current_category->term_id == $category->term_id){
                                $selected = 'active';
                            }
							echo sprintf( 
								'<a class="category_link btn btn-sm m-1 %4$s" href="%1$s" alt="%2$s">%3$s</a>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_attr( sprintf( __( 'View all posts in %s', 'wave-theme' ), $category->name ) ),
								esc_html( $category->name ),
                                esc_html($selected)
							);
						}		
						?>
					</div>
				</div>
				<?php
				endif;
      ?>
      <div class="row g-lg-5">
        <?php
          while (have_posts()):
            the_post();
            $post_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/images/default.jpg';
        ?>
            <div class="col-md-6 col-xl-4 team-member">
              <div class="team-member-wrap">
                <div class="member-details">
                  <a href="<?php the_permalink(); ?>" class="member-img">
                    <img src="<?= $post_image; ?>" alt="<?php the_title(); ?>">
                  </a>
                  <?php
                  the_title('<h4 class="member-name"><a href="' . get_the_permalink() . '">', '</a></h4>');
                  the_excerpt();
                  ?>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          ?>
          <div class="post-navigation">
            <?php
            the_posts_pagination(array(
              'mid_size'  => 2,
              'prev_text' => __('&lt;', 'wave-theme'),
              'next_text' => __('&gt;', 'wave-theme'),
            ));
            ?>
          </div>
        <?php
        else:
        ?>
          <div class="row">
            <div class="col-12">
              <h2 class="text-center"><?php echo _e('No Posts Found', 'wave-theme'); ?></h2>
            </div>
          </div>
        <?php
        endif;
        ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>