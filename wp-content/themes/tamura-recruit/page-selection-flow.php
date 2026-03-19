<?php
/**
 * page-selection-flow.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/basic/flowHeader.png',
    'en'      => 'SELECTION FLOW',
    'title'   => '選考フロー',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="selection_flow_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <p class="text">田村ビルズグループの選考フローをご紹介します。</p>
        </div>
    </div>
</section>
<section id="selection_flow_content" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="selection_flow_content">
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt white">
                    <h3>ENTRY</h3>
                    <p>各種媒体のエントリーフォームからエントリー</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk_first.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>カジュアル面談</h3>
                    <p>採用担当との個別面談（Zoom、1時間程度）</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>インターンシップ</h3>
                    <p>対面にて開催しております</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>エントリーシート提出</h3>
                    <p>説明会参加者は事前にエントリーシートをご提出いただきます</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>会社説明会＋一次選考</h3>
                    <!-- <p>Web開催（3月以降は対面も予定、2時間程度）</p> -->
                     <p>対面もしくはWEB開催（グループ討論形式）</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <!-- <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>二次選考</h3>
                    <p>グループ討論形式</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div> -->
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>適性検査</h3>
                    <p>Web受験となります</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>役員選考</h3>
                    <p>個別または2名位内の集団面接</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt">
                    <h3>最終選考</h3>
                    <p>対面実施：田村ビルズグループ本社（山口もしくは福岡）</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk_blue.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt white">
                    <h3>合格</h3>
                    <p>内々定</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk.svg">
            </div>
            <div class="selection_flow_content_block">
                <div class="selection_flow_content_block_txt white">
                    <h3>内定</h3>
                    <p>※選考内容やフローは予期せず変更する場合がございます。予めご了承ください。</p>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/public/img/basic/flow_bk_white.svg">
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