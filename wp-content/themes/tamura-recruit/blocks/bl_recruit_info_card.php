<?php

$args = wp_parse_args(
    $args,
    array(
      // 'キー名' => 'デフォルト値'
      'link'    => '',
      'img'     => '',
      'en'     => '',
      'title'     => '',
      'txt'     => '',
      'color'    => '',
      'class'   => '',
    )
);
?>

<a class="bl_recruit_info_card <?php echo $args['color'] ?> <?php echo $args['class'] ?>" href="<?php echo esc_html($args['link']); ?>">
    <div class="bl_recruit_info_card_img">
        <img src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($args['img']); ?>" alt="">
    </div>
    <div class="bl_recruit_info_card_contents">
        <span class="bl_recruit_info_card_contents_en"><?php echo $args['en'] ?></span>
        <span class="bl_recruit_info_card_contents_title"><?php echo $args['title'] ?></span>
        <span class="bl_recruit_info_card_contents_txt"><?php echo $args['txt'] ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 14 14">
            <path id="arrow_forward_FILL0_wght400_GRAD0_opsz48" d="M15,22l-.919-.941,5.4-5.4H8V14.344H19.484l-5.4-5.4L15,8l7,7Z" transform="translate(-8 -8)" fill="#242424"/>
        </svg>
    </div>
</a>