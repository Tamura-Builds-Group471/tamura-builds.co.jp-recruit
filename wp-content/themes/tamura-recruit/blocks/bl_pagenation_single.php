<?php
  $next_post = get_next_post();
  $prev_post = get_previous_post();
?>
<div class="single_content_pagenation d_grid fw_b">
  <?php if ( $prev_post ) : ?>
    <a class="single_content_pagenation_btn" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15.544" viewBox="0 0 9 15.544">
        <path id="前面オブジェクトで型抜き_5" data-name="前面オブジェクトで型抜き 5" d="M15.544,9H13L7.772,2.944,2.543,9H0L7.772,0l7.772,9Z" transform="translate(0 15.544) rotate(-90)" fill="#242424"/>
      </svg>
      前の記事
    </a>
  <?php else: ?>
    <span class="single_content_pagenation_btn">
    </span>
  <?php endif; ?>

  <a class="single_content_pagenation_btn" href="<?php echo home_url();?>/news">一覧に戻る</a>

  <?php if ( $next_post ) : ?>
    <a class="single_content_pagenation_btn" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
      次の記事
      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="15.544" viewBox="0 0 9 15.544">
        <path id="前面オブジェクトで型抜き_4" data-name="前面オブジェクトで型抜き 4" d="M15.544,9H13L7.772,2.944,2.543,9H0L7.772,0l7.772,9Z" transform="translate(9) rotate(90)" fill="#242424"/>
      </svg>
    </a>
  <?php else: ?>
    <span class="single_content_pagenation_btn">
    </span>
  <?php endif; ?>
</div>