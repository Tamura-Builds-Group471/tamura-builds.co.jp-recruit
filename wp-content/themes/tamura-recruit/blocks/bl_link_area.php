<?php
$args = wp_parse_args(
  $args,
  array(
    'ttl' => '',
    'link' => '',
    'is_external' => false, //外部リンクの場合は「true」と記入
    'class' => '',
  )
);
?>

<div class="col1_link_area <?php echo $args['class'] ?>">
    <h3><?php echo $args['ttl'] ?></h3>
    <a href="<?php echo esc_html($args['link']); ?>" <?php if($args['is_external']):?>class="external" target="_blank" rel="noopener"<?php endif; ?>><?php echo $args['link'] ?></a>
</div>