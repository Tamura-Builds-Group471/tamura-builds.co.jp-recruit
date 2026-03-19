<?php
/**
 *functions and definitions
 *
 * @link
 *
 * @package WordPress
 * @since 1.0.0
 */

//以下で使用する関数はオーバーライド可能
if ( ! function_exists( 'setup' ) ) :
	function setup() {

		//feedlinkを削除
		remove_action('do_feed_rdf', 'do_feed_rdf');
		remove_action('do_feed_rss', 'do_feed_rss');
		remove_action('do_feed_rss2', 'do_feed_rss2');
		remove_action('do_feed_atom', 'do_feed_atom');
		// サイト全体の記事更新フィード、サイト全体のコメントフィードリンクの削除
		remove_action('wp_head', 'feed_links', 2);
		// 記事のコメント、記事アーカイブ、カテゴリなどのフィードリンクの削除
		remove_action('wp_head', 'feed_links_extra', 3);

		//emoji削除する
		function disable_emojis() {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		 //disable_emojis_tinymce関数が多分ないせいで、エラーがでるか、tiny_mce_pluginsフックがない
     //add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	 	}
	 	add_action( 'init', 'disable_emojis' );

		//thumbnail enable
		add_theme_support( 'post-thumbnails' );


		 // 出力されるHTMLタグをHTML５に変換する
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'setup' );

function twpp_setup_theme() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'twpp_setup_theme' );


/**
 * Enqueue scripts and styles.
 */
