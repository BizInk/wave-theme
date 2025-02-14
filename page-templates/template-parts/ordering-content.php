<?php
$general_settings = get_sub_field('general_settings');
$general_class = '';

if (in_array('Add Common Padding', $general_settings)) {
    $general_class .= ' comman-padding';
}

if (in_array('Add Common Margin', $general_settings)) {
    $general_class .= ' comman-margin';
}
// Ordering Content

$align_content = get_sub_field('align_content') ?: 'content-left';
$ordered_content_show_numbers = get_sub_field('ordered_content_show_numbers') ?: true;
$enable_leading_0s = get_sub_field('enable_leading_0s') ?: false;
$leading_0 = get_sub_field('leading_0s') ?: 0;
if($enable_leading_0s == false){
    $leading_0 = 0;
}
?>
<section class="orderingcontent-section<?= $general_class; ?>">
    <div class="container mt-4">
        <div class="row">
            <div class="col <?php if ($align_content == 'content-left'): echo 'order-1';else: echo 'order-2';endif; ?>">
                <?php
                if (get_sub_field('ordered_content_title')) {  ?>
                    <h2><?php echo get_sub_field('ordered_content_title'); ?></h2>
                <?php }
                if (get_sub_field('ordered_content_content')) {  ?>
                    <div class="editor-design">
                        <?php echo get_sub_field('ordered_content_content'); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col ordered-blocks <?php if ($align_content == 'content-right'): echo 'order-2';else: echo 'order-1';endif; ?>">
                <?php
                if (have_rows('ordering_content')):
                    while (have_rows('ordering_content')): the_row();
                        $ordering_content_title = get_sub_field('ordering_content_title');
                        $ordering_content_content  = get_sub_field('ordering_content_content');
                        $ordering_content_button = get_sub_field('ordering_content_button');
                ?>
                        <div class="ordered-block">
                            <?php if ($ordered_content_show_numbers): ?>
                                <div class="ordered-number">
                                    <?php
                                    // intval($leading_0)
                                    if(intval($leading_0)){
                                        for ($i = 1; $i <= $leading_0; $i++) {
                                            echo '0';
                                        }
                                    }
                                    echo get_row_index();
                                    ?>
                                </div>
                            <?php endif; ?>
                            <div class="ordered-content">
                                <?php if ($ordering_content_title): ?>
                                    <h3><?php echo $ordering_content_title; ?></h3>
                                <?php endif;
                                if ($ordering_content_content): ?>
                                    <div class="editor-design">
                                        <?php echo $ordering_content_content; ?>
                                    </div>
                                <?php endif;
                                if ($ordering_content_button): ?>
                                    <a href="<?php echo esc_url($ordering_content_button['url']); ?>" class="btn btn-sm"><?php echo esc_attr($ordering_content_button['title']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>