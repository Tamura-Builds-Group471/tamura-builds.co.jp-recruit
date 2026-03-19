<?php
$args = wp_parse_args(
  $args,
  array(
    'ttl' => '',
    'link' => '',
    'class' => '',
  )
);
?>

<div class="outlink_box <?php echo esc_attr($args['class']); ?>">
    <h3><?php echo esc_html($args['ttl']); ?></h3>
    <?php if (!empty($args['link'])): ?>
        <a href="<?php echo esc_url($args['link']); ?>" class="external" target="_blank" rel="noopener">
            <?php echo esc_html($args['link']); ?>
        </a>
    <?php else: ?>
        <span class="site-coming-soon">Site Coming Soon</span>
    <?php endif; ?>
</div>
