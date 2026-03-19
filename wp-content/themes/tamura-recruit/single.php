<?php
/**
 * single.php
 */
get_header(); ?>

<?php 
    $cat_name = customGetCategory()->name;
    if($cat_name === 'お知らせ'):
        $cat_color = "blue";
        $head_ttl_en = "NEWS";
    elseif($cat_name === 'イベント'):
        $cat_color = "green";
        $head_ttl_en = "EVENT";
    elseif($cat_name === 'スタッフブログ'):
        $cat_color = "red";
        $head_ttl_en = "SATFF BLOG";
    elseif($cat_name === 'その他'):
        $cat_color = "gray";
        $head_ttl_en = "OTHER";
    endif;
?>

<!-- ヘッダーエリア ここから -->
<?php 
    $head_img = '/assets/public/img/common/commonHeader.png';
    get_template_part('sections/sec_page_title', null, [
        'img'     => $head_img,
        'en'      => $head_ttl_en,
        'title'   => $cat_name,
        'class'   => '',
]) ?>
<!-- ヘッダーエリア ここまで -->

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="post-<?php the_ID(); ?>" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="single_post">
            <div class="single_post_header">
                <div class="single_post_header_info">
                    <p class="single_post_header_info_detail"><span class="date"><?php echo get_the_date('Y.m.d'); ?></span><span class="cat <?php echo $cat_color;?>"><?php echo customGetCategory()->name; ?></span></p>
                    <h2 class="single_post_header_info_ttl"><?php the_title(); ?></h2>
                </div>
                <div class="single_post_header_thumbnail">
                    <?php if(has_post_thumbnail()):?>
                        <img src="<?php echo the_post_thumbnail_url() ?>" alt="">
                    <?php else:?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/common/no_img.png" alt="">
                    <?php endif; ?>
                </div>
            </div>
            <div class="single_post_body mb_100">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('blocks/bl_pagenation_single')?>
        </div>
    </div>
</section>

<section id="new_article" class="pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('blocks/bl_heading_2_en', null, [
            'ttl-en' => 'NEW ARTICLES',
            'ttl-ja' => '最近のお知らせ',
            // 'class' => 'white',
        ]) ?>
        <?php get_template_part('sections/sec_news_archive', null, [
            'posts_per_page'  => '3',//記事数
        ]) ?>
        <div class="mt_50">
            <?php
                $btn_link = '';
                $btn_link .= home_url();
                $btn_link .= '/news';
                get_template_part('blocks/bl_btn', null, [
                    'link'    => $btn_link,
                    'txt'     => '一覧を見る',
                    'is_icon' => true,
                    'color' => '',
                    'class'   => 'mx_auto',
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