Unfinished Flashcards!
===================
This is a simple, incomplete web app written in Laravel as a practice project for newcomers who'd like learn the framework.

The goal of the app is to allow users to view and create decks of flashcards to be studied in random order. Many important features are not yet implemented. Follow the instructions below to start improving upon this foundation!

----------
  - [Composer](https://getcomposer.org/download)
  - [Laravel](https://laravel.com/docs/5.3#installation)
    - With Composer:
      - `composer global require "laravel/installer"`
----------

Setup
-------------
Normally, it's best to use a virtual box and [Laravel Homestead](https://laravel.com/docs/5.3/homestead) to ensure Laravel projects shared among developers are run with the proper environment setup. For the purposes of this workshop, we're going to install those dependencies manually, in order to avoid the time-consuming Homestead setup process. I do urge you to check out Homestead for future projects, as it makes working on shared projects much easier, with little to no time spent installing dependencies.


###Manual Installation Steps
Create your sqlite database file called `database.sqlite` in the root of the `database` directory

    touch database/database.sqlite

Then install your packages, run the table migrations, and seed your database

    composer install
    php artisan migrate
    php artisan db:seed

> **Note:**

> - Running the migrate and seed commands may return the following prompt:

  	**************************************
  	*     Application In Production!     *
  	**************************************
  	 Do you really wish to run this command? (yes/no) [no]:

> - Just type 'yes' and hit Enter

You'll need to set an application key in a .env file. First, copy the example .env with this command:

    cp .env.example .env

Then set the application key

    php artisan key:generate

----------
Testing
-------------

- Dependencies
  - PHPUnit

Run all unit and feature tests

    phpunit
