<?php
/*
Template Name: 人を知る（子テーマ）_カスタムテンプレート
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

<!-- <?php if( get_field('page_head_img') ): ?>
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
<?php endif; ?> -->
<!-- ヘッダーエリア ここまで -->


<?php get_template_part('sections/sec_flexible_contents-human'); ?>

<!-- 田村ビルズの「人」ここから -->
<section id="people_random_article" class="pt_100 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">田村ビルズグループの「人」</h2>
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
                    if( have_rows('flexible_contents', $child->ID) ):
                        while ( have_rows('flexible_contents', $child->ID) ): the_row(); 
                            if( get_row_layout($child->ID) == 'sec_people' ):
                                $person_link = get_the_permalink($child_id);
                                $person_name = get_the_title($child_id);
                                $person_detail = get_sub_field('people_sub_txt_01', $page_id);
                                if ( has_post_thumbnail() ):
                                    $person_img = get_the_post_thumbnail_url( $child_id, 'large' );
                                // elseif(get_sub_field('people_img', $child_id)):
                                //     $person_img = get_sub_field('people_img', $child_id);
                                else:
                                    $person_img = '';
                                    $person_img .= get_template_directory_uri();
                                    $person_img .= '/assets/public/img/common/no_img.png';
                                endif;
                    
                                get_template_part('blocks/bl_link_box_01', null, [
                                    'link' => $person_link,
                                    'img' => $person_img,
                                    'ttl' => $person_name,
                                    'explain' => $person_detail,
                                    'is_tag' => false,
                                    'tag_txt' => '',
                                    'tag_color' => '',
                                    'class' => '',
                                ]);
                            endif; 
                        endwhile;
                    endif;
                endforeach 
            ;?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="mt_50">
            <?php
                $btn_link = '';
                $btn_link .= home_url();
                $btn_link .= '/people';
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
<!-- 田村ビルズの「人」ここまで -->

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>
