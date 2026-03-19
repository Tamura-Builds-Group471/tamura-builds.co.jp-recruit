<?php
$args = wp_parse_args(
  $args,
  array(
    'link' => '',
    'ttl' => '',
    'explain' => '',
    'color' => '',
  )
);
?>

<a href="<?php echo esc_html($args['link']); ?>" class="bl_text_link_card <?php echo $args['color'] ?>">
  <span class="bl_text_link_card_ttl"><?php echo $args['ttl'] ?></span>
  <span class="bl_text_link_card_explain"><?php echo $args['explain'] ?></span>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 14 14">
    <path id="arrow_forward_FILL0_wght400_GRAD0_opsz48" d="M15,22l-.919-.941,5.4-5.4H8V14.344H19.484l-5.4-5.4L15,8l7,7Z" transform="translate(-8 -8)"/>
  </svg>
</a>