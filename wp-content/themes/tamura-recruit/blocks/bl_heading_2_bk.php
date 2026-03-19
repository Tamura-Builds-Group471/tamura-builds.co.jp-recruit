<?php
$args = wp_parse_args(
  $args,
  array(
    'ttl' => '',
    'color' => '',
    'class' => ''
  )
);
?>

<h2 class="bl_heading_2_bk <?php echo $args['color'] ?> <?php echo $args['class'] ?>"><?php echo $args['ttl'] ?></h2>