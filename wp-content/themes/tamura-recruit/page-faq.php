<?php
/**
 * page-faq.php
 */
get_header(); ?>

<?php get_template_part('sections/sec_page_title', null, [
    'img'     => '/assets/public/img/faq/faqHeader.png',
    'en'      => 'FAQ',
    'title'   => 'よくあるご質問',
    'class'   => '',
]) ?>

<?php get_template_part('sections/sec_breadcrumbs', null)?>

<section id="faq_intro" class="pt_50 pb_50">
    <div class="sec_inner">
        <div class="mx_auto" style="max-width:570px;">
            <p class="text">よくある質問と回答をまとめております。ご不明点などございましたら、まずはこちらをご確認ください。<br>解決できなない場合はお気軽にお問い合わせください。</p>
            <div class="mt_30">
                <?php
                    get_template_part('blocks/bl_btn', null, [
                        'link'    => 'https://tamura-builds.co.jp/contact/',
                        'txt'     => 'お問い合わせはこちら',
                        'is_icon' => true,
                        'color' => '',
                        'class'   => 'mx_auto',
                    ]) 
                ?>
            </div>
        </div>
    </div>
</section>

<section id="faq_body" class="pt_50 pb_50">
    <div class="sec_inner">
        
        <div class="faq_link_btn d_grid column_3 gap_30">
            <?php
                if(have_rows('faq_wrap')):
                    $faq_btn_num = 1;
                    while(have_rows('faq_wrap')): the_row();
                        $in_page_link = '';
                        $in_page_link .= '#faq_';
                        $in_page_link .= $faq_btn_num;
                        $btn_txt = get_sub_field('faq_ttl');
                        get_template_part('blocks/bl_btn_inpage', null, [
                            'in_page_link'    => $in_page_link,
                            'txt'     => $btn_txt,
                            'color' => 'blue',
                            'class'   => '',
                        ]);
                        $faq_btn_num++;
                    endwhile;
                endif; 
            ?>
        </div>

        <?php
            if(have_rows('faq_wrap')): 
            $faq_num = 1;
            while(have_rows('faq_wrap')): the_row();
            $in_page_link = '';
            $in_page_link .= 'faq_';
            $in_page_link .= $faq_num;
            $btn_txt = get_sub_field('faq_ttl');
        ?>

            <div id="<?php echo $in_page_link;?>" class="faq_wrap pt_100">
                <h3 class="faq_wrap_ttl tx_center mb_40"><?php echo $btn_txt;?></h3>
                <div class="accordion accordion-flush" id="accordion<?php echo $faq_num;?>">

                    <?php
                        if(have_rows('faq_contents')):
                        $faq_contents_num = '';
                        $faq_contents_num .= 1;
                        while(have_rows('faq_contents')): the_row();

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
                        if( $faq_contents_num === '1' ):
                            $first_touch = 'first-touch01';
                            $show = 'show';
                        else:
                            $first_touch = '';
                            $show = '';
                        endif;

                    ?>
                        <?php
                            get_template_part('blocks/bl_faq', null, [
                                'faq_num' => $faq_num,
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
            </div>
        <?php 
            $faq_num++;
            endwhile;
            endif;
        ?>

    </div>
</section>

<?php get_template_part('sections/sec_recruit_info_links', null, [
    'is_midashi' => 'true',  //見出しを表示したい場合のみ['true']、非表示の場合は空白
]) ?>

<?php get_template_part('sections/sec_cta'); ?>

<?php get_footer(); ?>