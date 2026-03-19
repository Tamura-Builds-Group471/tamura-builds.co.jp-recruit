<?php
$is_front_page = is_front_page();
$is_media = false;
$template_directory_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-569MZER1PF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-569MZER1PF');
    </script>
    <!-- Google tag (gtag.js) -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5GDWX6X6');
    </script>
    <!-- End Google Tag Manager -->

    <!-- meta -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1476889020425789');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1476889020425789&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
     
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- フォント読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GDWX6X6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php wp_body_open(); ?>

    <div id="page" class="site <?php echo $is_front_page ? 'is_front_page' : ''; ?>">
        <header id="header" class="header <?php echo $is_front_page ? 'is_front_page' : ''; ?>">
            <?php if (is_home() || is_front_page()) : ?>
                <h1 id="headerLogo" class="header_logo_wrap d_grid grid_abs <?php echo $is_media ? 'is_left' : ''; ?>">
                    <a href="<?php echo home_url(); ?>">
                        <img id="headerLogo" class="header_logo" src="<?php echo get_template_directory_uri(); ?>/assets/public/img/common/header_logo2026.svg" alt="株式会社田村ビルズ 2025 RECRUITING SITE">
                    </a>
                </h1>
            <?php else: ?>
                <p id="headerLogo" class="header_logo_wrap d_grid grid_abs <?php echo $is_media ? 'is_left' : ''; ?>">
                    <a href="<?php echo home_url(); ?>">
                        <img id="headerLogo" class="header_logo" src="<?php echo get_template_directory_uri(); ?>/assets/public/img/common/header_logo2026.svg" alt="株式会社田村ビルズ 2025 RECRUITING SITE">
                    </a>
                </p>
            <?php endif; ?>
            <nav class="header_menuList_pc">
                <ul class="header_menuList_pc_wrap">
                    <li class="mynavi_btn">
                        <a href="<?php echo home_url(); ?>/career-change/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/20250509_1.jpg" alt="マイナビ2025" border="0">
                        </a>
                    </li>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-nav',
                        'container'     => '',
                        'menu_class'    => '',
                        'items_wrap'    => '%3$s'
                    ));
                    ?>
                    <li class="header-btn">
                        <a href="<?php echo home_url(); ?>/#top-entry">
                            <span>ENTRY</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header_mynavi_sp">
                <a href="<?php echo home_url(); ?>/career-change/">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/icon/20250509_1.jpg" alt="マイナビ2025" border="0">
                </a>
            </div>
            <div class="header_hamburger_sp"><span></span><span></span><span></span></div>
            <nav class="header_menuList_sp">
                <ul class="header_menuList_sp_wrap">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-nav-sp',
                        'container'     => '',
                        'menu_class'    => '',
                        'items_wrap'    => '%3$s'
                    ));
                    ?>
                    <li class="header-btn">
                        <a href="<?php echo home_url(); ?>/new-graduates-entry">
                            <span>ENTRY</span>
                        </a>
                    </li>
                </ul>
                <div class="header_menuList_sp_info">
                    <a class="header_menuList_sp_info_logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/common/logo_white.svg" alt="株式会社田村ビルズ 2023 RECRUITING SITE">
                    </a>
                    <!-- <a class="header_menuList_sp_info_txtlink" href="https://tamura-builds.co.jp/" target="_blank" rel="noopener">株式会社田村ビルズグループ</a> -->
                </div>
            </nav>
        </header>

        <main id="content" role="main">