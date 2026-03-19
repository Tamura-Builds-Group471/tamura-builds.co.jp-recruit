<?php
/**
 * category.php
 */
get_header(); ?>

<?php

$cat = get_queried_object();
$cat_name = $cat -> name;
$cat_slug = $cat -> slug;

?>

<?php 
    if(is_category('information')):
        $head_ttl = 'お知らせ';
        $head_ttl_en = 'NEWS';
    elseif(is_category('event')):
        $head_ttl = 'イベント';
        $head_ttl_en = 'EVENT';
    elseif(is_category('staff-blog')):
        $head_ttl = 'スタッフブログ';
        $head_ttl_en = 'STAFF BLOG';
    elseif(is_category('other')):
        $head_ttl = 'その他';
        $head_ttl_en = 'OTHER';
    endif;
?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/common/commonHeader.png',
    'en'      =>  $head_ttl_en,
    'title'   => $head_ttl,
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="category_archive" class="pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('sections/sec_news_archive', null, [
            'posts_per_page'  => '12', //記事数
            'cat_name' => $cat_slug,
        ]) ?>
        <?php get_template_part('blocks/bl_pagenation_archive') ?>
    </div>
</section> 

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>