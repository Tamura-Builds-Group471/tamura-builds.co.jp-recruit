<?php
/*
Template Name: エピソードを知る（子テーマ）_カスタムテンプレート
*/
?>

<?php
/**
 * people.php
 */
get_header(); ?>

<!-- ヘッダーエリア ここから -->
<?php 
$head_img = get_field('page_head_img');
$ttl_en = get_field('page_ttl_en');
$ttl_jp = get_field('page_ttl_jp')
?>

<?php if( get_field('page_head_img') ): ?>
    <?php get_template_part('sections/sec_page_title', null, [
        'img'     => $head_img,
        'en'      => $ttl_en,
        'title'   => $ttl_jp,
        'class'   => '',
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

<?php get_template_part('sections/sec_breadcrumbs', null); ?>

<?php get_template_part('sections/sec_flexible_contents'); ?>

<!-- 田村ビルズの「エピソードを知る」ここから -->
<section id="people_random_article" class="pt_100 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">田村ビルズの「エピソード」</h2>
        <div class="column_3 d_grid gap_30">
            <?php
                $page_id = get_the_ID(); //現在表示しているページID
                $page_parent    = get_post()->post_parent;
                $args = array(
                    'post_type' => 'page',
                    'post_parent' => $page_parent, //親のIDを指定
                    'posts_per_page' => 3, //表示する件数
                    'order' => 'ASC',
                    'orderby' => 'rand', //ランダムで表示
                    'post__not_in' => array($page_id), //非表示にする個別ページ
                );
                $page_child = get_posts($args);
            ?>
            <?php
                foreach($page_child as $child):
                    $child_id = $child->ID;
                    $episode_link = get_the_permalink($child_id);
                    $episode_ttl = get_the_title($child_id);
                    if ( has_post_thumbnail() ):
                        $episode_img = get_the_post_thumbnail_url( $child_id, 'medium' );
                    else:
                        $episode_img = '';
                        $episode_img .= get_template_directory_uri();
                        $episode_img .= '/assets/public/img/common/no_img.png';
                    endif;
        
                    get_template_part('blocks/bl_link_box_01', null, [
                        'link' => $episode_link,
                        'img' => $episode_img,
                        'ttl' => $episode_ttl,
                        'explain' => '',
                        'is_tag' => false,
                        'tag_txt' => '',
                        'tag_color' => '',
                        'class' => '',
                    ]);
                endforeach;
            ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="mt_50">
            <?php
                $btn_link = '';
                $btn_link .= home_url();
                $btn_link .= '/episode';
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
<!-- 田村ビルズの「エピソード」ここまで -->

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>