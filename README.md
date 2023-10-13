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
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed --class=TestDataSeeder
$ php artisan passport:install

> Personal access client created successfully.
> Client ID: 1
> Client secret: yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
> Password grant client created successfully.
> Client ID: 2
> Client secret: xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#  Copy client Id 2 for payload during login later 

$ php artisan serve
```

``` ini
Login api:
CURL:
curl --location --request POST 'http://127.0.0.1:8000/oauth/token' \
--header 'Content-Type: application/json' \
--data-raw '{
    "username": "superadmin@example.com",
    "password": "password",
    "provider": "users",
    "grant_type": "password",
    "client_id": 7,
    "client_secret": "Li67PupYbeoDMKGB0Gx5K1fDDE6cINc3896e3CmD"
}'
NOTE: client_secret is provided from client ID 2 while installing passport

Company details api:
CURL:
curl --location --request GET 'http://127.0.0.1:8000/api/company/detail' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI3IiwianRpIjoiNzMzYzY5ZWU3N2QwNDc3OTM1YjcxMGYxNjIwMDEyMjg2NmEwNDI5N2NmNzRiOTg4YmJlZGM0NGUxMWVkOTMzZmM1MTQ3MjFkODdhZjg4OGQiLCJpYXQiOjE2OTY5MzUwNjcuNDEwMzEsIm5iZiI6MTY5NjkzNTA2Ny40MTAzMTIsImV4cCI6MTcyODU1NzQ2Ny40MDMxODksInN1YiI6IjgiLCJzY29wZXMiOlsiKiJdfQ.R8t3EXUwMgcgBUW6se_sP5KnuqmA88mWYyojUxgL0tIWvjCbVynETEdp5THemZQeXdYhWBUPTGtlidGRLBgssVzt08nPHHg_DmRltwS6UsRKcsJn2sBEQgJ1I7ET6eDzB_oxOyIkhUxn7j36UfGOyJejQnB9THVpKP7cN7-sn3UFzKCHbmoUQQbJ6NZA7YFiapme5Wn8fdfUO7q6JFlf2tZo0ZoA43BTpCfYCl6xJJMcl73eVqMxK00ipyq8ddvSd4OjxWAHaZbGDcDWdOi1OptjCaWBMJ_pKYDEipuQ499WEJuJP0WqgV0fODW_8wEkfOKEJOUxUD7nj1TtoxVOw_ZryCSXn41xDHrHb5pg2bZ8AqSSBhaJkqe_3PjJhMp3_6Jwiho_KDbabOhKEjz5y2s6EvOmJE7RYVyajsqa4V6chQeEIrT6J0laPKUQa8Qt0FC7R6MGK7HWceOwDxP2ZspHA617rVD0IQBlCRiQd8IUOaZB2xcdOMtLQBfUHlgkRi4Kf0WKWjPfrMCEnVJCF4npXkM3KbO4IRv8C2oqylvoKsMh0s6_CnbWImIcSsarR3SFbED5rQOF0jJ_cdpZDX_dRG0i9EJALknhQcUg9amvXL0hFlG20DoUp0OFxh1a95i6d5UarPdA2IjZG2sNNNSj4mobgQdTeNu8wrdBkfE'


change temp