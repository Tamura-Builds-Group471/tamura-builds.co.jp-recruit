<?php
$args = wp_parse_args(
  $args,
  array(
    'txt' => '',
    'img' => '',
    'class' => '',
  )
);
?>

<div class="bl_img_txt left d_grid column_2 <?php echo $args['class'] ?>">
    <div class="left inverse_txt">
        <p><?php echo $args['txt'] ?></p>
    </div>
    <div class="right inverse_img">
        <?php if ( is_page_template() ): ?>
            <img src="<?php echo esc_html($args['img']); ?>">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($args['img']); ?>">
        <?php endif; ?>
    </div>
</div>