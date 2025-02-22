<h2>アプリケーション名</h2>
<p>お問い合わせフォーム</p>


<h2>環境構築</h2>
<p>git clone git@github.com:mona12298/exam-contact-form.git</p>
<p>cd exam-contact-form</p>
<p>docker-compose build</p>
<p>docker-compose up -d</p>
<p>docker-compose exec php bash</p>
<p>composer install</p>
<p>.env.exampleファイルから.envを作成し、環境変数を変更
php artisan key:generate</p>
<p>php artisan migrate</p>
<p>php artisan db:seed</p>

<h2>使用技術</h2>
<p>言語: php 7.4.9</p>
<p>フレームワーク: Laravel 8.83.8</p>
<p>データベース: MySQL 8.0.26 </p>
<p>Docker: Docker, docker-compose</p>

<h2>ER図</h2>



< - - - 作成したER図の画像 - - - >

<h2>URL</h2>
<p>開発環境：http://localhost/</p>
<p>phpMyAdmin：http://localhost:8080/</p>
