<?php
/**
 * page-job.php
 */
get_header(); ?>

<!-- ヘッダーエリア ここから -->
<?php 
$head_img = get_field('page_head_img');
$ttl_en = get_field('page_ttl_en');
$ttl_jp = get_field('page_ttl_jp');
$head_custom_css = get_field('head_custom_css');
?>

<?php if( get_field('page_head_img') ): ?>
    <?php get_template_part('sections/sec_page_title', null, [
        'img'     => $head_img,
        'en'      => $ttl_en,
        'title'   => $ttl_jp,
        'class'   => $head_custom_css,
    ]) ?>
<?php else: //画像が設定されてない場合 ?>
    <?php 
    $no_img_uri = ''; //初期化
    $no_img_uri .= get_template_directory_uri();
    $no_img_uri .= '/assets/public/img/common/no_img.png';
    get_template_part('sections/sec_page_title', null, [
        'img'     => $no_img_uri,
        'en'      => $ttl_en,
        'title'   => $ttl_jp,
        'class'   => '',
    ]) ?>
<?php endif; ?>
<!-- ヘッダーエリア ここまで -->

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<?php get_template_part('sections/sec_flexible_contents') ?>

<?php get_template_part('sections/sec_job_archive') ?>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>