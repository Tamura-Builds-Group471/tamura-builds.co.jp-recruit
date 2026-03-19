<?php
/**
 * page-midway-confirm.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/entry/entryHeader.png',
    'en'      => 'ENTRY',
    'title'   => '中途採用エントリー',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="entry" class="pt_50 pb_50">
    <div class="sec_inner">
        <!-- <p class="text tx_center">中途採用専用のエントリーページです。<br>（<a class="theme_blue tx_deco_under" href="<?php echo home_url(); ?>/new-graduates-entry">新卒採用エントリーページはこちら</a>）<br>LINEまたはフォームよりエントリーいただけます。なお当社では、通常のエントリーに加え、見学や仕事体験ができる大人のインターンへのご参加も可能です。<br>お気軽にご連絡ください。</p>
        <h2 class="mt_100 mb_50 tx_center">中途採用<br>エントリーフォーム</h2>
        <div class="line_box">
            <p class="text mb_30">※LINEでのエントリーはお友達登録いただいた後にトークにて「通常エントリー希望」または「大人のインターン希望」（両方希望、も可）とメッセージをお送りください。当社より折返しメッセージをお送りします。</p>
            <?php get_template_part('blocks/bl_btn', null, [
                'link'    => 'https://liff.line.me/2004781790-JZOGxzdq/landing?follow=%40579zznrn&lp=LSIHt4&liff_id=2004781790-JZOGxzdq',
                'txt'     => 'LINEでエントリー',
                'is_icon' => true,
                'color' => 'green',
                'class'   => 'mx_auto mt_20',
            ]) ?>
        </div> -->
        <div class="bl_contact_progress mt_50">
            <ul class="bl_contact_progress_list fs_14 fw_b">
                <li class="bl_contact_progress_list_item">
                入　力
                </li>
                <li class="bl_contact_progress_list_item current">
                確　認
                </li>
                <li class="bl_contact_progress_list_item">
                完　了
                </li>
            </ul>
        </div>
        <div class="entry_form mt_50">
            <?php echo do_shortcode('[mwform_formkey key="1516"]'); ?>
        </div>
    </div>
</section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<script>
  document.querySelectorAll('.js-hidden').forEach((element) => {
    element.classList.add('d_none');
  })
  document.querySelectorAll('.form_box').forEach(element => {
    element.classList.add('confirm_txt');
  })
</script>

<?php get_footer(); ?>