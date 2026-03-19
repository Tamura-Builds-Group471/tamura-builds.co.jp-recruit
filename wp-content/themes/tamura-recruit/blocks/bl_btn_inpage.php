<?php

$args = wp_parse_args(
    $args,
    array(
      // 'キー名' => 'デフォルト値'
      'in_page_link'    => '',
      'txt'     => '',
      'color' => '',
      'class'   => '',
    )
);
?>

<a class="bl_btn_inpage <?php echo $args['color'] ?> <?php echo $args['class'] ?>" href="<?php echo esc_html($args['in_page_link']); ?>">
  <span class="bl_btn_inpage_txt tx_center"><?php echo $args['txt'] ?></span>
  <svg xmlns="http://www.w3.org/2000/svg" width="19.002" height="11.002" viewBox="0 0 19.002 11.002">
    <path d="M19,11H15.893L9.5,3.6,3.108,11H0L9.5,0,19,11Z" transform="translate(19.002 11.002) rotate(180)" fill="#fff"/>
  </svg>
</a>
