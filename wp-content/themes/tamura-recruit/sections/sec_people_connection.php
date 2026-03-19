<?php

$args = wp_parse_args(
    $args,
    array(
      'ttl'     => '',
    )
);
?>

<?php $post_objects = get_field('people_connection', get_the_ID()); if( $post_objects ): ?>

<section id="job_links" class="pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('blocks/bl_heading_2_bk', null, [
            'ttl' => $args['ttl'],
            'color' => 'green',
            'class' => 'mb_50',
        ]) ?>
        <div class="column_3 d_grid gap_25">
            <?php foreach((array)$post_objects as $object):?>
                
                <?php
                    if( have_rows('flexible_contents', $object->ID) ):
                        while ( have_rows('flexible_contents',$object->ID) ): the_row(); 
                            if( get_row_layout($object->ID) == 'sec_people' ):

                                $post_link = get_the_permalink($object->ID);
                                $post_name = get_the_title($object->ID);
                                $post_excerpt = get_the_excerpt($object->ID);
                                $post_detail = get_sub_field('people_sub_txt_01', $object->ID);
                                if ( has_post_thumbnail() ):
                                    $post_img = get_the_post_thumbnail_url( $object->ID, 'large' );
                                else:
                                    $post_img = '';
                                    $post_img .= get_template_directory_uri();
                                    $post_img .= '/assets/public/img/common/no_img.png';
                                endif;
                                
                                get_template_part('blocks/bl_link_box_01', null, [
                                    'link' => $post_link,
                                    'img' => $post_img,
                                    'ttl' => $post_name,
                                    'explain' => $post_detail,
                                    'is_tag' => false,
                                    'tag_txt' => '',
                                    'tag_color' => '',
                                    'class' => '',
                                ]);

                            endif;
                        endwhile;
                    endif;
                ?>
                
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>