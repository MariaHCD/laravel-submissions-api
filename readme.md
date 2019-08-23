# About
A simple API built using Laravel 5.8 to store and manage submissions received from a contact form. The main features of the API being to create, update, view, and (soft) delete submissions.

# Getting started

## Installation

Please check the [official Laravel Documentation](https://laravel.com/docs/5.8) for server requirements and installation.


Clone the repository

    git clone https://github.com/MariaHCD/laravel-submissions-api.git

Switch to the repo folder and install all the dependencies using composer

    cd laravel-submissions-api

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git https://github.com/MariaHCD/laravel-submissions-api.git
    cd laravel-submissions-api
    composer install
    cp .env.example .env
    
**Enusre that the correct database connection information have been set in .env before running the migrations**

    php artisan migrate
    php artisan serve

## Database seeding

**Populate the database with dummy data for questions and answers**

Run the database seeder:

    php artisan db:seed

***Note*** : To refresh all tables in the database and run the seeders:

    php artisan migrate:refresh --seed

----------

# Code overview

## Folders

- `app` - Contains all Eloquent models
- `app/Http/Controllers` - Contains all controllers
- `app/Http/Requests` - Contains all the form requests
- `database/factories` - Contains the factories for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeders
- `routes` - Contains all routes defined in the file web.php

## Environment variables

- `.env` - Environment variables can be set in this file. The minimum required environment variables are as follows:

```
    DB_CONNECTION = mysql
    DB_HOST = 127.0.0.1
    DB_PORT = 3306
    DB_DATABASE = database_name
    DB_USERNAME = database_username
    DB_PASSWORD = databaser_password
```
----------
