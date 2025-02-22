アプリケーション名
お問い合わせフォーム


環境構築
git clone git@github.com:mona12298/exam-contact-form.git
cd exam-contact-form
docker-compose build
docker-compose up -d
docker-compose exec php bash
composer install
.env.exampleファイルから.envを作成し、環境変数を変更
php artisan key:generate
php artisan migrate
php artisan db:seed


使用技術
言語: php 7.4.9
フレームワーク: Laravel 8.83.8
データベース: MySQL 8.0.26 
Docker: Docker, docker-compose


ER図
< - - - 作成したER図の画像 - - - >

URL
開発環境：http://localhost/
phpMyAdmin：http://localhost:8080/
