<?php
$args = wp_parse_args(
  $args,
  array(
    'img' => '',
    'name_jp' => '',
    'name_en' => '',
    'sub_txt' => '',
    'bold_txt' => '',
  )
);
?>

<div class="people_detail_wrap d_grid mb_50">
    <img class="people_detail_wrap_img" src="<?php echo esc_html($args['img']); ?>" alt="<?php echo $args['name_jp'] ?>">
    <div class="people_detail_wrap_info">
        <p class="people_detail_wrap_info_name">
            <span class="jp"><?php echo $args['name_jp'] ?></span><span class="en"><?php echo $args['name_en'] ?></span>
            <span class="sub_txt"><?php echo $args['sub_txt'] ?></span>
        </p>
        <p class="people_detail_wrap_info_bold_txt"><?php echo $args['bold_txt'] ?></p>
    </div>
</div>