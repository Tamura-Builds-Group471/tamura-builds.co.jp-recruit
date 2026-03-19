<!DOCTYPE html>
<html lang="ja" style="margin-top:0!important;">

<head>
    <!-- clarity -->
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "mwp7hfrrft");
    </script>
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
    <!-- End Google tag -->

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
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5GDWX6X6');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- フォント読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- SEO・OGP -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>
    <link rel="canonical" href="<?php echo get_permalink(); ?>" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php wp_title('|', true, 'right');
                                        bloginfo('name'); ?>" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- contain-intrinsic-size style -->
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px;
        }
    </style>

    <!-- DNSプリフェッチ -->
    <link rel="dns-prefetch" href="//www.google.com" />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />

    <!-- WordPress コアCSS -->
    <link rel="stylesheet" id="dashicons-css" href="<?php echo includes_url('css/dashicons.min.css'); ?>" media="all" />
    <link rel="stylesheet" id="admin-bar-css" href="<?php echo includes_url('css/admin-bar.min.css'); ?>" media="all" />
    <link rel="stylesheet" id="wp-block-library-css" href="<?php echo includes_url('css/dist/block-library/style.min.css'); ?>" media="all" />

    <!-- プラグインCSS -->
    <link rel="stylesheet" id="mw-wp-form-css" href="<?php echo plugins_url('mw-wp-form/css/style.css'); ?>" media="all" />
    <link rel="stylesheet" id="sbi_styles-css" href="<?php echo plugins_url('instagram-feed/css/sbi-styles.min.css'); ?>" media="all" />
    <link rel="stylesheet" id="contact-form-7-css" href="<?php echo plugins_url('contact-form-7/includes/css/styles.css'); ?>" media="all" />
    <link rel="stylesheet" id="duplicate-post-css" href="<?php echo plugins_url('duplicate-post/css/duplicate-post.css'); ?>" media="all" />
    <link rel="stylesheet" id="yoast-seo-adminbar-css" href="<?php echo plugins_url('wordpress-seo/css/dist/adminbar-2560.css'); ?>" media="all" />

    <!-- テーマCSS -->
    <link rel="stylesheet" id="bootstrap-min-style-css" href="<?php echo get_template_directory_uri(); ?>/assets/public/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" id="slick-theme-style-css" href="<?php echo get_template_directory_uri(); ?>/assets/public/css/slick-theme.css" media="all" />
    <link rel="stylesheet" id="slick-style-css" href="<?php echo get_template_directory_uri(); ?>/assets/public/css/slick.css" media="all" />
    <link rel="stylesheet" id="app-style-css" href="<?php echo get_template_directory_uri(); ?>/assets/resources/scss/app.css" media="all" />
    <link rel="stylesheet" id="tmrkz-css" href="<?php echo get_template_directory_uri(); ?>/assets/public/css/tmrkz.css" media="all" />

    <!-- jQuery -->
    <script src="<?php echo includes_url('js/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo includes_url('js/jquery/jquery-migrate.min.js'); ?>"></script>

    <!-- Instagram Feed CSS修正 -->
    <style type="text/css">
        #sbi_mod_link,
        #sbi_mod_error {
            display: block !important;
            width: 100%;
            float: left;
            box-sizing: border-box;
        }
    </style>

    <?php wp_head(); ?>
</head>


