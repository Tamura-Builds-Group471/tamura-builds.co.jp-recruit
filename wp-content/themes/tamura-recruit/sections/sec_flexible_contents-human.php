<?php $page_id = get_the_ID(); ?>
<?php if (have_rows('flexible_contents', $page_id)): ?>
    <section <?php my_body_id(); ?> class="pt_50">
        <div class="sec_inner">
            <?php $num_id = 1; ?>
            <?php while (have_rows('flexible_contents', $page_id)): the_row(); ?>

                <!-- 【１カラム】H2見出し ここから -->
                <?php if (get_row_layout() == 'h2_midashi'): ?>
                    <h2 class="tx_center mb_50" id="flexible_<?php echo $num_id; ?>"><?php the_sub_field('h2_ttl'); ?></h2>
                <?php endif; ?>
                <!-- 【１カラム】H2見出し ここまで -->

                <!-- 【１カラム】テキスト（中央寄せ） ここから -->
                <?php if (get_row_layout() == 'text_area'): ?>
                    <div class="mx_auto" style="max-width:570px;" id="flexible_<?php echo $num_id; ?>">
                        <p class="text"><?php the_sub_field('text_center', true); ?></p>
                    </div>
                <?php endif; ?>
                <!-- 【１カラム】テキスト（中央寄せ） ここまで -->

                <!-- 【１カラム】ボタン（中央寄せ）） ここから -->
                <?php if (get_row_layout() == 'btn'): ?>
                    <div class="mx_auto" style="max-width:570px;" id="flexible_<?php echo $num_id; ?>">
                        <?php
                        $btn_link = get_sub_field('btn_link');
                        $btn_txt = get_sub_field('btn_txt');
                        $btn_color = get_sub_field('btn_color');
                        get_template_part('blocks/bl_btn', null, [
                            'link'    => $btn_link,
                            'txt'     => $btn_txt,
                            'is_icon' => true,
                            'color' => $btn_color,
                            'class'   => 'mx_auto',
                        ])
                        ?>
                    </div>
                <?php endif; ?>
                <!-- 【１カラム】ボタン（中央寄せ） ここまで -->

                <!-- 見出し+リンク ここから -->
                <?php if (get_row_layout() == 'outlink_box'): ?>
                    <?php
                    $outlink_box_ttl = get_sub_field('outlink_box_ttl');
                    $outlink_box_url = get_sub_field('outlink_box_url');
                    ?>
                    <?php get_template_part('blocks/bl_outlink_box', null, [
                        'ttl' => $outlink_box_ttl,
                        'link' => $outlink_box_url,
                        'class' => '',
                    ]) ?>
                <?php endif; ?>
                <!-- 見出し+リンク ここまで -->

                <!-- シングル画像（中央寄せ） ここから -->
                <?php if (get_row_layout() == 'single_img'): ?>

                    <?php if (is_page(470) || is_page(475)) : ?>
                        <div class="mx_auto pc-mt50 pc-mb50 sp-mt20 sp-mt20 text-center" style="max-width:600px;" id="flexible_<?php echo $num_id; ?>">
                            <img class="flexible-logo" src="<?php the_sub_field('single_img_center'); ?>" alt="">
                        </div>
                    <?php else : ?>
                        <div class="mx_auto pc-mt50 pc-mb50 sp-mt20 sp-mt20" style="max-width:600px;" id="flexible_<?php echo $num_id; ?>">
                            <img src="<?php the_sub_field('single_img_center'); ?>" alt="">
                        </div>
                    <?php endif; ?>

                <?php endif; ?>
                <!-- シングル画像（中央寄せ） ここまで -->

                <!-- 画像つきリンクボックス ここから -->
                <?php if (get_row_layout() == 'sec_link_box_01'): ?>
                    <div class="column_3 d_grid gap_30" id="flexible_<?php echo $num_id; ?>">
                        <?php if (have_rows('link_box_01')): ?>
                            <?php while (have_rows('link_box_01')) : the_row(); ?>
                                <?php
                                $link_box_01_url = ''; //初期化
                                $link_box_01_url .= home_url();
                                $link_box_01_url .= get_sub_field('link_box_01_url');
                                if (get_sub_field('link_box_01_img')):
                                    $link_box_01_img = get_sub_field('link_box_01_img');
                                else:
                                    $link_box_01_img = '';
                                    $link_box_01_img .= get_template_directory_uri();
                                    $link_box_01_img .= '/assets/public/img/common/no_img.png';
                                endif;
                                $link_box_01_ttl = get_sub_field('link_box_01_ttl');
                                $link_box_01_expalin = get_sub_field('link_box_01_expalin');

                                $link_box_01_tag_value = get_post_meta($post->ID, 'link_box_01_tag', true);
                                if (empty($link_box_01_tag_value)):
                                    $link_box_01_tag_display = 'false';
                                else:
                                    $link_box_01_tag_display = 'true';
                                endif;
                                $link_box_01_tag = get_sub_field('link_box_01_tag');
                                $link_box_01_tag_color = get_sub_field('link_box_01_tag_color');
                                ?>
                                <?php get_template_part('blocks/bl_link_box_01', null, [
                                    'link' => $link_box_01_url,
                                    'img' => $link_box_01_img,
                                    'ttl' => $link_box_01_ttl,
                                    'explain' => $link_box_01_expalin,
                                    'is_tag' => $link_box_01_tag_display,
                                    'tag_txt' => $link_box_01_tag,
                                    'tag_color' => $link_box_01_tag_color,
                                    'class' => '',
                                ]) ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <!-- 画像つきリンクボックス ここまで -->

                <!-- テキストリンク ここから -->
                <?php if (get_row_layout() == 'sec_text_link_card'): ?>
                    <div class="column_3 d_grid gap_25" id="flexible_<?php echo $num_id; ?>">
                        <?php if (have_rows('text_link_card')): ?>
                            <?php while (have_rows('text_link_card')) : the_row(); ?>
                                <?php
                                $text_link_card_url = ''; //初期化
                                $text_link_card_url .= home_url();
                                $text_link_card_url .= get_sub_field('text_link_card_url');
                                $text_link_card_ttl = get_sub_field('text_link_card_ttl');
                                $text_link_card_explain = get_sub_field('text_link_card_explain');
                                $text_link_card_color = get_sub_field('text_link_card_color');
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
                <!-- テキストリンク ここまで -->

                <!-- 人情報 ここから -->
                <?php if (get_row_layout() == 'sec_people'): ?>
                    <?php
                    $people_img = get_sub_field('people_img');
                    $people_name_jp = get_sub_field('people_name_jp');
                    $people_name_en = get_sub_field('people_name_en');
                    $people_sub_txt_01 = get_sub_field('people_sub_txt_01');
                    $people_sub_txt_02 = get_sub_field('people_sub_txt_02');
                    ?>
                    <?php get_template_part('blocks/bl_people_detail', null, [
                        'img' => $people_img,
                        'name_jp' => $people_name_jp,
                        'name_en' => $people_name_en,
                        'sub_txt' => $people_sub_txt_01,
                        'bold_txt' => $people_sub_txt_02,
                    ]) ?>
                <?php endif; ?>
                <!-- 人情報 ここまで -->

                <!-- 【ブロック】左：画像　右：人情報+テキスト ここから -->
                <?php if (get_row_layout() == 'sec_people_new'): ?>
                    <?php
                    $people_img = get_sub_field('people_img');
                    $people_name_jp = get_sub_field('people_name_jp');
                    $people_name_en = get_sub_field('people_name_en');
                    $people_sub_txt_01 = get_sub_field('people_sub_txt_01');
                    $people_sub_txt_02 = get_sub_field('people_sub_txt_02');
                    $txt = get_sub_field('right_txt');
                    ?>
                    <?php get_template_part('blocks/bl_right_txt_left_img2', null, [
                        'img' => $people_img,
                        'txt' => $txt,
                        'name_jp' => $people_name_jp,
                        'name_en' => $people_name_en,
                        'sub_txt' => $people_sub_txt_01,
                        'bold_txt' => $people_sub_txt_02,
                    ]) ?>
                <?php endif; ?>
                <!-- 人情報 ここまで -->

                <!-- 【セクション】左：画像　右：テキスト ここから -->
                <?php if (get_row_layout() == 'sec_left_img_right_txt'): ?>
                    <?php
                    $txt = get_sub_field('right_txt');
                    $img = get_sub_field('left_img');
                    get_template_part('blocks/bl_right_txt_left_img', null, [
                        'txt' => $txt,
                        'img' => $img,
                        'class' => '',
                    ]) ?>
                <?php endif; ?>
                <!-- 【セクション】左：画像　右：テキスト ここまで -->

                <!-- 【セクション】左：テキスト　右：画像 ここから -->
                <?php if (get_row_layout() == 'sec_left_txt_right_img'): ?>
                    <?php
                    $txt = get_sub_field('left_txt');
                    $img = get_sub_field('right_img');
                    get_template_part('blocks/bl_right_img_left_txt', null, [
                        'txt' => $txt,
                        'img' => $img,
                        'class' => '',
                    ]) ?>
                <?php endif; ?>
                <!-- 【セクション】左：テキスト　右：画像 ここまで -->

                <!-- 【セクション】左：画像　右：見出し+テキスト ここから -->
                <?php if (get_row_layout() == 'sec_left_img_right_midashi_txt'): ?>
                    <?php
                    $midashi = get_sub_field('right_midashi');
                    $txt = get_sub_field('right_txt');
                    $img = get_sub_field('left_img');
                    get_template_part('blocks/bl_right_ttl_txt_left_img', null, [
                        'midashi' => $midashi,
                        'txt' => $txt,
                        'img' => $img,
                        'class' => '',
                    ]) ?>
                <?php endif; ?>
                <!-- 【セクション】左：画像　右：見出し+テキスト ここまで -->

                <!-- 【セクション】左：見出し+テキスト　右：画像 ここから -->
                <?php if (get_row_layout() == 'sec_left_midashi_txt_right_img'): ?>
                    <?php
                    $midashi = get_sub_field('left_midashi');
                    $txt = get_sub_field('left_txt');
                    $img = get_sub_field('right_img');
                    get_template_part('blocks/bl_right_img_left_ttl_txt', null, [
                        'midashi' => $midashi,
                        'txt' => $txt,
                        'img' => $img,
                        'class' => '',
                    ]) ?>
                <?php endif; ?>
                <!-- 【セクション】左：見出し+テキスト　右：画像 ここまで -->

                <!-- 【セクション】上：画像　下：テキスト ここから -->
                <?php if (get_row_layout() == 'sec_img_txt_box'): ?>
                    <div class="column_2 d_grid gap_50 gap_60_pc" id="flexible_<?php echo $num_id; ?>">
                        <?php if (have_rows('bl_img_txt_box')): ?>
                            <?php while (have_rows('bl_img_txt_box')) : the_row(); ?>
                                <?php
                                if (get_sub_field('up_img')):
                                    $up_img = get_sub_field('up_img');
                                else:
                                    $up_img = '';
                                    $up_img .= get_template_directory_uri();
                                    $up_img .= '/assets/public/img/common/no_img.png';
                                endif;
                                $down_txt = get_sub_field('down_txt');
                                ?>
                                <?php get_template_part('blocks/bl_img_txt_box', null, [
                                    'img' => $up_img,
                                    'txt' => $down_txt,
                                ]) ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <!-- 【セクション】上：画像　下：テキスト ここまで -->

                <!-- セクション_よくある質問 ここから -->
                <?php if (get_row_layout() == 'sec_faq'): ?>
                    <div class="accordion accordion-flush" id="accordion<?php echo $num_id; ?>">
                        <?php
                        $in_page_link = '';
                        $in_page_link .= 'faq_';
                        $in_page_link .= $num_id;

                        if (have_rows('faq_contents')):

                            $faq_contents_num = '';
                            $faq_contents_num .= 1;

                            while (have_rows('faq_contents')): the_row();

                                $faq_head_id = '';
                                $faq_head_id .= $in_page_link;
                                $faq_head_id .= '_head_';
                                $faq_head_id .= $faq_contents_num;

                                $faq_contents_id = '';
                                $faq_contents_id .= $in_page_link;
                                $faq_contents_id .= '_contents_';
                                $faq_contents_id .= $faq_contents_num;

                                $faq_q = get_sub_field('faq_q');
                                $faq_a = get_sub_field('faq_a');

                                // 最初の質問は開いた状態で表示する
                                if ($faq_contents_num === '1'):
                                    $first_touch = 'first-touch01';
                                    $show = 'show';
                                else:
                                    $first_touch = '';
                                    $show = '';
                                endif;

                        ?>
                                <?php
                                get_template_part('blocks/bl_faq', null, [
                                    'faq_num' => $num_id,
                                    'faq_head_id' => $faq_head_id,
                                    'faq_contents_id' => $faq_contents_id,
                                    'faq_q' => $faq_q,
                                    'faq_a' => $faq_a,
                                    'first_touch' => $first_touch,
                                    'show' => $show,
                                ]);
                                ?>

                        <?php
                                $faq_contents_num++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                <?php endif; ?>
                <!-- セクション_よくある質問 ここまで -->

                <!-- セクション_採用情報 ここから -->
                <?php if (get_row_layout() == 'sec_recruit_info'): ?>
                    <?php if (get_sub_field('recruit_info_on')): ?>
                        <?php get_template_part('sections/sec_recruit_info_links', null, [
                            'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
                        ]) ?>
                    <?php endif; ?>
                <?php endif; ?>
                <!-- セクション_採用情報 ここまで -->

                <!-- セクション_採用エントリーリンク ここから -->
                <?php if (get_row_layout() == 'sec_cta'): ?>
                    <?php if (get_sub_field('cta_on')): ?>
                        <?php get_template_part('sections/sec_cta'); ?>
                    <?php endif; ?>
                <?php endif; ?>
                <!-- セクション_採用エントリーリンク ここまで -->

                <!-- スペーサー ここから -->
                <?php if (get_row_layout() == 'spacer'): ?>
                    <div style="height:<?php the_sub_field('space_height'); ?>px;" id="flexible_<?php echo $num_id; ?>"></div>
                <?php endif; ?>
                <!-- スペーサー ここまで -->

                <!-- HTML ここから -->
                <?php if (get_row_layout() == 'html'): ?>
                    <div id="flexible_<?php echo $num_id; ?>">
                        <?php the_sub_field('html_contents'); ?>
                    </div>
                <?php endif; ?>
                <!-- HTML ここまで -->

                <?php ++$num_id; ?>

            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>