function looly_load_scripts() {

    // Bootstrapのスタイルシートのカスタムスタイル読み込み
    wp_enqueue_style( 'bootstrap-min-style', get_template_directory_uri() . '/assets/public/css/bootstrap.min.css' );
    wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/assets/public/css/slick-theme.css' );
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/public/css/slick.css' );
    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/assets/resources/scss/app.css' );
    wp_enqueue_style( 'tmrkz', get_template_directory_uri() . '/assets/public/css/tmrkz.css' );
    // 本テーマ用スクリプトの読み込み
    wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js','', '1.0.0', true );
    wp_enqueue_script( 'app-script', get_template_directory_uri() . '/assets/public/js/app.js', array('jquery-min'), '1.0.1', true );
    wp_enqueue_script( 'bootstrap-bundle-min', get_template_directory_uri() . '/assets/public/js/bootstrap.bundle.min.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'slick-min-script', get_template_directory_uri() . '/assets/public/js/slick.min.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'slide-script', get_template_directory_uri() . '/assets/public/js/slide.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'header-nav-script', get_template_directory_uri() . '/assets/public/js/header-nav.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'txt-animation-script', get_template_directory_uri() . '/assets/public/js/txt-animation.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'inview-script', get_template_directory_uri() . '/assets/public/js/jquery.inview.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'chart-script', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'animateNumber-script', get_template_directory_uri() . '/assets/public/js/jquery.animateNumber.js', array('jquery-min'), '1.0.0', true );
    wp_enqueue_script( 'number-animation-script', get_template_directory_uri() . '/assets/resources/js/number-animation.js', array('jquery-min'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'looly_load_scripts');


//worpressのバージョン情報を削除
remove_action( 'wp_head', 'wp_generator' );

//windows live writterから投稿ができる機能を削除
remove_action( 'wp_head', 'wlwmanifest_link' );

//外部ツールからの投稿ができる機能を削除
remove_action( 'wp_head', 'rsd_link' );

//投稿記事に出力される短縮URLを削除
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

//embedリンク削除
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
//httpレスポンス削除
remove_action('template_redirect', 'rest_output_link_header', 11 );

function my_registered_post_hierarchical( $post_type, $post_type_object ) {
  if ( $post_type == 'post' ) {
      $post_type_object->hierarchical = true;
      add_post_type_support( 'post', 'page-attributes' );
  }
}
add_action( 'registered_post_type', 'my_registered_post_hierarchical', 10, 2 );

//SVGファイルのアップロード
function add_file_types_to_uploads($file_types){

  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );

  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

//抜粋で取得する文字数制限
function twpp_change_excerpt_length( $length ) {
  return 50;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

//抜粋省略後の入力文字変更
function twpp_change_excerpt_more( $more ) {
  return '・・・';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

//固定ページに抜粋入力欄表示
add_post_type_support( 'page', 'excerpt' );

//アイキャッチ画像デフォルト設定
// function default_thumbnail( $post_id ) {
//   $post_thumbnail = get_post_meta( $post_id, $key = '_thumbnail_id', $single = true );
//   $default_thumbnail_id = '154'; //画像のポストIDを指定
//   if ( !wp_is_post_revision( $post_id ) ) {
//       if ( empty( $post_thumbnail ) ) {
//           update_post_meta( $post_id, $meta_key = '_thumbnail_id', $meta_value = $default_thumbnail_id );
//       }
//   }
// }
// add_action( 'save_post', 'default_thumbnail' );

/** エディターにスタイル適用 */
function my_editor_style() {
  add_theme_support( 'editor-styles' );
  add_editor_style( 'assets/public/main.css' );
}
add_action( 'after_setup_theme', 'my_editor_style', 0 );

/* ユーザ定義関数 */
function echo_srcset($name, $size='medium_large', $srcsize='medium_large', $id='', $lozad=true){

  $srcset      = "";
  $image_sizes = [
      'thumbnail'    => get_field($name, $id)['sizes']['thumbnail']    . ' 150w,',
      'medium'       => get_field($name, $id)['sizes']['medium']       . ' 300w,',
    'medium_large' => get_field($name, $id)['sizes']['medium_large'] . ' 768w,',
    'large'        => get_field($name, $id)['sizes']['large']        . ' 1240w,',
    '1536'         => get_field($name, $id)['sizes']['1536x1536']    . ' 1537w,',
  ];

  foreach($image_sizes as $key => $value){
      $srcset .= $value;

      if($key == $size) break;
  }

  if($lozad){
      echo 'data-src="' . get_field($name, $id)['sizes'][$srcsize] . '" data-srcset="' . $srcset .'"';
  }else{
      echo 'src="' . get_field($name, $id)['sizes'][$srcsize] . '" srcset="' . $srcset .'"';
  }
}

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
      $args['rewrite'] = true; // リライトを有効にする
      $args['has_archive'] = 'news'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function getSubArticles($query = []){
$the_query = new WP_Query($query);
$articles  = [];
while ($the_query->have_posts()) {
  $the_query->the_post();
  $articles[] = [
    'link'     => get_permalink(),
    'category' => !empty(customGetCategory()) ? customGetCategory()->name : null,
    'tags'     => customGetTags(),
    'date'     => get_the_date('Y.m.d'),
    'ttl'      => get_the_title(),
    'img'      => has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri()."/assets/public/img/no-image.png",
  ];
}
wp_reset_postdata();

return $articles;
}

function getMainArticles(){
$articles  = [];
while (have_posts()) {
  the_post();
  $articles[] = [
    'link'     => get_permalink(),
    'category' => !empty(customGetCategory()) ? customGetCategory()->name : "未分類",
    'tags'     => customGetTags(),
    'date'     => get_the_date('Y.m.d'),
    'ttl'      => get_the_title(),
    'img'      => has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri()."/assets/public/img/no-image.png",
  ];
}
return $articles;
}

function customGetCategory($id = null){
$category = null;
if (isTamuraMedia()) {
    if (is_null($id)) {
      $id        = get_the_ID();
    }
    $terms     = get_the_terms($id, 'media_cat');
    if ($terms !== false) {
      $category  = (object)[
        'name'        => $terms[0]->name,
        'link'        => get_term_link($terms[0]),
        'slug'        => $terms[0]->slug,
        'description' => $terms[0]->description,
      ];
    }
} else {
    $category = has_category() ? get_the_category()[0] : null;
}
return $category;
}

function customGetTags($id = null){
$tags = [];
if (isTamuraMedia()) {
    if (is_null($id)) {
      $id = get_the_ID();
    }
    $terms     = get_the_terms($id, 'media_tag');
    if ($terms !== false) {
      $tags      = array_column($terms, 'name');
    }
} else {
    $tags = get_the_tags() !== false ? get_the_tags() : [];
}
return $tags;
}

function getRelatedArticles($query = []){
// 表示中の記事は含めない
$query = array_merge($query, [
  'post__not_in' => [get_the_ID()],
]);

$category = customGetCategory();
if (isTamuraMedia()) {
    $query = array_merge($query, [
      'taxonomy' => 'media_cat',
      'term'     => $category->slug
    ]);
} else {
  $query = array_merge($query, [
    'category__in' => $category->id,
  ]);
}

return getSubArticles($query);
}

function getRelatedMoreLink(){
$link = '';
$category = customGetCategory();
if (isTamuraMedia()) {
  $link = get_term_link($category->slug, 'media_cat');
} else {
  $link = get_category_link($category->slug);
}

return $link;
}

function isTamuraMedia(){
return get_post_type(get_the_ID()) == 'tamura-media';
}

function my_custom_popular_posts($post_id) {
$count_key = 'cf_popular_posts';
$count = get_post_meta($post_id, $count_key, true);
if ($count == '') {
  $count = 0;
  delete_post_meta($post_id, $count_key);
  add_post_meta($post_id, $count_key, '0');
} else {
  $count++;
  update_post_meta($post_id, $count_key, $count);
}
}
function my_custom_track_posts($post_id) {
if (!is_single()) return;
if (empty($post_id)) {
  global $post;
  $post_id = $post->ID;
}
my_custom_popular_posts($post_id);
}
add_action('wp_head', 'my_custom_track_posts');

// ACF Options Page の機能有効化ならび管理画面のメニュー名などの変更
add_action('acf/init', function() {
  acf_add_options_page(array(
    'page_title' => '共通設定ページ', // ページタイトル
    'menu_title' => '共通設定', // メニュータイトル
    'menu_slug' => 'theme-general-settings', // メニュースラッグ
    'capability' => 'edit_posts',
    'redirect' => false
  ));
});

//ナビゲーションメニュー
function register_my_menus() { 
	register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
	//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
	  'header-nav' => 'ヘッターMenu',
	  'header-nav-sp' => '（SP）ヘッターMenu',
	  'footer-nav01'  => 'フッターMenu01',
    'footer-nav02'  => 'フッターMenu02',
    'footer-nav03'  => 'フッターMenu03',
    'footer-nav04'  => 'フッターMenu04',
    'footer-nav05'  => 'フッターMenu05',
    'footer-nav06'  => 'フッターMenu06',
	) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

//スラッグを id として出力
function my_body_id() {
  $post_obj =  $GLOBALS['wp_the_query']->get_queried_object();
  $slug = '';
  if(is_front_page()) {
    $slug = 'top';
    if(is_page() && get_post( get_the_ID() )->post_name) {
      $slug = $post_obj->post_name;
    }
  } elseif (is_category()) {
    $slug = $post_obj->category_nicename;
  }  elseif (is_tag()) {
    $slug = $post_obj->slug;
  } elseif ( is_singular() ) {
    $slug = $post_obj->post_name;
  } elseif (is_search()) {
    $slug  = $GLOBALS['wp_the_query']->posts ? 'search-results' : 'search-no-results';
  } elseif ( is_404() ) {
    $slug = 'error404';
  } 
  $body_id = esc_attr($slug);
  echo ( $body_id ) ? 'id="' . $body_id . '"' : '' ;
}

//「募集要項」カスタム投稿タイプ
add_action( 'init', 'create_post_type01' );
function create_post_type01() {
  register_post_type( 'application', //カスタム投稿名
    array(
      'labels' => array(
        'name' => __( '募集要項' ), //カスタム投稿のラベル
        'singular_name' => __( '募集要項' ),
        'add_new_item' => __('募集要項を追加'),
        'edit_item' => __('募集要項を編集'),
        'new_item' => __('募集要項を追加')
      ),
      'public' => true, //投稿の公開
      'supports' => array('title','editor','thumbnail'),  //タイトルと本文を有効化
      'menu_position' =>5,  //メニューの位置
      'show_ui' => true,  //カスタム投稿タイプを表示するかどうか
      'has_archive' => false,  //アーカイブの生成
      'hierarchical' => false,  //階層構造の有無
      'show_in_rest' => true,   //Gutenberg(ブロックエディタ)に対応
      'rewrite' => array('width_front' => false), //パーマリンクの設定
    )
  );
  //カスタムタクソノミー
  register_taxonomy(
    'application_cat',
    'application',
    array(
      'hierarchical' => true,  //階層構造の有無。falseでタグ形式
      'label' => 'カテゴリー',  //タクソノミーのラベル
      'singular_label' => 'カテゴリー', //タクソノミーのラベル
      'public' => true,  //検索可能にするかどうか　trueで可能
      'show_in_rest' => true,
      'show_ui' => true,  //タームを管理するためにデフォルトのUIを用意
      'rewrite' => 'application',
    )
  );
}

//「募集要項」管理画面にカテゴリを表示
function add_custom_column( $column ){
  global $post_type;
  if( $post_type === 'application' ){
      $column['application_cat'] = 'カテゴリー';
  }
  return $column;
}
add_filter( 'manage_posts_columns', 'add_custom_column' );

function add_custom_column_id( $column_name, $id ){
  if( $column_name === 'application_cat' ) {
      $terms = get_the_terms( get_the_ID(), 'application_cat' );
      foreach( $terms as $term ) :
        echo $term->name;
      endforeach; 
      // echo get_the_term_list( $id, 'application_cat', '', ', ' );
  }
}
add_action( 'manage_application_posts_custom_column', 'add_custom_column_id', 10, 2 );


/*  「募集要項」カスタム投稿_パーマリンクからタクソノミー名を削除
-----------------------------------------------------*/
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
  return str_replace('/'.$taxonomy.'/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);
 
//カスタム投稿タイプ名、タクソノミー名部分に該当するタイプ名・タクソノミー名を入力する
add_rewrite_rule('application/([^/]+)/?$', 'index.php?application_cat=$matches[1]', 'top');
add_rewrite_rule('application/([^/]+)/page/([0-9]+)/?$', 'index.php?application_cat=$matches[1]&paged=$matches[2]', 'top');

// 20250312
function allow_iframes($allowed_html) {
  $allowed_html['iframe'] = array(
      'src'             => true,
      'width'           => true,
      'height'          => true,
      'frameborder'     => true,
      'allow'           => true,
      'allowfullscreen' => true,
      'loading'         => true,
  );
  return $allowed_html;
}
add_filter('wp_kses_allowed_html', 'allow_iframes', 10, 2);

function enqueue_top_member_slider_assets() {
    if (is_front_page()) {
        wp_enqueue_style('swiper-top-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
        wp_enqueue_script('swiper-top-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
        wp_enqueue_script('swiper-top-init', get_template_directory_uri() . '/assets/public/js/swiper-top-init.js', ['swiper-top-js'], null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_top_member_slider_assets');
