<?php
$args = wp_parse_args(
  $args,
  array(
    'ttl' => '',
    'img' => '',
    'txt' => '',
    'color' => '',
  )
);
?>

<div class="welfare_box <?php echo $args['color'] ?>">
    <h3 class="welfare_box_ttl"><?php echo $args['ttl'] ?></h3>
    <img class="welfare_box_img" src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($args['img']); ?>" alt="<?php echo $args['ttl'] ?>">
    <p class="welfare_box_txt"><?php echo $args['txt'] ?></p>
</div>