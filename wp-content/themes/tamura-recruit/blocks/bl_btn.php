<?php

$args = wp_parse_args(
    $args,
    array(
      // 'キー名' => 'デフォルト値'
      'link'    => '',
      'txt'     => '',
      'is_icon' => true,
      'color' => '',
      'class'   => '',
    )
);
?>

<a class="bl_btn <?php echo $args['color'] ?> <?php echo $args['class'] ?>" href="<?php echo esc_html($args['link']); ?>">
  <span class="bl_btn_txt lt_0 fw_b tx_center"><?php echo $args['txt'] ?></span>
  <?php if($args['is_icon']): ?>
    <svg xmlns="http://www.w3.org/2000/svg" width="5.216" height="9.008" viewBox="0 0 5.216 9.008">
      <path d="M9.008,5.216H7.535L4.5,1.706,1.474,5.216H0L4.5,0l4.5,5.216Z" transform="translate(5.216) rotate(90)" fill="#242424"/>
    </svg>
  <?php endif;?>
</a>
