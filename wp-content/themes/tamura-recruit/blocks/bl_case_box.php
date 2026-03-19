<?php
$args = wp_parse_args(
  $args,
  array(
    'img' => '',
    'num' => '',
    'midashi' => '',
    'midashi_sub' => '',
    'txt' => '',
    'is_small_txt' => false,
    'txt_small' => '',
  )
);
?>

<div class="case_box">
    <div class="case_box_img">
        <?php if ( is_page_template() ): ?>
            <img src="<?php echo esc_html($args['img']); ?>" alt="">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($args['img']); ?>"  alt="">
        <?php endif; ?>
        <p class="case_box_img_num"><span class="case">CASE</span><span class="num"><?php echo $args['num'] ?></span></p>
    </div>
    <h3 class="case_box_ttl"><?php echo $args['midashi'] ?></h3>
    <p class="case_box_ttl_small"><?php echo $args['midashi_sub'] ?></p>
    <p class="case_box_txt"><?php echo $args['txt'] ?></p>
    <?php if($args['is_small_txt']): ?>
        <p class="case_box_txt_small"><?php echo $args['txt_small'] ?></p>
    <?php endif; ?>
</div>