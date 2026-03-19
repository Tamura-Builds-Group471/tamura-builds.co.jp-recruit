<?php
/**
 * archive.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/common/commonHeader.png',
    'en'      => 'NEWS',
    'title'   => 'お知らせ',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="news_archive" class="pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('sections/sec_news_archive', null, [
            'posts_per_page'  => '12', //記事数
        ]) ?>
        <?php get_template_part('blocks/bl_pagenation_archive') ?>
    </div>
</section> 

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>