<?php
/**
 * taxonomy-midway.php
 */
get_header(); ?>

<?php
    $post_type = 'application';
    $taxonomy = 'application_cat';
    $term = "midway";
    $term_name = "中途採用";
    $term_color = "green";
?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/application-guideline/archive_application_header.jpg',
    'en'      => 'NEW GURADIATES',
    'title'   => '中途採用（募集要項）',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="pplication_midway_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <p class="text">中途採用の募集職種一覧になります。要項をご確認の上、<a href="<?php echo home_url(); ?>/midway-entry" class="theme_blue tx_deco_under">エントリー</a>へお進みください。新卒採用の方は<a href="<?php echo home_url(); ?>/application/new-graduates" class="theme_blue tx_deco_under">新卒採用 募集職種</a>をご確認ください。</p>
        </div>
    </div>
</section>

<section id="single_application_cat" class="pt_50 pb_50">
        <div class="sec_inner">
            <div class="column_3 d_grid gap_30">
                <?php
                    $args=array( 
                        'post_type' => $post_type, //カスタム投稿名
                        'posts_per_page'=> -1, //表示件数（-1で全ての記事を表示）
                        'taxonomy' => $taxonomy,
                        'term' => $term,
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
                        if(get_field('page_head_img', $post_id)):
                            $post_head_img = get_field('page_head_img', $post_id);
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
                            'tag_txt' => $term_name,
                            'tag_color' => $term_color,
                            'class' => '',
                        ]);
                    ?>
                <?php endwhile;?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>