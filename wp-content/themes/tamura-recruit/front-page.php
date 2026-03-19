<?php

/**
 * front-page.php
 */
get_header(); ?>
<section id="topFirstView" class="js_slide bl_topHeader sec_inner">
    <ul class="js_slideList bl_topHeader_slide sec_inner_full">
        <li class="bl_topHeader_slide_item">
            <img class="bl_topHeader_slide_item_img" src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/topHeader_slide_img01.jpg" alt="">
            <h2 class="bl_topHeader_slide_item_text text01">A COMPANY<br>with PHILOSOPHY<span class="small_ja">フィロソフィの旗のもとへ</span></h2>
        </li>
        <li class="bl_topHeader_slide_item">
            <img class="bl_topHeader_slide_item_img" src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/topHeader_slide_img02.jpg" alt="">
            <h2 class="bl_topHeader_slide_item_text text02">ALL LIVING<span class="large_ja">暮らしのすべて</span><span class="mt_10 small_ja">住まいと環境リサイクルで生み出す、未来。<br>未来の暮らしの全てを豊かにする。<br>それが私たちの仕事です。</span></h2>
        </li>
    </ul>
</section>
<section class="pt_50 pt_30_sp">
    <div class="sec_inner" style="max-width:1100px;">
       
        <!-- <a href="https://tamura-builds.co.jp/recruit/lp-organic/">
            <img src="https://tamura-builds.co.jp/recruit/wp-content/themes/tamura-recruit/assets/public/img/top/recruit_inturn-bnr001.jpg" alt="">
        </a> -->
        <a class="mt_30 mb_30" style="display:block;" href="https://tamura-builds.co.jp/with-philosophy/" target="_blank">
            <img src="https://tamura-builds.co.jp/recruit/wp-content/themes/tamura-recruit/assets/public/img/top/cm-banner-02.png" alt="">
        </a>
         <!-- <p><a href="https://www.career-cloud.asia/26/form/entryb/index/e8572abe8c9a36db31a572e128ae3353" target="_blank" class="top-btn_05"><span>26卒向け！</span><br>WEB面談会社説明会の<br class="sp-only">応募はこちら！</a></p> -->
    </div>
</section>
<section id="topVision" class="sec_topVision pt_100 pb_100">
    <div class="sec_inner">
        <div class="sec_topVision_wrap">
            <p class="sec_topVision_wrap_txt_en">
                <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">AIMING FOR</span></span>
                <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">GREAT COMPANY</span></span>
                <span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">with PHILOSOPHY</span></span>
            </p>
            <p class="sec_topVision_wrap_txt_small">
                私たちが目指すのは、<br>
                フィロソフィのあるグレートカンパニーだ。
            </p>
            <p class="sec_topVision_wrap_txt_small">
                持続的な成長を可能とする高い「収益性」<br>
                人として、またビジネスパーソンとしての成長を促す「教育性」<br>
                すべてのステークホルダーに「よかれかし」とする「社会性」<br>
                それらをフィロソフィと共に形にできる企業を<br>
                私たちはグレートカンパニーと呼んでいる。
            </p>
            <p class="sec_topVision_wrap_txt_large">
                <span>さぁ、共に築こう。</span>GREAT COMPANYを。
            </p>
        </div>
    </div>
