<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Code Project

I deliberately update .gitignore to remove .env and private key from gitignore for testing purpose;

Run the following command to test

1 clone the repository
2 composer update
3 php artisan migrate
4 php artisan db:seed
5 php artisan serve

Now, we can test backend api server with postman

api links

to login <a>http://localhost:8000/api/login</a> [email and password are required]

to register <a>http://localhost:8000/api/register</a> [name, email and password are required]

add Employee <a>http://localhost:8000/api/employee</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method POST

view Employee list <a>http://localhost:8000/api/employee</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method GET

view Employee detail <a>http://localhost:8000/api/employee/{id}</a> [Authorization headers with Bearer authorization token and Access header should be application/json] // Method GET

update Employee <a>http://localhost:8000/api/employee/{id}</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method PUT

delete Employee <a>http://localhost:8000/api/employee/{id}</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method DELETE

