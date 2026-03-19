<?php
/**
 * Production Media Fallback
 * ローカルに存在しないメディアファイルを本番URLから読み込む
 */

define('PRODUCTION_URL', 'https://tamura-builds.co.jp/recruit');

// src属性のフォールバック
add_filter('wp_get_attachment_url', function ($url) {
    $upload_dir = wp_upload_dir();
    $file_path  = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $url);

    if (!file_exists($file_path)) {
        $url = str_replace(home_url(), PRODUCTION_URL, $url);
    }

    return $url;
});

// srcset属性のフォールバック
add_filter('wp_calculate_image_srcset', function ($sources) {
    $upload_dir = wp_upload_dir();

    foreach ($sources as &$source) {
        $file_path = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $source['url']);

        if (!file_exists($file_path)) {
            $source['url'] = str_replace(home_url(), PRODUCTION_URL, $source['url']);
        }
    }

    return $sources;
});
