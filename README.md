<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Code Project

I deliberately update .gitignore to remove .env and private key from gitignore for testing purpose;

Run the following command to test

<ol>
<li> clone the repository</li>
<li> composer update </li>
<li> php artisan migrate </li>
<li> php artisan db:seed </li>
<li> php artisan serve </li>
</ol>

Now, we can test backend api server with postman

<h2>Api links </h2>

<b>to login</b> <a>http://localhost:8000/api/login</a> [email and password are required]

<b>to register</b> <a>http://localhost:8000/api/register</a> [name, email and password are required]

<b>add Employee</b> <a>http://localhost:8000/api/employee</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method POST

<b>view Employee list</b> <a>http://localhost:8000/api/employee</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method GET

<b>view Employee detail </b> <a>http://localhost:8000/api/employee/{id}</a> [Authorization headers with Bearer authorization token and Access header should be application/json] // Method GET

<b>update Employee </b> <a>http://localhost:8000/api/employee/{id}</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method PUT

<b>delete Employee </b> <a>http://localhost:8000/api/employee/{id}</a> [Authorization headers with Bearer authorization token and Access header should be application/json] //Method DELETE
