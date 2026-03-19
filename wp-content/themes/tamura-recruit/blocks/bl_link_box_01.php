<?php
$args = wp_parse_args(
  $args,
  array(
    'link' => '',
    'img' => '',
    'ttl' => '',
    'explain' => '',
    'is_tag' => false,
    'tag_txt' => '',
    'tag_color' => '',
    'class' => '',
  )
);
?>

<a href="<?php echo esc_html($args['link']); ?>" class="bl_link_box_01 <?php echo $args['class'] ?>">
    <?php if($args['is_tag']): ?>
        <p class="bl_link_box_01_tag <?php echo $args['tag_color'] ?>"><?php echo $args['tag_txt'] ?></p>
    <?php endif; ?>
    <div class="bl_link_box_01_img">
        <img src="<?php echo $args['img'] ?>" alt="<?php echo $args['ttl'] ?>">
    </div>
    <span class="bl_link_box_01_text">
        <span class="bl_link_box_01_text_ttl"><?php echo $args['ttl'] ?></span>
        <span class="bl_link_box_01_text_explain"><?php echo $args['explain'] ?></span>
    </span>
</a>