<body class="wp-singular page-template-default page page-id-1517 page-parent logged-in admin-bar no-customize-support wp-theme-tamura-recruit">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GDWX6X6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div style="margin:auto;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/1.jpg" class="pc-only fv" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/2.jpg" class="pc-only" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/3.jpg" class="pc-only" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/4.jpg" class="pc-only" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/5.jpg" class="pc-only" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/6.jpg" class="pc-only" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/7.jpg" class="pc-only" style="" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/8.jpg" class="pc-only" style="" alt="">
        <!--  -->
        <div class="sp-only">
            <img class="fv2" src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/1_sp.jpg" style="" alt="">
            <a href="#form">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/contact-btn.png"
                    style="" alt="">
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/1-1_sp.jpg" style="" alt="">
             <div class="relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/2_sp.jpg" style="" alt="">
            <a href="#form" class="btn-fixed-sp" style="bottom: 1%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/contact-btn.png"
                    style="" alt="">
            </a>
    </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/3_sp.jpg" style="" alt="">
            <div class="relative">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/4_sp.jpg" style="" alt="">
            <a href="#form" class="btn-fixed-sp" style="bottom: 1%;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/contact-btn.png"
                    style="" alt="">
            </a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/5_sp.jpg" style="" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/6_sp.jpg" style="" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/7_sp.jpg" style="" alt="">
        </div>
    </div>
    <div class="sec_inner" id="form">
        <div class="entry_form mt_50">
            <h2 class="contact-title">エントリーはこちら</h2>
            <?php echo do_shortcode('[mwform_formkey key="4143"]'); ?>
        </div>
    </div>
    <div class="btn-fixed">
        <a class="cpc-fixed001" href="#form">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/public/img/lp2/contact-btn.png"
                style="" alt="">
        </a>
    </div>
    <style>
        
    .relative {
      position: relative;
    }

    .btn-fixed-sp {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: 80px;
      width: 90%;

    }

    .btn-fixed-pc {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: 80px;
      width: 45%;
      max-width: 600px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-fixed-pc:hover {
      transform: translateX(-50%) translateY(-8px);
      /* Y方向に上へ8px移動 */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      /* お好みで影も追加 */
    }

    .btn-fixed-sp-footer {
      position: fixed;
      left: 50%;
      transform: translateX(-50%);
      bottom: 10px;
      width: 95%;

    }
        .form_ttl {
            background-color: #c21408;
        }

        .form_ttl .must {
            color: #c21408;
            background: #fff;
            padding: 4px 6px;
            border-radius: 3px;
            font-weight: bold;
        }

        .contact-title {
            position: relative;
            text-align: center;
            font-size: clamp(1.3rem, 4vw, 2.3rem);
            font-weight: bold;
            position: relative;
            color: #333;
            margin-bottom: 1.5em;
            padding-bottom: .6em;

        }

        .contact-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #FF8A00;
            /* お好きな色に変更可能 */
            border-radius: 2px;
        }

        .btn-fixed {
            position: fixed;
            top: 30px;
            right: 30px;
            transform: unset;
            width: 100%;
            max-width: 350px;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .pc-only img {
            max-width: 1920px;
        }

        @media (min-width: 768px) and (max-width: 1699px) {
            .pc-only img {
                width: 100%;
            }
        }

        @media (max-width: 767px) {
            .btn-fixed {
                position: fixed;
                top: unset;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 767px;
            }
        }

        @media screen and (min-width: 1200px) {
            .sec_inner {
                max-width: 82%;
            }
        }

        .entry_form {
            margin-top: 100px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .form_footer {
            text-align: center;
        }

        .btn_submit {
            background: linear-gradient(135deg, #ff0000, #ffa838);
            color: #fff;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 1em 2.5em;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 138, 0, 0.3);
            display: inline-block;
            width: 100%;
        }

        .btn_submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 138, 0, 0.4);
            background: linear-gradient(135deg, #FF9900, #FFC266);
        }

        .btn_submit:active {
            transform: translateY(1px);
            box-shadow: 0 4px 10px rgba(255, 138, 0, 0.2);
        }

        .btn_submit_wrap {
            display: inline-block;
            position: relative;
            width: 100%;
            margin-bottom: 75px;
        }

        .btn_submit_wrap::after {
            content: "→";
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #fff;
            pointer-events: none;
        }

        .btn-fixed.is-hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        /* .form {
            max-width: 800px;
        } */

        .form_box input[type=text],
        .form_box textarea {
            padding: 16px 16px;
            font-size: 18px;
        }

        .form_ttl {
            padding: 15px;
        }
    </style>
</body>
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-logo">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_white.svg" alt="TAMURA BUILDS"> -->
            TAMURA BUILDS GROUP
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="/recruit/intern-lp2/">長期インターン</a></li>
                <li><a href="https://tamura-builds.co.jp/corporate/profile/" target="_blank">会社概要</a></li>
                <li><a href="#form">お問い合わせ</a></li>
            </ul>
        </div>
        <div class="footer-copy">
            <small>&copy; <?php echo date('Y'); ?> TAMURA BUILDS Inc. All Rights Reserved.</small>
        </div>
    </div>
    <style>
        .footer-logo {
            font-weight: bold;
            font-size: clamp(21px, 4vw, 32px);
            margin-bottom: 10px;
        }

        .site-footer {
            background: #111;
            color: #fff;
            padding: 60px 20px;
            font-family: 'Noto Sans JP', sans-serif;
        }

        .footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-logo img {
            max-width: 180px;
            margin-bottom: 30px;
        }

        .footer-nav ul {
            list-style: none;
            padding: 0;
            margin: 0 0 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .footer-nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            position: relative;
        }

        .footer-nav ul li a::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 1px;
            background: #fff;
            bottom: -4px;
            left: 0;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .footer-nav ul li a:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        .footer-copy small {
            font-size: 12px;
            color: #aaa;
        }
    </style>
</footer>

<script>
 document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#form");
    const fv = document.querySelector(".fv");
     const fv2 = document.querySelector(".fv2");
    const fixedBtn = document.querySelector(".btn-fixed");

    // 表示中の要素を記録するSet
    const visibleTargets = new Set();

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const target = entry.target;

                if (entry.isIntersecting) {
                    visibleTargets.add(target);
                } else {
                    visibleTargets.delete(target);
                }

                // form か fv のどちらかが表示されていれば非表示にする
                if (visibleTargets.size > 0) {
                    fixedBtn.classList.add("is-hidden");
                } else {
                    fixedBtn.classList.remove("is-hidden");
                }
            });
        },
        {
            root: null,
            threshold: 0,
        }
    );

    if (form) observer.observe(form);
    if (fv) observer.observe(fv);
    if (fv2) observer.observe(fv2);
});

</script>

</html>