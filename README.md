## 環境構築手順
1. composer create-project --prefer-dist laravel/laravel ./
2. docker compose fileと.envファイルをディレクトリ直下に配置
3. docker compose up -dで起動
4. localhost8080番ポートで起動確認
5. docker exec -it php_contact_task-laravel.test-1 sh でlaravelコンテナに入る
6. npm run buildでtailwind適用するようにする
7. php artisan migrateでmigrationを通しテーブルの作成(都道府県テーブルはSQLをテーブルプラスに直接記述して追加しているので別途必要)
8. php artisan make:model Prefecturesで都道府県のモデル作成

## tailwind導入参考記事
[tailwind参考記事](https://tech-blog.rakus.co.jp/entry/20230427/frontend)
1. docker exec -it php_contact_task-laravel.test-1 sh でlaravelコンテナに入る
2. npm install -D tailwindcss postcss autoprefixer tailwindに必要なパッケージのインストール
3. npx tailwindcss init -p でtailwindの設定ファイルの作成

## ログの出力
- docker logs -f php_contact_task-laravel.test-1

## laravelコンテナに入る
- docker exec -it php_contact_task-laravel.test-1 sh

## ディレクトリ構成
- app/Http/Controllerがリクエストやレスポンスを返す繋ぎ目として機能する
- app/Modelsがインフラ層的な立ち位置になる
- publicディレクトリが画像やcssの管理している
- resources/viewsディレクトリがMVCのVに当たるフロント部分
- routesディレクトリ以下はルーティングのディレクトリでapi.phpはAPI作成する時はここに記述し、基本的にはweb.phpにルーティング記述していく。

php artisan make:model testでmodelのファイルの雛形作ってくれる