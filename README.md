<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Rework Laravel Exercise

A short exercise building a Laravel app which contains a Product and Category model with a many-to-many relationship. 

## 1. Task Requirements: 

* Product model and associated database table with:
    * Required fields:
        * Name
        * Price
        * Quantity
    * Non-required field:
        * Short description

* Category model and associated database table with:
    * Required fields:
        * Name
* The product and categories table should have a many-to-many relationship with any product assignable to many categories, and any category assignable to any product.
* A basic form to add a product and assign one or many categories.

## 2. Getting Started
### Dependencies
To use this app you will require the following dependencies:

    - PHP version ~7.4, 
    - MySQL version 5.6 + 
    - Composer version 1+

## 3. Install and Setup

1. Clone this repo: `git clone git@github.com:henryppercy/rework-laravel-task.git`.
2. Navigate into the newly created repo: `cd rework-laravel-task`.
3. Navigate to `/database/docs/rework-laravel-database.sql`. Run these queries in your MySql gui or terminal to recreate the database for this project.  
4. From the root of the project run: `composer install`.
5. To run the application locally run: `php artisan serve`.
6. The project can then be accessed at port `8000/products` or whichever is specified in the terminal.

## 4. Next Steps

If this was my main project, I would work on:

* A more scalable architecture, with forms being generated from controllers rather than withinn one blade template.
* Making the frontend more responsive and accessible. 
* Building enough routes for this to be a full CRUD application. 
* Moving the project to PHP 8.2 and Laravel 9.
