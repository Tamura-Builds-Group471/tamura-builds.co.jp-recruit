# wp-tamura-builds-recruit

## サイト概要
- 本番URL: https://tamura-builds.co.jp/recruit
- ローカル: http://localhost:8092
- WordPress: 6.9.4
- PHP: 8.3.21
- テーマ: tamura-recruit（カスタムテーマ）

## 環境情報
- 本番: 本番サーバー
- ローカル: Docker
- DB: MariaDB 10.11（phpMyAdmin: http://localhost:8093）

## ローカル操作
- 起動: docker compose up -d
- 停止: docker compose down
- ログ: docker compose logs -f
- WP-CLI: docker compose exec wordpress wp --allow-root
- コンテナに入る: docker compose exec wordpress bash

## 開発ルール
- 変更はすべてローカルで先にテスト
- ブランチ名はLinear Issue IDを含める
- ACFフィールド変更時はJSON同期を忘れない

## Git管理対象
- wp-content/themes/tamura-recruit/ のみ
- プラグイン・公式テーマはGit管理外
