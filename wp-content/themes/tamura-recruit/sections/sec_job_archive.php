<?php $parent_page_id ="167" ; ?>
<?php $post_objects = get_field('lower_page_lists', $parent_page_id); if( $post_objects ): ?>

<section id="job_links" class="pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('blocks/bl_heading_2_bk', null, [
            'ttl' => '田村ビルズグループの仕事一覧',
            'color' => 'green',
            'class' => 'mb_50',
        ]) ?>
        <div class="column_3 d_grid gap_25">
            <?php foreach((array)$post_objects as $object):?>
                <?php
                    $post_link = get_the_permalink($object->ID);
                    $post_ttl = get_the_title($object->ID);
                    $post_excerpt = get_the_excerpt($object->ID);
                ?>
                <?php get_template_part('blocks/bl_text_link_card', null, [
                    'link' => $post_link,
                    'ttl' => $post_ttl,
                    'explain' => $post_excerpt,
                    'color' => 'green',
                ]) ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>