<?php
/**
 * 404.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/common/commonHeader.png',
    'en'      => '404 Not Found',
    'title'   => 'お探しのページは見つかりませんでした',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="404" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <h2 class="tx_center mb_50">お探しのページは<br>見つかりませんでした。</h2>
            <p class="text">お探しのページは移動または削除された可能性があります。<br>直接URLを入力された場合は、URLが正しく入力されているかご確認ください。</p>
            <?php
                $btn_link = home_url();
                get_template_part('blocks/bl_btn', null, [
                    'link'    => $btn_link,
                    'txt'     => 'ホームに戻る',
                    'is_icon' => true,
                    'color' => '',
                    'class'   => 'mt_50 mx_auto',
                ]) 
            ?>
        </div>
    </div>
</section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>