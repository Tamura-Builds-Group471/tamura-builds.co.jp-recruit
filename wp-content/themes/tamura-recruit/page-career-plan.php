<?php
/**
 * page-career-plan.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/basic/career_planHeader.jpg',
    'en'      => 'CAREER PLAN',
    'title'   => 'キャリアプラン',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="career_plan_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <p class="text">田村ビルズグループで働く社員2人のキャリアプランをご紹介します。</p>
        </div>
    </div>
</section>

<section id="career_plan_contents" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="career_plan">
            <div id="career_plan01" class="career_plan_wrap">
                <h2 class="tx_center mb_50">キャリアプラン #1</h2>
                <div class="career_plan_wrap_person d_grid mb_50">
                    <img class="career_plan_wrap_person_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/career_plan_person_moroizumi.png" alt="諸泉 朋輝">
                    <div class="career_plan_wrap_person_detail">
                        <p class="career_plan_wrap_person_detail_name"><span class="jp">諸泉 朋輝</span><span class="en">TOMOKI MOROIZUMI</span></p>
                        <p class="career_plan_wrap_person_detail_start">2018年新卒入社</p>
                        <p class="career_plan_wrap_person_detail_company">株式会社田村ビルズ</p>
                        <a class="career_plan_wrap_person_detail_department" href="<?php echo home_url(); ?>/business/sales-and-brokerage/">売買仲介事業部</a>
                    </div>
                </div>
                <h3 class="career_plan_wrap_midashi mb_30">2017 年 4 月～ 2021 年 11 月</h3>
                <p class="career_plan_wrap_txt mb_50">売買仲介事業部 防府寿町店 営業配属。<br>1年目ながら新店舗立ち上げに貢献。新人賞獲得。<br>2年目以降は一営業として店舗業績を牽引する傍ら、後輩育成にも尽力。</p>
                <h3 class="career_plan_wrap_midashi mb_30">2021 年 12 月～ 2022 年 9 月</h3>
                <p class="career_plan_wrap_txt mb_50">売買仲介事業部 周南城ケ丘店 異動。店長昇進。</p>
                <h3 class="career_plan_wrap_midashi mb_30">2022 年 10 月～ 2023 年 9 月</h3>
                <p class="career_plan_wrap_txt mb_50">売買と買取の店舗責任者を兼任。周南エリア統括。</p>
                <h3 class="career_plan_wrap_midashi mb_30">2023 年 10 月～</h3>
                <p class="career_plan_wrap_txt">売買仲介事業部　久留米店　移動。店舗責任者。</p>
            </div>

            <div id="career_plan02" class="career_plan_wrap">
                <h2 class="tx_center mb_50">キャリアプラン #2</h2>
                <div class="career_plan_wrap_person d_grid mb_50">
                    <img class="career_plan_wrap_person_img" src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/career_plan_person_shidahara.png" alt="志田原 花摘">
                    <div class="career_plan_wrap_person_detail">
                        <p class="career_plan_wrap_person_detail_name"><span class="jp">志田原 花摘</span><span class="en">KAZUMI SHIDAHARA</span></p>
                        <p class="career_plan_wrap_person_detail_start">2020年 キャリア入社</p>
                        <p class="career_plan_wrap_person_detail_company">株式会社田村ビルズ</p>
                        <!-- <p class="career_plan_wrap_person_detail_branch"></p> -->
                    </div>
                </div>
                <h3 class="career_plan_wrap_midashi mb_30">前職</h3>
                <p class="career_plan_wrap_txt mb_50">熊本県内の地場ハウスメーカーにて<br>注文住宅の設計に従事<br>年間400棟の設計を担当</p>
                <h3 class="career_plan_wrap_midashi mb_30">2020年2月～</h3>
                <p class="career_plan_wrap_txt mb_50">社員の紹介でＵターン入社<br>前職の経験を活かし、設計を担当</p>
                <h3 class="career_plan_wrap_midashi mb_30">2021年1月～</h3>
                <p class="career_plan_wrap_txt mb_50">資格取得支援制度を活用し、二級建築士取得<br>自社新築ブランド「LIFE FAN BOX」の<br>仕様決め、設計を担当</p>
            </div>
            
        </div>
    </div>
</section>

<?php get_template_part('sections/sec_basic_links') ?>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>