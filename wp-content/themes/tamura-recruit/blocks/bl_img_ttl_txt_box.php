<?php
$args = wp_parse_args(
  $args,
  array(
    'img' => '',
    'midashi' => '',
    'txt' => '',
    'is_tag' => false,
    'tag_txt' => '',
    'tag_color' => 'blue',
  )
);
?>

<div class="img_ttl_txt_box">
  <?php if ( is_page_template() ): ?>
    <img class="img_ttl_txt_box_img" src="<?php echo esc_html($args['img']); ?>" alt="">
  <?php else: ?>
    <img class="img_ttl_txt_box_img" src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($args['img']); ?>"  alt="">
  <?php endif; ?>
  <?php if($args['is_tag']): ?>
    <p class="img_ttl_txt_box_tag <?php echo $args['tag_color'] ?>"><?php echo $args['tag_txt'] ?></p>
  <?php endif; ?>
  <h3 class="img_ttl_txt_box_ttl"><?php echo $args['midashi'] ?></h3>
  <p class="img_ttl_txt_box_txt"><?php echo $args['txt'] ?></p>
</div>