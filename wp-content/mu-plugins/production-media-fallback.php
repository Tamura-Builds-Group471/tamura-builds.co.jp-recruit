<?php
/**
 * Production Media Fallback
 * ローカルに存在しないメディアファイルを本番URLから読み込む
 */
add_filter('wp_get_attachment_url', function ($url) {
    $upload_dir = wp_upload_dir();
    $file_path  = str_replace($upload_dir['baseurl'], $upload_dir['basedir'], $url);

    if (!file_exists($file_path)) {
        $url = str_replace(home_url(), 'https://tamura-builds.co.jp/recruit', $url);
    }

    return $url;
});
