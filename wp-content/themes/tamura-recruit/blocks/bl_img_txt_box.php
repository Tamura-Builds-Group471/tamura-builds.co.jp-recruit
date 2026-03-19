<?php
$args = wp_parse_args(
  $args,
  array(
    'img' => '',
    'txt' => '',
  )
);
?>

<div class="img_txt_box">
    <img class="img_txt_box_img" src="<?php echo esc_html($args['img']); ?>" alt="">
    <p class="img_txt_box_txt"><?php echo $args['txt'] ?></p>
</div>