</section>
<section>
    <style>
        a.top-btn_05 {
            display: block;
            text-align: center;
            vertical-align: middle;
            text-decoration: none;
            margin: auto auto 20px;
            padding: 1rem 1rem;
            font-weight: bold;
            border-radius: 0.3rem;
            border-bottom: 14px solid #b50000;
            background: #e91000;
            color: #fff;
            font-size: 21px;
            line-height: 1.4;
        }

        @media (min-width:768px) {
            a.top-btn_05 {
                font-size: 24px;
            }
            a.top-btn_05 span{
                font-size: 32px;
            }
        }

        a.top-btn_05:hover {
            margin-top: 6px;
            border-bottom: 1px solid #0686b2;
            color: #fff;
        }

        .top-fv_entry {
            background-color: #1c2c43;
            color: #fff;
            padding: 60px 20px 0 20px;
            position: relative;
            max-width: 1200px;
            margin: -55px auto 0 auto;
            cursor: pointer;
            margin: 40px auto;
        }

        .top-fv_entry .inner {
            max-width: 1280px;
            margin: 0 auto;
            text-align: left;
        }

        .top-fv_entry .txt01 {
            font-size: 16px;
            line-height: 1.4;
            display: block;
            font-weight: normal;
            width: 100%;
            color: #fff;
            margin-bottom: 10px;
        }

        .top-fv_entry .txt02 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #fff;
            text-align: center;
        }



        @media (min-width:768px) {

            .top-fv_entry .toggle-arrow {
                position: absolute;
                right: 70px;
                top: 94px;
                width: 48px;
                height: 48px;
                transition: transform 0.3s ease;
            }
        }

        @media (max-width:767px) {

            .top-fv_entry .toggle-arrow {
                position: absolute;
                left: calc(50% + 10px);
                bottom: 0;
                transform: translateX(-50%);
                width: 48px;
                height: 48px;
                transition: transform 0.3s ease;
            }
        }

        .top-fv_entry .toggle-arrow .arrow {
            display: inline-block;
            width: 14px;
            height: 14px;
            border-right: 3px solid #fff;
            border-bottom: 3px solid #fff;
            transform: rotate(-45deg);
            transition: transform 0.3s ease;
        }

        .top-fv_entry.active .toggle-arrow .arrow,
        .top-fv_entry:hover .toggle-arrow .arrow {
            transform: rotate(45deg);
        }

        .top-fv_entry .entry-list {
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease;
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            padding-top: 20px;
        }

        .top-fv_entry.active .entry-list,
        .top-fv_entry:hover .entry-list {
            max-height: 1000px;
        }

        .top-fv_entry ul {
            list-style: none;
            padding: 0;
            margin: 0 0 60px 0;
            display: flex;
            gap: 2%;
            flex-wrap: wrap;
            width: 100%;
        }

        .top-fv_entry li {
            background-color: #fff;
            border-radius: 6px;
            overflow: hidden;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
            text-align: center;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }

        /* @media (min-width:768px) {
            .top-fv_entry li {
                width: 49%;
            }
        } */

        .top-fv_entry li:hover {
            transform: translateY(-4px);
        }

        .top-fv_entry a {

            color: #000;
            text-decoration: none;
            width: 100%;
            display: block;
            gap: 16px;
        }

        .top-fv_entry a:hover {
            opacity: 1 !important;
        }

        .top-fv_entry .flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top-fv_entry .logo img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .top-fv_entry .txt {
            font-size: 18px;
            line-height: 1.4;
            text-align: center;
            white-space: nowrap;
            padding: 10px 0;
            width: 100%;
            font-weight: bold;
        }

        .top-fv_entry .ico {
            margin-left: auto;
            display: flex;
            align-items: center;
            padding: 0 5px;
        }

        .top-fv_entry .ico i {
            display: inline-block;
            width: 16px;
            height: 16px;
        }

        .top-fv_entry .ico .arrow svg,
        .top-fv_entry .ico .star svg {
            width: 100%;
            height: 100%;
            fill: #000;
        }

        .top-fv_entry .ico .star {
            margin-left: 4px;
        }
    </style>
    <div class="top-fv_entry js-accordion-toggle active" id="top-entry">
        <div class="inner">
            <p class="txt01 text-center">
                “どこで”ではなく“誰と”働くかを大切にするあなたへ。<br>
                私たちは、未来を共に創り上げる“本気の仲間”を探しています。</p>
            <p class="txt02 text-center">エントリーする</p>
            <div class="toggle-arrow"><i class="arrow"></i></div>
            <div class="entry-list js-footNavBox">
                <ul>
                    <!-- <li>
                        <a href="https://www.career-cloud.asia/26/entry/job/offer/tamura-recruit" target="_blank">
                            <span class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/20250624_1.jpg" alt="マイナビ" width="144" height="64">
                            </span>

                        </a>
                    </li> -->
                    <li>
                        <a href="https://www.career-cloud.asia/27/entry/job/offer/tamura-recruit" target="_blank">
                            <span class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/20250624_2.jpg" alt="キャリタス" width="144" height="64">
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- ここに実装 -->
<!-- <section class="top-member-slider">

    <div class="top-member-slider__inner">
        <div>
            <div class="bl_heading_2_en white mb_20">
                <span>Member</span>
                <h2>田村ビルズグループで働く人</h2>
            </div>
            <p class="text-white mb_30" style="font-weight:normal;font-size:14px;">様々な個性を持つ社員が働く田村ビルズグループ。働き方は、人それぞれ。情熱を持って仕事に取り組む社員の素顔に迫りました。</p>
        </div>
        <div class="swiper interview_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/1-1.jpg"
                            class="slide-image" alt="">
                        <div class="label">新卒入社</div>
                        <div class="slide-info">
                            <div class="slide-message">てまキングに宅建取得、新人賞を取った大型新人</div>
                            <div class="slide-meta">売買仲介事業部 ｜ 2023年04月入社<br><span class="member-name">山﨑 竜樹</span></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/2-1.png"
                            class="slide-image" alt="">
                        <div class="label">新卒入社</div>
                        <div class="slide-info">
                            <div class="slide-message">言語や分化の違いを超えて大活躍</div>
                            <div class="slide-meta">売買仲介事業部 ｜ 2023年04月入社<br><span class="member-name">宋 丙勲</span></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/3-1.jpg"
                            class="slide-image" alt="">
                        <div class="label">中途・キャリア入社</div>
                        <div class="slide-info">
                            <div class="slide-message">「スモ～ラ」の九州（沖縄含む地方全域）制覇を掲げ、日々反省しながら改良改善を行い精進</div>
                            <div class="slide-meta">スモ～ラ事業部 ｜ 2023年05月入社<br><span class="member-name">境 信一</span></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/4-1.jpg"
                            class="slide-image" alt="">
                        <div class="label">中途・キャリア</div>
                        <div class="slide-info">
                            <div class="slide-message">地方創生の一翼を</div>
                            <div class="slide-meta">賃貸管理事業部 ｜ 2023年05月入社<br><span class="member-name">鈴木 啓介</span></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/5-1.jpg"
                            class="slide-image" alt="">
                        <div class="label">新卒入社</div>
                        <div class="slide-info">
                            <div class="slide-message">率先垂範・即時処理・立ち上げ</div>
                            <div class="slide-meta">田村ビルズ執行役員 ｜ 2016年04月入社<br><span class="member-name">岡野 裕太</span></div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/6-1.jpg"
                            class="slide-image" alt="">
                        <div class="label">新卒採用</div>
                        <div class="slide-info">
                            <div class="slide-message">売上必達を約束します。因果応報</div>
                            <div class="slide-meta">売買仲介事業部　平川店店長 ｜ 2015年04月入社<br><span class="member-name">齊藤 丈治</span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="top-member-slider__arrow">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="bl_btn_nav mx_auto back_white">
            <a href="http://localhost/wordpress/recruit/event">一覧はこちら</a>
        </div>
    </div>
