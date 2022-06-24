# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Instalation 


## Step 1

clone repositary to your local system .


## Step 2

Create database use db.sql which is on root directory


## Step 3

Change .env file db conection seting

## Step 4

Open terminal move to folder then 
run this command php -S localhost:8000 -t public 

## Step 5 

Get Request http://localhost:9000/api/v1/customers?page=1
http://localhost:9000/api/v1/customer/2

Post Request http://localhost:9000/api/v1/customer
Body->row->json {"email":"test6763@gmail.com","first_name":"asxsa sdcdcd adcwe","user_image_path":"7676767676"}

Put Request http://localhost:9000/api/v1/customer/111054667
Body->row->json  {"email":"test6763@hgchg.com","first_name":"asxsa sdcdcd adcwe","user_image_path":"7676767676"}

DELETE Request http://localhost:9000/api/v1/customer/1

Get Request http://localhost:9000/api/v1/chat/5b727130d6db9d1be8003693/5ab6507221232f2374000aa0/hi/1


For rauting see routes/web.php


