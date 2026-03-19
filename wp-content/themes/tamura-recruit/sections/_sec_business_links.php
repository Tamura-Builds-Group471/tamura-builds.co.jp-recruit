<section id="business_links" class="pt_50 pb_50">
    <div class="sec_inner">
        <h2 class="tx_center mb_50">事業一覧</h2>

        <?php $page_id = 165; ?>
        <?php if( have_rows('flexible_contents', $page_id) ): ?>
            <?php while ( have_rows('flexible_contents', $page_id) ): the_row(); ?>
                <?php if( get_row_layout($page_id) == 'sec_text_link_card' ): ?>
                    <?php if( get_sub_field('text_link_card_child_on', $page_id) ): ?>
                        <div class="column_3 d_grid gap_25">
                            <?php if( have_rows('text_link_card', $page_id) ): ?>
                                <?php while ( have_rows('text_link_card', $page_id) ) : the_row(); ?>
                                    <?php
                                        $text_link_card_url = ''; //初期化
                                        $text_link_card_url .= home_url();
                                        $text_link_card_url.= get_sub_field('text_link_card_url', $page_id);
                                        $text_link_card_ttl = get_sub_field('text_link_card_ttl', $page_id);
                                        $text_link_card_explain = get_sub_field('text_link_card_explain', $page_id);
                                        $text_link_card_color = get_sub_field('text_link_card_color', $page_id);
                                    ?>
                                    <?php get_template_part('blocks/bl_text_link_card', null, [
                                        'link' => $text_link_card_url,
                                        'ttl' => $text_link_card_ttl,
                                        'explain' => $text_link_card_explain,
                                        'color' => $text_link_card_color,
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