</section> -->

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => '',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<section id="topNews" class="sec_topNews pb_50">
    <div class="sec_inner">
        <?php get_template_part('blocks/bl_heading_2_en', null, [
            'ttl-en' => 'NEWS',
            'ttl-ja' => 'お知らせ',
            // 'class' => 'white',
        ]) ?>
        <div class="sec_topNews_wrap d_grid gap_70 mb_50">
            <!-- Nav tabs -->
            <ul id="newsTabs" class="sec_topNews_wrap_btn" role="tablist" aria-orientation="vertical">
                <li class="sec_topNews_wrap_btn_item">
                    <a class="sec_topNews_wrap_btn_item_link active" id="v-pills-all-tab" data-bs-toggle="pill" href="#all" role="tab" aria-controls="all" aria-selected="true">すべて</a>
                </li>
                <li class="sec_topNews_wrap_btn_item">
                    <a class="sec_topNews_wrap_btn_item_link" id="v-pills-news-tab" data-bs-toggle="pill" href="#news" role="tab" aria-controls="news" aria-selected="false">お知らせ</a>
                </li>
                <li class="sec_topNews_wrap_btn_item">
                    <a class="sec_topNews_wrap_btn_item_link" id="v-pills-event-tab" data-bs-toggle="pill" href="#event" role="tab" aria-controls="event" aria-selected="false">イベント</a>
                </li>
                <li class="sec_topNews_wrap_btn_item">
                    <a class="sec_topNews_wrap_btn_item_link" id="v-pills-event-archive-tab" data-bs-toggle="pill" href="#event-archive" role="tab" aria-controls="event-archive" aria-selected="false">イベントアーカイブ</a>
                </li>
                <li class="sec_topNews_wrap_btn_item">
                    <a class="sec_topNews_wrap_btn_item_link" id="v-pills-staff-blog-tab" data-bs-toggle="pill" href="#staff-blog" role="tab" aria-controls="staff-blog" aria-selected="false">スタッフブログ</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div id="newsTabsContent" class="sec_topNews_wrap_article tab-content">
                <!--ここからすべて-->
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                    <?php
                    $paged = (int) get_query_var('paged');
                    $args = array(
                        'posts_per_page' => 5,
                        'paged' => $paged,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish'
                    );
                    $categories = get_the_category();
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <?php get_template_part('blocks/bl_article_list_line', null) ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php get_template_part('blocks/bl_btn_nav', null, [
                            'link' => '/recruit/news/',
                            'external' => '',  //外部リンクの場合['true']
                            'btn-txt' => 'もっと見る',
                            'class' => 'mx_auto mt_30',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
                        ]) ?>
                    <?php else: ?>
                        <p>現在、新着情報はありません。</p>
                    <?php endif; ?>
                </div>
                <!--ここまですべて-->
                <!--ここからお知らせ-->
                <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="v-pills-news-tab">
                    <?php
                    $paged = (int) get_query_var('paged');
                    $args = array(
                        'posts_per_page' => 5,
                        'paged' => $paged,
                        'category_name' => 'information', //カテゴリー名
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish'
                    );
                    $categories = get_the_category();
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <?php get_template_part('blocks/bl_article_list_line', null) ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php get_template_part('blocks/bl_btn_nav', null, [
                            'link' => '/recruit/information/',
                            'external' => '',  //外部リンクの場合['true']
                            'btn-txt' => 'もっと見る',
                            'class' => 'mx_auto mt_30',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
                        ]) ?>
                    <?php else: ?>
                        <p>現在、新着のお知らせはありません。</p>
                    <?php endif; ?>
                </div>
                <!--ここまでお知らせ-->
                <!--ここからイベント-->
                <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="v-pills-event-tab">
                    <?php
                    $today = date('Ymd');
                    $paged = (int) get_query_var('paged');
                    $args = array(
                        'posts_per_page' => 5,
                        'paged' => $paged,
                        'category_name' => 'event', //カテゴリー名
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'meta_query' => array(
                            array(
                                'key'     => 'event_date_end', // ACFで所得する公開日
                                'value'   => $today,
                                'compare' => '>=', // value(今日)とkey(公開日）を比較して未来の場合のみ表示
                                'type' => 'DATE',
                            ),
                        )
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <?php get_template_part('blocks/bl_article_list_line', null) ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php get_template_part('blocks/bl_btn_nav', null, [
                            'link' => '/recruit/event/',
                            'external' => '',  //外部リンクの場合['true']
                            'btn-txt' => 'もっと見る',
                            'class' => 'mx_auto mt_30',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
                        ]) ?>
                    <?php else: ?>
                        <p>現在、新着のイベント情報はありません。</p>
                    <?php endif; ?>
                </div>
                <!--ここまでイベント-->
                <!--ここからイベントアーカイブ-->
                <div class="tab-pane fade" id="event-archive" role="tabpanel" aria-labelledby="v-pills-event-archive-tab">
                    <?php
                    $today = date('Ymd');
                    $paged = (int) get_query_var('paged');
                    $args = array(
                        'posts_per_page' => 5,
                        'paged' => $paged,
                        'category_name' => 'event', //カテゴリー名
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'meta_query' => array(
                            array(
                                'key'     => 'event_date_end', // ACFで所得する公開日
                                'value'   => $today,
                                'compare' => '<', // value(今日)とkey(公開日）を比較して過去の場合のみ表示
                                'type' => 'DATE',
                            ),
                        )
                    );
                    $categories = get_the_category();
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <?php get_template_part('blocks/bl_article_list_line', null) ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php get_template_part('blocks/bl_btn_nav', null, [
                            'link' => '/recruit/event/',
                            'external' => '',  //外部リンクの場合['true']
                            'btn-txt' => 'もっと見る',
                            'class' => 'mx_auto mt_30',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
                        ]) ?>
                    <?php else: ?>
                        <p>現在、新着のイベントアーカイブはありません。</p>
                    <?php endif; ?>
                </div>
                <!--ここまでイベントアーカイブ-->
                <!--ここからスタッフブログ-->
                <div class="tab-pane fade" id="staff-blog" role="tabpanel" aria-labelledby="v-pills-staff-blog-tab">
                    <?php
                    $paged = (int) get_query_var('paged');
                    $args = array(
                        'posts_per_page' => 5,
                        'paged' => $paged,
                        'category_name' => 'staff-blog', //カテゴリー名
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish'
                    );
                    $categories = get_the_category();
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <?php get_template_part('blocks/bl_article_list_line', null) ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php get_template_part('blocks/bl_btn_nav', null, [
                            'link' => '/recruit/staff-blog/',
                            'external' => '',  //外部リンクの場合['true']
                            'btn-txt' => 'もっと見る',
                            'class' => 'mx_auto mt_30',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
                        ]) ?>
                    <?php else: ?>
                        <p>現在、新着のスタッフブログはありません。</p>
                    <?php endif; ?>
                </div>
                <!--ここまでスタッフブログ-->
            </div>
        </div>
        <!-- <?php
                $news_archive_uri = ''; //初期化
                $news_archive_uri .= home_url();
                $news_archive_uri .= '/news';
                ?>
        <?php get_template_part('blocks/bl_btn_nav', null, [
            'link' => $news_archive_uri,
            'external' => '',  //外部リンクの場合['true']
            'btn-txt' => 'もっと見る',
            'class' => 'mx_auto',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
        ]) ?> -->
    </div>
</section>

<section id="topEvent" class="sec_topEvent pt_50 pb_50">
    <div class="sec_inner">
        <div class="midashi_wrap">
            <?php get_template_part('blocks/bl_heading_2_en', null, [
                'ttl-en' => 'EVENTS',
                'ttl-ja' => '採用イベント',
                'class' => 'white',
            ]) ?>
            <div class="mynavi_link">
                <a href="https://job.mynavi.jp/26/pc/search/corp214319/outline.html" target="_blank">
                    <img src="https://job.mynavi.jp/conts/kigyo/2026/logo/banner_logo_195_60.gif" alt="マイナビ2025" border="0">
                </a>
            </div>
        </div>
        <div class="sec_topEvent_wrap d_grid gap_30 pb_50">
            <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 3,
                'paged' => $paged,
                'category_name' => 'event',
                'meta_key' => 'event_date_start',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $categories = get_the_category();
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <?php get_template_part('blocks/bl_article_card_event', null,) ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>現在、新着情報はありません。</p>
            <?php endif; ?>
        </div>
        <div class="sec_topEvent_banner d_grid gap_30 pt_50 pb_50">
            <a class="sec_topEvent_banner_link" href="https://lfb.co.jp/lp/03/recruit01/" target="_blank" rel="noopenner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/event_banner01.png" alt="選考直結型インターンシップ">
            </a>
            <a class="sec_topEvent_banner_link" href="<?php echo home_url(); ?>/career-change">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/event_banner02.png" alt="転職をお考えの方へ">
            </a>
            <a class="sec_topEvent_banner_link" href="<?php echo home_url(); ?>/information/956/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/event_banner03.jpg" alt="おかえりなさい採用">
            </a>
        </div>
        <?php
        $event_archive_uri = ''; //初期化
        $event_archive_uri .= home_url();
        $event_archive_uri .= '/event';
        ?>
        <?php get_template_part('blocks/bl_btn_nav', null, [
            'link' => $event_archive_uri,
            'external' => '',  //外部リンクの場合['true']
            'btn-txt' => 'イベント一覧',
            'class' => 'mx_auto back_white',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
        ]) ?>
    </div>
</section>

<section id="topMediaInfo" class="sec_MediaInfo pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('blocks/bl_heading_2_en', null, [
            'ttl-en' => 'MEDIA INFO',
            'ttl-ja' => 'メディア情報',
            // 'class' => 'white',
        ]) ?>
        <p class="mb_30">田村ビルズではYouTubeを始め、さまざまなメディア活動を行っております。</p>
        <!--
        <a class="sec_inner_full mb_50 d_bl" href="https://tamura-builds.co.jp/tamura-media/" target="_blank" rel="noopenner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/top/media_info.png" alt="メディア情報">
        </a>
