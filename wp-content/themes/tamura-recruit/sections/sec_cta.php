<?php

$args = wp_parse_args(
    $args,
    array(
      // 'キー名' => 'デフォルト値'
      'main-txt'   => 'JOIN US!!',
      'btn-txt'    => '採用エントリーはこちら',
      'class'      => '',
    )
);
?>

<section id="cta" class="sec_cta <?php echo $args['class'] ?>">
    <div <?php if(is_page_template( 'template-flexible-contents.php' )): ?>class="sec_inner_full" <?php endif; ?>>
        <a class="sec_cta_wrap" href="<?php echo home_url(); ?>/#top-entry">
            <div class="sec_cta_wrap_txt">
                <span class="sec_cta_wrap_txt_main mx_auto"><?php echo $args['main-txt'] ?></span>
                <span class="sec_cta_wrap_txt_btn mx_auto"><?php echo $args['btn-txt'] ?></span>
            </div>
        </a>
    </div>
</section>