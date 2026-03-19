# tamura-builds.co.jp/recruit

田村ビルズグループ 採用サイトのWordPressリポジトリです。

## サイト概要

| 項目 | 内容 |
|------|------|
| 本番URL | https://tamura-builds.co.jp/recruit |
| WordPress | 6.9.4 |
| PHP | 8.3.21 |
| テーマ | tamura-recruit（カスタムテーマ） |
| テーマ作成者 | LOOLY |

## 技術スタック

- **CMS:** WordPress 6.9.4
- **PHP:** 8.3.21（Apache）
- **DB:** MariaDB 10.11
- **CSS:** Bootstrap + カスタムSCSS
- **JS:** jQuery, Slick Carousel, Swiper, Chart.js
- **カスタムフィールド:** Advanced Custom Fields（ACF）
- **ローカル環境:** Docker Compose

## ステージング環境

| 項目 | 内容 |
|------|------|
| URL | http://113.44.119.18:8092 |
| Basic認証 | コーポレートサイトと共通 |
| コンテナ名 | wp-tamura-builds-recruit-wordpress-1 |
| SSHアクセス | `ssh LOOLY-Staging` |
| デプロイ方法 | SSH経由で `docker cp` でコンテナ内にファイルを配置 |

## ローカル環境

### URL

| サービス | URL |
|----------|-----|
| WordPress | http://localhost:8092 |
| phpMyAdmin | http://localhost:8093 |

### コマンド

```bash
# 起動
docker compose up -d

# 停止
docker compose down

# ログ確認
docker compose logs -f

# WP-CLI
docker compose exec wordpress wp --allow-root

# コンテナに入る
docker compose exec wordpress bash
```

## Git管理対象

```
.gitignore
CLAUDE.md
README.md
Dockerfile
docker-compose.yml
docker-entrypoint.sh
wp-content/
  themes/tamura-recruit/     # カスタムテーマ（メイン管理対象）
  mu-plugins/
    production-media-fallback.php  # ローカルにないメディアを本番から取得
```

- `wp-content/uploads/` `wp-content/plugins/` 等はGit管理外
- ローカル環境ではmu-pluginにより、メディアファイルは本番URLからフォールバック取得

## テーマ構成

### カスタム投稿タイプ

| 投稿タイプ | ラベル | 用途 |
|------------|--------|------|
| `application` | 募集要項 | 求人情報の管理 |
| `tamura-media` | メディア | ニュース・お知らせ |

### カスタムタクソノミー

| タクソノミー | 対象投稿タイプ | 用途 |
|--------------|----------------|------|
| `application_cat` | application | 新卒（new-graduates）/ 中途（midway）のカテゴリ分け |
| `media_cat` | tamura-media | メディアカテゴリ |
| `media_tag` | tamura-media | メディアタグ |

### ページテンプレート一覧

| テンプレート | ページ内容 |
|-------------|-----------|
| `front-page.php` | トップページ |
| `page-concept-message.php` | コンセプトメッセージ |
| `page-reason.php` | 田村ビルズを選ぶ理由 |
| `page-business.php` | 事業紹介 |
| `page-job.php` | 職種紹介 |
| `page-career-plan.php` | キャリアプラン |
| `page-welfare.php` | 福利厚生 |
| `page-by-the-numbers.php` | 数字で見る田村ビルズ |
| `page-faq.php` | よくある質問 |
| `page-selection-flow.php` | 選考フロー |
| `page-new-graduates-entry.php` | 新卒エントリーフォーム |
| `page-new-graduates-confirm.php` | 新卒エントリー確認 |
| `page-midway-entry.php` | 中途エントリーフォーム |
| `page-midway-confirm.php` | 中途エントリー確認 |
| `page-career-change.php` | キャリアチェンジ採用 |
| `page-adult-internships.php` | 社会人インターンシップ |
| `page-intern-lp2.php` | インターンLP |
| `page-lp-cpc.php` | CPC広告用LP |
| `page-lp-organic.php` | オーガニック検索用LP |
| `page-web-marketing.php` | Webマーケティング |
| `page-privacy.php` | プライバシーポリシー |
| `template-flexible-contents.php` | フレキシブルコンテンツ |

### 投稿テンプレート

| テンプレート | 用途 |
|-------------|------|
| `single.php` | 通常の投稿詳細 |
| `single-application.php` | 募集要項詳細 |
| `single-recuit-lp.php` | 採用LP詳細 |
| `taxonomy-application_cat-new-graduates.php` | 新卒向け募集一覧 |
| `taxonomy-application_cat-midway.php` | 中途向け募集一覧 |

### ブロックコンポーネント（blocks/）

ACFフレキシブルコンテンツで使用する再利用可能なブロック群：

- レイアウト系：`bl_right_img_left_txt`, `bl_right_txt_left_img` 等
- 見出し系：`bl_heading_2_bk`, `bl_heading_2_en`, `bl_heading_3`
- UI系：`bl_btn`, `bl_btn_nav`, `bl_link_box_01`, `bl_faq`, `bl_flow`
- コンテンツ系：`bl_case_box`, `bl_welfare_box`, `bl_recruit_info_card`, `bl_people_detail`
- 一覧系：`bl_article_card_event`, `bl_article_list_line`
- ページネーション：`bl_pagenation_single`, `bl_pagenation_archive`

### セクションコンポーネント（sections/）

ページ共通で使用するセクション：

- `sec_page_title` - ページヘッダー（タイトル + 画像）
- `sec_breadcrumbs` - パンくずナビ
- `sec_cta` - CTA（お問い合わせ誘導）
- `sec_flexible_contents` - フレキシブルコンテンツ描画
- `sec_news_archive` - ニュース一覧
- `sec_job_archive` - 職種一覧
- `sec_business_archive` - 事業一覧

### ナビゲーションメニュー

| メニュー位置 | 用途 |
|-------------|------|
| `header-nav` | PCヘッダーメニュー |
| `header-nav-sp` | SPヘッダーメニュー |
| `footer-nav01` 〜 `footer-nav06` | フッターメニュー（6箇所） |

## 開発ルール

- 変更はすべてローカルで先にテスト
- ブランチ名はLinear Issue IDを含める
- ACFフィールド変更時はJSON同期を忘れない
