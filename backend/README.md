## Installation

Clone the repository

    git clone https://github.com/weblineindia/Laravel-REST-API-Product-CRUD.git

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Generate a new passport authentication secret key

    composer require laravel/passport

    php artisan migrate

    php artisan passport:install


**General command list**

    git clone https://github.com/weblineindia/Laravel-REST-API-Product-CRUD.git    
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    composer require laravel/passport
    php artisan migrate
    php artisan passport:install
    
- `php artisan down` -> This command will put the maintenance mode screen if any page is accessed but won't bypass any functionality.
- `php artisan up` -> This command will bring the website back online and functionality to access everything.

- Cache clear commands to use in root of the project if any changes done in routes folder files or clear cache for the project.


        php artisan cache:clear
        php artisan route:clear
        php artisan route:cache
        php artisan view:clear
        php artisan config:clear
        php artisan config:cache
## Database Set up

- Access the database using UI access or commandline and export it to some directory.
- Create new database on new database server.
- Update .env configuration file with database credentials.

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate

## Folders
### Laravel 
- `app` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all the controllers
- `app/Http/Middleware` - Contains the auth middleware
- `config` - Contains all the application configuration files
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes/api` - Contains all the api routes defined in api.php file
- `routes/web` - Contains all the web (frontend) routes defined in web.php file

### Execute Laravel Code
- Use below command
    
        php artisan serve
- Above command will start laravel project running
- Use the URL from the terminal and paste it in the web browser

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

## L5 Swagger - OpenApi or Swagger Specification for your Laravel project made easy.
==========

This package automatically generates Swagger documentation for your Laravel API based on your annotations.

## Here are the steps to integrate l5-swagger into your Laravel project:

## Install the package using Composer:

composer require darkaonline/l5-swagger
After the installation is complete, publish the configuration file:

php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
Open the generated configuration file located at config/l5-swagger.php and make sure the generate_always option is set to true:

- `'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', true),`
