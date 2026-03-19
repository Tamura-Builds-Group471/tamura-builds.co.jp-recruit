<?php

$args = wp_parse_args(
    $args,
    array(
      // 'キー名' => 'デフォルト値'
      'img'     => '',
      'en'      => '',
      'title'   => '',
      'class'   => '',
    )
);
?>

<section id="page_title" class="sec_page_title <?php echo $args['class'] ?>">
    <?php if (is_page_template( '' ) || is_singular('application') || is_page('business') || is_page('job')): ?>
        <img class="sec_page_title_img" src="<?php echo $args['img'] ?>">
    <?php else: ?>
        <img class="sec_page_title_img" src="<?php echo get_template_directory_uri(); ?><?php echo $args['img'] ?>">
    <?php endif; ?>
    <div class="sec_page_title_wrap">
        <div class="sec_inner">
            <span class="sec_page_title_wrap_en"><?php echo $args['en'] ?></span>
            <h1 class="sec_page_title_wrap_title"><?php echo $args['title'] ?></h1>
        </div> 
    </div>
</section>