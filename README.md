# TODO App API

こちらはLaravelとSQLiteを用いて作ったシンプルなTodoアプリのAPIです。

## Requirements

- Docker-desktop
- Docker Compose
- Laravel

## Setup and Run
1 まずはこちらのプロジェクトをご自身のPCにgit cloneして取り込んでください。
2 その後にターミナルからこちらのプロジェクトまで移動し、docker-compose up -d --build　のコマンドでdockerコンテナを立ち上げて下さい。
3 コンテナが無事に立ち上がったら、docker-compose exec app bash　こちらのコマンドでコンテナ内にアクセスしましょう。
4 その後、composer install　のコマンドでLaravelプロジェクトに必要な依存関係をインストールします。
5 touch /var/www/database/database.sqlite　こちらのコマンドでSQLiteのデータベースファイルを作成します。
6 cp .env.example .env こちらのコマンドで.envファイルの雛形をコピーし、.envファイルを作成します。
7 .envファイル内のDB_DATABASEの値を/var/www/database/database.sqliteにしましょう。
8 php artisan key:generate こちらのコマンドでアプリケーションキーの作成をしましょう。
9 php artisan migrate:fresh　こちらのコマンドでマイグレーションを行いましょう。
10 上記まで終えるとアプリが起動しているはずです、http://localhost:8080にアクセスしましょう。












