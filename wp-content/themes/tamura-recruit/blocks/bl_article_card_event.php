<?php
    $today = date('Y.m.d');
    $week = array( "日", "月", "火", "水", "木", "金", "土" );
    $date_start = get_field('event_date_start', false, false);
    $date_start = new DateTime($date_start);
    $date_end = get_field('event_date_end', false, false);
    $date_end = new DateTime($date_end);
?>
<a class="bl_article_card_event" href="<?php the_permalink(); ?>">
    <?php if (strtotime(date('Y-m-d H:i')) > strtotime($date_end->format('Y-m-d H:i'))): ?>
        <span class="bl_article_card_event_finsh">終了しました</span>
    <?php else: endif; ?>
    <div class="bl_article_card_event_img">
        <?php if (has_post_thumbnail()) :?>
            <?php the_post_thumbnail(); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/common/no_img.png" alt="">
        <?php endif ;?>
    </div>
    <div class="bl_article_card_event_contents">
        <span class="bl_article_card_event_contents_title"><?php the_title(); ?></span>

        <?php if(($date_start->format('d') === $date_end->format('d')) && ($date_start->format('m') === $date_end->format('m')) && ($date_start->format('Y') === $date_end->format('Y'))): ?>
            <!-- イベント終了日が同日の場合 -->
            <span class="bl_article_card_event_contents_date"><?php echo $date_start->format('Y年m月d日'); ?>(<?php echo $week[$date_start->format('w')]; ?>)  <?php echo $date_start->format('H:i'); ?>〜<?php echo $date_end->format('H:i'); ?></span>
        <?php elseif(($date_start->format('d') != $date_end->format('d')) && ($date_start->format('m') === $date_end->format('m'))): ?>
            <!-- イベント終了日が同月の別日 -->
            <span class="bl_article_card_event_contents_date"><?php echo $date_start->format('Y年m月d日'); ?>(<?php echo $week[$date_start->format('w')]; ?>)  <?php echo $date_start->format('H:i'); ?>〜<?php echo $date_end->format('d日'); ?>(<?php echo $week[$date_end->format('w')]; ?>)  <?php echo $date_end->format('H:i'); ?></span>
        <?php elseif($date_start->format('m') != $date_end->format('m')): ?>
            <!-- イベント終了月が異なる場合 -->
            <span class="bl_article_card_event_contents_date"><?php echo $date_start->format('Y年m月d日'); ?>(<?php echo $week[$date_start->format('w')]; ?>)  <?php echo $date_start->format('H:i'); ?>〜<?php echo $date_end->format('m月d日'); ?>(<?php echo $week[$date_end->format('w')]; ?>)  <?php echo $date_end->format('H:i'); ?></span>
        <?php elseif($date_start->format('Y') != $date_end->format('Y')): ?>
            <!-- イベント終了年が異なる場合 -->
            <span class="bl_article_card_event_contents_date"><?php echo $date_start->format('Y年m月d日'); ?>(<?php echo $week[$date_start->format('w')]; ?>)  <?php echo $date_start->format('H:i'); ?>〜<?php echo $date_end->format('Y年m月d日'); ?>(<?php echo $week[$date_end->format('w')]; ?>)  <?php echo $date_end->format('H:i'); ?></span>
        <?php endif; ?>
        
    </div> 
</a>