-->
        <div class="sec_inner_full">
            <iframe id="iframeMedia" src="https://tamura-builds.co.jp/iframe-media/" width="100%" scrolling="no"></iframe>
        </div>
        <?php get_template_part('blocks/bl_btn_nav', null, [
            'link' => 'https://tamura-builds.co.jp/tamura-media/',
            'external' => 'true',  //外部リンクの場合['true']
            'btn-txt' => 'MEDIA一覧',
            'class' => 'mx_auto back_gray mt_50',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
        ]) ?>
    </div>
</section>

<section id="Instagram" class="sec_Instagram pt_10 pb_100">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">Instagram</h2>
        <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
        <div class="pb_30"></div>
        <?php get_template_part('blocks/bl_btn_nav', null, [
            'link' => 'https://www.instagram.com/tamura_recruit/',
            'external' => 'true',  //外部リンクの場合['true']
            'btn-txt' => 'FOLLOW US',
            'class' => 'mx_auto',  //センター配置の場合[mx_auto],背景白の場合[back_white],背景グレーの場合[back_gray],テキスト白の場合[text_white]
        ]) ?>
    </div>
</section>

<?php get_template_part('sections/sec_cta'); ?>

<!-- メディアiframeの高さを自動調整 -->
<script>
    window.addEventListener('message', function(e) {
        var iframe = $("#iframeMedia");
        var eventName = e.data[0];
        var data = e.data[1];
        switch (eventName) {
            case 'setHeight':
                iframe.height(data);
                break;
        }
    }, false);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleArea = document.querySelector(".js-accordion-toggle");
        if (toggleArea) {
            toggleArea.addEventListener("click", function() {
                this.classList.toggle("active");
            });
        }
    });
</script>

<?php get_footer(); ?>