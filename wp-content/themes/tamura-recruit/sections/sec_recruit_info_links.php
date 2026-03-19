<?php

$args = wp_parse_args(
    $args,
    array(
      'is_midashi' => '',
    )
);
?>

<section id="recruitingInfoLinks" class="sec_Links pt_50 pb_50">
    <div class="sec_inner">
        <?php if($args['is_midashi']): ?>
            <?php get_template_part('blocks/bl_heading_2_en', null, [
                'ttl-en' => 'RECRUITING INFO',
                'ttl-ja' => '採用情報',
                // 'class' => 'white',
            ]) ?>
        <?php endif; ?>
        <div class="sec_Links_wrap sec_inner_full d_grid gap_20">
            <?php get_template_part('blocks/bl_recruit_info_card', null, [
                'link'    => '/recruit/basic',
                'img'     => '/assets/public/img/top/recruit_info_card_basic.png',
                'en'     => 'Get to know THE BASICS',
                'title'     => '基本を知る',
                'txt'     => '数字やメッセージ、キャリアプランなどを知る',
                'color'    => 'blue',
                'class'   => '',
            ]) ?>
            <?php get_template_part('blocks/bl_recruit_info_card', null, [
                'link'    => '/recruit/business',
                'img'     => '/assets/public/img/top/recruit_info_card_business.png',
                'en'     => 'Get to know OUR BUSINESS',
                'title'     => '事業を知る',
                'txt'     => '田村ビルズグループの事業一覧を知る',
                'color'    => 'green',
                'class'   => '',
            ]) ?>
            <?php get_template_part('blocks/bl_recruit_info_card', null, [
                'link'    => '/recruit/job',
                'img'     => '/assets/public/img/top/recruit_info_card_job.png',
                'en'     => 'Get to know OUR JOB',
                'title'     => '仕事を知る',
                'txt'     => '田村ビルズグループの仕事一覧を知る',
                'color'    => 'red',
                'class'   => '',
            ]) ?>
            <!-- <?php get_template_part('blocks/bl_recruit_info_card', null, [
                'link'    => '/recruit/people',
                'img'     => '/assets/public/img/top/recruit_info_card_aboutus.png',
                'en'     => 'Get to know ABOUT US',
                'title'     => '人を知る',
                'txt'     => '田村ビルズグループで働く人のインタビューで知る',
                'color'    => 'orange',
                'class'   => '',
            ]) ?> -->
            <a class="bl_recruit_info_card orange d_grid" href="/recruit/people">
                <div class="bl_recruit_info_slide bl_recruit_info_card_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people01.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people02.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people03.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people04.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people05.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people06.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/recruit_info_card_people07.png" alt="">
                </div>
                <div class="bl_recruit_info_card_contents">
                    <span class="bl_recruit_info_card_contents_en">Get to know ABOUT US</span>
                    <span class="bl_recruit_info_card_contents_title">人を知る</span>
                    <span class="bl_recruit_info_card_contents_txt">田村ビルズグループで働く人のインタビューで知る</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 14 14">
                        <path id="arrow_forward_FILL0_wght400_GRAD0_opsz48" d="M15,22l-.919-.941,5.4-5.4H8V14.344H19.484l-5.4-5.4L15,8l7,7Z" transform="translate(-8 -8)" fill="#242424"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>