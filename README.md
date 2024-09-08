# xdebug-webgrind-sample

xdebugとwebgrindを使ってPHPのプロファイリングを行うサンプルリポジトリ

# サンプル環境の構築

`docker compose up -d` でコンテナを起動

# プロファイル用のテストコード実行
- `docker exec -it phpfpm bash` を実行し、php-fpmコンテナに入る
- コンテナ内で `php index.php` を実行し、プロファイル用のテストコードの実行
- xdebug-resultディレクトリにプロファイル結果が出力される

# プロファイル結果の確認
- http://localhost:8080 にアクセスし、webgrindを開く