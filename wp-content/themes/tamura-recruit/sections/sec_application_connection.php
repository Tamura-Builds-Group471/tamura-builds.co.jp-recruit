
<?php
$args = wp_parse_args(
    $args,
    array(
      'ttl'     => '',
    )
);
?>

<?php $post_objects = get_field('application_connection'); if( $post_objects ): ?>

    <section id="application_connection" class="pt_100 pb_50">
        <div class="sec_inner">
            <?php get_template_part('blocks/bl_heading_2_bk', null, [
                'ttl' => $args['ttl'],
                'color' => 'blue',
                'class' => 'mb_50',
            ]) ?>
            <div class="column_3 d_grid gap_30">

                <?php foreach((array)$post_objects as $object):?>

                    <?php
                        $post_link = get_the_permalink($object->ID);
                        $post_ttl = get_the_title($object->ID);
                        $post_expalin = get_field('archive_explain', $object->ID);
                        if(get_field('page_head_img', $object->ID)):
                            $post_head_img = get_field('page_head_img', $object->ID);
                        else:
                            $post_head_img = '';
                            $post_head_img .= get_template_directory_uri();
                            $post_head_img .= '/assets/public/img/common/no_img.png';
                        endif;

                        $terms = wp_get_object_terms($object->ID,'application_cat'); 
                        foreach($terms as $term) {
                            $post_term = $term->slug;
                        }
                        if($post_term=='new-graduates'): //投稿が「新卒採用」の場合
                            $term_ttl = '新卒採用';
                            $term_color = 'blue';
                        elseif($post_term=='midway'): //投稿が「中途採用」の場合
                            $term_ttl = '中途採用';
                            $term_color = 'green';
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

                <?php endforeach; ?>

            </div>
        </div>
    </section>

<?php endif; ?>