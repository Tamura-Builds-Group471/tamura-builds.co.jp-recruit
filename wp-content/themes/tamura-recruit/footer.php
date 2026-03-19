            </main>
            
    <footer id="footer" class="footer" role="contentinfo">
        <div class="sec_inner">
            <a href="<?php echo home_url(); ?>">
                <img id="footerLogo" class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/assets/public/img/common/logo_white.svg" alt="株式会社田村ビルズ 2023 RECRUITING SITE">
            </a>
            <nav id="footerNav" class="footer_nav d_grid">
                <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav01', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                    <ul class="footer_nav_box_sns d_grid gap_10">
                        <li>
                            <a class="line" href="https://liff.line.me/2004781790-JZOGxzdq/landing?follow=%40579zznrn&lp=LSIHt4&liff_id=2004781790-JZOGxzdq" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/sns_icon_line.svg">
                            </a>
                        </li>
                         <li>
                            <a class="instagram" href="https://www.instagram.com/tamura_recruit/" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/sns_icon_instagram.svg">
                            </a>
                        </li> 
                        <!-- <li>
                            <a class="twitter" href="https://twitter.com/builds_kun" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/sns_icon_twitter.svg">
                            </a>
                        </li> -->
                        <li>
                            <a class="youtube" href="https://www.youtube.com/channel/UCRiqXoSewzP6RRXWPjBtxsQ?view_as=subscriber" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/sns_icon_youtube.svg">
                            </a>
                        </li>
                        <!-- <li>
                            <a class="facebook" href="https://www.facebook.com/tamura.recruit/" target="_blank" rel="noopener">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/sns_icon_facebook.svg">
                            </a>
                        </li> -->
                    </ul>
                </ul>
                <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav02', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                </ul>
                <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav03', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                </ul>
                <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav04', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                </ul>
                <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav05', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                </ul>
                <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav06', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                </ul>
                <!-- <ul class="footer_nav_box">
                    <?php wp_nav_menu( array(
                        'theme_location'=>'footer-nav04', 
                        'container'     =>'', 
                        'menu_class'    =>'',
                        'items_wrap'    =>'%3$s'));
                    ?>
                    <ul class="footer_nav_box_external">
                        <li class="footer_nav_box_external_link">
                            <a href="https://tamura-builds.co.jp/" target="_blank" rel="noopener">田村ビルズコーポレートサイト</a>
                        </li>
                        <li class="footer_nav_box_external_link">
                            <a href="https://tamura-kankyo.com/" target="_blank" rel="noopener">タムラエンバイロ</a>
                        </li>
                    </ul>
                </ul> -->
            </nav>
        </div>
        <div class="footer_copylight">
            <p>© TAMURA BUILDS GROUP INC</p>
        </div>
    </footer>
</div>

<?php
//    global $template;
//    $template_name = basename($template, '.php');
//    echo $template_name;
 ?>

<?php wp_footer(); ?>
</body>

</html>