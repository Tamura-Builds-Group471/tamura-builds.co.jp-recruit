<?php
/**
 * page-new-graduates-entry.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/entry/entryHeader.png',
    'en'      => 'ENTRY',
    'title'   => '新卒採用エントリー',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="entry" class="pt_50 pb_50">
    <div class="sec_inner">
        <p class="text tx_center mx_auto" style="max-width:570px;">新卒採用専用のエントリーページです。<br>（<a class="theme_blue tx_deco_under" href="<?php echo home_url(); ?>/midway-entry">中途採用エントリーページはこちら</a>）<br>LINEまたはフォームよりエントリーいただけます。</p>
        <h2 class="mt_100 mb_50 tx_center">新卒採用<br>エントリーフォーム</h2>
        <div class="line_box">
            <p class="text mb_30">※LINEでのエントリーはお友達登録いただいた後にトークにて「新卒採用希望」とメッセージをお送りください。当社より折返しメッセージをお送りします。</p>
            <?php get_template_part('blocks/bl_btn', null, [
                'link'    => 'https://liff.line.me/2004781790-JZOGxzdq/landing?follow=%40579zznrn&lp=LSIHt4&liff_id=2004781790-JZOGxzdq',
                'txt'     => 'LINEでエントリー',
                'is_icon' => true,
                'color' => 'green',
                'class'   => 'mx_auto mt_20',
            ]) ?>
        </div>
        <div class="bl_contact_progress mt_50">
            <ul class="bl_contact_progress_list fs_14 fw_b">
                <li class="bl_contact_progress_list_item current">
                入　力
                </li>
                <li class="bl_contact_progress_list_item">
                確　認
                </li>
                <li class="bl_contact_progress_list_item">
                完　了
                </li>
            </ul>
        </div>
        <div class="entry_form mt_50">
            <span class="fs_12 col_theme_blue mt_25 d_bl mb_25">※必須項目は必ずご記入ください。</span>
<!--            <?php // echo do_shortcode('[mwform_formkey key="1504"]'); ?>-->
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<script>
  let submitConfirm      = document.querySelector('input[name="submitConfirm"]');
  let privacyCheckBox    = document.getElementById('privacy-1');
  submitConfirm.disabled = !privacyCheckBox.checked;
  privacyCheckBox.addEventListener('input', (e) => {
    submitConfirm.disabled = !privacyCheckBox.checked;
  })
</script>

<?php get_footer(); ?>