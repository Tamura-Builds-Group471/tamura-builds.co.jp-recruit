<?php

$args = wp_parse_args(
    $args,
    array(
      // 'キー名' => 'デフォルト値'
      'posts_per_page'  => '12',
      'cat_name' => '',
    )
);
$posts_per_pag = $args['posts_per_page'];
$cat_name = $args['cat_name'];
?>
<!-- イベント一覧ページの場合↓ -->
<?php if(is_category('event')): ?>
    <div class="column_3 d_grid gap_30">
        <?php
            $paged = (int) get_query_var('paged');
            $args = array(
                'posts_per_page' => 12,
                'paged' => $paged,
                'category_name' => 'event',
                'meta_key' => 'event_date_start',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $categories = get_the_category();
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <?php get_template_part('blocks/bl_article_card_event', null,) ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php $GLOBALS['wp_query'] = $the_query; ?>
        <?php endif; ?>
    </div>
<!-- イベント一覧ページ以外の場合↓ -->
<?php else: ?>
    <?php
        $current_post_id = is_single() ? get_the_ID() : 0;
        $paged = (int) get_query_var('paged');
        $args = array(
            'posts_per_page' => $posts_per_pag,
            'paged' => $paged,
            'category_name' => $cat_name,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            "post__not_in" => $current_post_id ? [$current_post_id] : [],
        );
        $the_query = new WP_Query($args);
        $GLOBALS['wp_query'] = $the_query;
        if ( $the_query->have_posts() ) :
    ?>
    <div class="column_3 d_grid gap_30">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
            <?php
                $post_link = get_the_permalink();
                $post_date = get_the_date('Y.n.j');
                $post_ttl = get_the_title();
                if(has_post_thumbnail()):
                    $post_img = get_the_post_thumbnail_url();
                else:
                    $post_img = '';
                    $post_img .= get_template_directory_uri();
                    $post_img .= '/assets/public/img/common/no_img.png';
                endif;
                $cat = get_the_category();
                $cat = $cat[0];
                $cat_name = $cat->cat_name;
                if($cat_name === 'お知らせ'):
                    $cat_color = 'blue';
                elseif($cat_name === 'イベント'):
                    $cat_color = 'green';
                elseif($cat_name === 'スタッフブログ'):
                    $cat_color = 'red';
                elseif($cat_name === 'その他'):
                    $cat_color = 'gray';
                endif;
                get_template_part('blocks/bl_link_box_01', null, [
                    'link' => $post_link,
                    'img' => $post_img,
                    'ttl' => $post_ttl,
                    'explain' => $post_date,
                    'is_tag' => true,
                    'tag_txt' => $cat_name,
                    'tag_color' => $cat_color,
                    'class' => '',
                ]);
            ?>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php endif; ?>