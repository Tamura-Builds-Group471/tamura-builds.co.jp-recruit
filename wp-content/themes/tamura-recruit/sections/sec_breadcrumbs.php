<section id="breadcrumb" class="breadcrumbs_wrap">
    <div class="sec_inner">
        <ol class="breadcrumb">
            <!-- 募集要項 詳細ページの場合 -->
            <?php if (is_singular('application')): ?>
                <li class="breadcrumb-item">
                    <span>
                        <span>
                            <a href="<?php echo home_url();?>">ホーム</a>
                        </span>
                         / 
                        <span>
                            <?php if(has_term('new-graduates','application_cat')): ?>
                                <a href="<?php echo home_url();?>/application/new-graduates">募集要項（新卒）</a>
                            <?php elseif(has_term('midway','application_cat')): ?>
                                <a href="<?php echo home_url();?>/application/midway">募集要項（中途）</a>
                            <?php endif; ?>
                        </span>
                         / 
                        <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span>
                    </span>
                </li>
            <?php else: ?>
                <?php
                    if( function_exists( 'yoast_breadcrumb' )):
                        yoast_breadcrumb( '<li class="breadcrumb-item">','</li>' );
                    endif;
                ?>
            <?php endif; ?>
        </ol>
    </div>
</div>