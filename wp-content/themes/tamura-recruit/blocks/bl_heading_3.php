<?php
$args = wp_parse_args(
  $args,
  array(
    'ttl' => '',
    'class' => ''
  )
);
?>

<div class="bl_heading_3<?php echo $args['class'] ?>">
    <h3 class="sec_inner"><?php echo $args['ttl'] ?></h3>
</div>