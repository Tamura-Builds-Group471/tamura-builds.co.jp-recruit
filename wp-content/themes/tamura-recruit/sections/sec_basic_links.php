<section id="basic_contents" class="pt_50 pb_50">
    <div class="sec_inner">
        <?php get_template_part('blocks/bl_heading_2_en', null, [
            'ttl-en' => 'Get to know THE BASICS',
            'ttl-ja' => '基本を知る',
            // 'class' => 'white',
        ]) ?>

        <?php $page_id = 163; ?>
        <?php if( have_rows('flexible_contents', $page_id) ): ?>
            <?php while ( have_rows('flexible_contents', $page_id) ): the_row(); ?>
                <?php if( get_row_layout() == 'sec_link_box_01' ): ?>
                    <?php if( get_sub_field('link_box_01_child_on') ): ?>
                        <div class="column_3 d_grid gap_30">
                            <?php if( have_rows('link_box_01')): ?>
                                <?php while ( have_rows('link_box_01')) : the_row(); ?>
                                    <?php
                                        $link_box_01_url = ''; //初期化
                                        $link_box_01_url .= home_url();
                                        $link_box_01_url.= get_sub_field('link_box_01_url');
                                        if(get_sub_field('link_box_01_img')):
                                            $link_box_01_img = get_sub_field('link_box_01_img');
                                        else:
                                            $link_box_01_img = '';
                                            $link_box_01_img .= get_template_directory_uri();
                                            $link_box_01_img .= '/assets/public/img/common/no_img.png';
                                        endif;
                                        $link_box_01_ttl = get_sub_field('link_box_01_ttl');
                                        $link_box_01_expalin = get_sub_field('link_box_01_expalin');
                                    ?>
                                    <?php get_template_part('blocks/bl_link_box_01', null, [
                                        'link' => $link_box_01_url,
                                        'img' => $link_box_01_img,
                                        'ttl' => $link_box_01_ttl,
                                        'explain' => $link_box_01_expalin,
                                        'class' => '',
                                    ]) ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>