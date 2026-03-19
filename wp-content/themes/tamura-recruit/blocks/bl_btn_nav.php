<?php
$args = wp_parse_args(
  $args,
  array(
    'link' => '',
    'external' => 'false',
    'btn-txt' => '',
    'class' => ''
  )
);
?>

<div class="bl_btn_nav <?php echo $args['class'] ?>">
  <?php if( esc_html($args['external']) === 'true' ): ?>
    <a href="<?php echo esc_html($args['link']); ?>" target="_blank" rel="noopenner"><?php echo $args['btn-txt'] ?></a>
  <?php else: ?>
    <a href="<?php echo esc_html($args['link']); ?>"><?php echo $args['btn-txt'] ?></a>
  <?php endif; ?>
</div>