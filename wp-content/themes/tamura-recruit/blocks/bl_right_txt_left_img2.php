<?php
$args = wp_parse_args(
    $args,
    array(
      'txt' => '',
      'img' => '',
      'class' => '',
      'name_jp' => '',
      'name_en' => '',
      'sub_txt' => '',
      'bold_txt' => '',
    )
);
?>

<div class="bl_img_txt left d_grid column_2 <?php echo $args['class'] ?>">
    <div class="left">
        <?php if (is_page_template()): ?>
            <img src="<?php echo esc_html($args['img']); ?>">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($args['img']); ?>">
        <?php endif; ?>
    </div>
    <div class="right">
        <div class="people_detail_wrap_info">
            <p class="people_detail_wrap_info_name">
                <span class="jp" style="font-weight:bold; font-size: clamp(25px, 3.464129vw, 28px);"><?php echo $args['name_jp'] ?></span><span class="en"><?php echo $args['name_en'] ?></span>
                <span class="sub_txt" style=" margin-bottom: 10px;"><?php echo $args['sub_txt'] ?></span>
            </p>
            <p class="people_detail_wrap_info_bold_txt" style="font-weight:bold;margin-bottom:25px;"><?php echo $args['bold_txt'] ?></p>
        </div>
        <p><?php echo $args['txt'] ?></p>
    </div>
</div>