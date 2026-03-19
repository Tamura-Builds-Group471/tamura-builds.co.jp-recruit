<?php
$args = wp_parse_args(
  $args,
  array(
    'ttl-en' => '',
    'ttl-ja' => '',
    'class' => ''
  )
);
?>

<div class="bl_heading_2_en <?php echo $args['class'] ?>">
    <span><?php echo $args['ttl-en'] ?></span>
    <h2><?php echo $args['ttl-ja'] ?></h2>
</div>