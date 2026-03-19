<?php
/**
 * single-application-guideline.php
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

<?php 
    $terms = wp_get_object_terms($post->ID,'application_cat'); 
    foreach($terms as $term){
    $post_term = $term->slug;
?>

<?php 
    if($post_term=='new-graduates'): //投稿が「新卒採用」の場合
        $term_ttl = '新卒採用';
        $term_color = 'blue';
        $entry_link = '/recruit/new-graduates-entry';
    elseif($post_term=='midway'): //投稿が「中途採用」の場合
        $term_ttl = '中途採用';
        $term_color = 'green';
        $entry_link = '/recruit/midway-entry';
    endif;
?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

    <section id="single_application_intro" class="pt_50 pb_50">
        <div class="sec_inner">
            <div class="mx_auto" style="max-width:570px;">
                <p class="text"><?php the_field('application_txt'); ?></p>
            </div>
        </div>
    </section>

    <section id="single_application_summary" class="pt_50 pb_50">
        <div class="sec_inner">
            <table class="summary_table">
                <tbody>
                    <?php if( have_rows('summary_table') ): ?>
                        <?php while ( have_rows('summary_table') ) : the_row(); ?>
                            <tr class="summary_table_list d_grid">
                                <th class="summary_table_list_th"><?php the_sub_field('summary_ttl'); ?></th>
                                <td class="summary_table_list_td"><?php the_sub_field('summary_txt', true); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="mt_50">
                <?php
                    $term_txt = '';
                    $term_txt .= $term_ttl;
                    $term_txt .= 'エントリー';
                    get_template_part('blocks/bl_btn', null, [
                        'link'    => $entry_link,
                        'txt'     => $term_txt,
                        'is_icon' => true,
                        'color' => $term_color,
                        'class'   => 'mx_auto',
                    ]) 
                ?>
            </div>
        </div>
    </section>

    <section id="single_application_cat" class="pt_50 pb_50">
        <div class="sec_inner">
            <h2 class="tx_center mb_50">募集中の職種（<?php echo $term_ttl; ?>）</h2>
            <div class="column_3 d_grid gap_30">
                <?php
                    $args=array( 
                        'post_type' => 'application', //カスタム投稿名
                        'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
                        'taxonomy' => 'application_cat',
                        'term' => $post_term,
                    );
                ?>
                <?php $query = new WP_Query( $args );?>
                <?php if( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <?php
                        $post_id = get_the_ID();
                        $post_link = get_the_permalink();
                        $post_ttl = get_the_title();
                        $post_expalin = get_field('archive_explain', $post_id);
                        if ( has_post_thumbnail() ):
                            $post_head_img = get_the_post_thumbnail_url( $post_id, 'medium' );
                        // if(get_field('page_head_img', $post_id)):
                        //     $post_head_img = get_field('page_head_img', $post_id);
                        else:
                            $post_head_img = '';
                            $post_head_img .= get_template_directory_uri();
                            $post_head_img .= '/assets/public/img/common/no_img.png';
                        endif;
                        
                        get_template_part('blocks/bl_link_box_01', null, [
                            'link' => $post_link,
                            'img' => $post_head_img,
                            'ttl' => $post_ttl,
                            'explain' => $post_expalin,
                            'is_tag' => true,
                            'tag_txt' => $term_ttl,
                            'tag_color' => $term_color,
                            'class' => '',
                        ]) 
                    ?>
                <?php endwhile; else: ?>
                    <p>募集中の職種はありません。</p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>

<?php } ?>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>