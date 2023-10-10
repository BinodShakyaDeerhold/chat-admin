# ChatGpt Admin Portal

``` ini
# Change the data below as required in your .env file
# Note :Create database with name chatgpt
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=chatgpt
DB_USERNAME=root
DB_PASSWORD=
```
# Follow these steps
``` ini
$ php composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed --class=TestDataSeeder
$ php artisan passport:install
$ php artisan serve
