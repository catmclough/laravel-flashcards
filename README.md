Unfinished Flashcards!
===================
This is a simple, incomplete web app written in Laravel as a practice project for newcomers who'd like learn the framework.

The goal of the app is to allow users to view and create decks of flashcards to be studied in random order. Many important features are not yet implemented. Follow the instructions below to start improving upon this foundation!

----------
  - PHP 5.6 (Install via [Homebrew](https://ryanwinchester.ca/posts/install-php-5-6-in-osx-10-with-homebrew) or [Binary Package](https://jason.pureconcepts.net/2016/09/upgrade-php-mac-os-x/))
  - [Composer](https://getcomposer.org/download)
    - [Laravel](https://laravel.com/docs/5.3#installation)
    - Install with Composer:
      - `php composer.phar global require "laravel/installer"`

Project Setup
-------------
Normally, it's best to use a virtual box and [Laravel Homestead](https://laravel.com/docs/5.3/homestead) to ensure Laravel projects shared among developers are run with the proper environment setup. For the purposes of this workshop, we're going to install those dependencies manually, in order to avoid the time-consuming Homestead setup process. I do urge you to check out Homestead for future projects, as it makes working on shared projects much easier, with little to no time spent installing dependencies.


###Manual Installation Steps (Mac OSX)

Clone this repository

    git clone git@github.com:catmclough/laravel-flashcards.git

Navigate to the project's root directory and create a sqlite database file called `database.sqlite`

    touch database/database.sqlite

Check to make sure you have global access to the `composer` command:

- From the project root, type `composer` in the terminal. If you see a list of commands, move on to the next step. If you receive an error, try the following:
  1. Delete the composer folder

			rm /usr/local/bin/composer
2. Navigate to the location of the composer executable (composer.phar) you downloaded when installing composer, and move it onto your PATH:

		    mv composer.phar /usr/local/bin/composer


Now you can install the dependencies, run the table migrations, and seed your database

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
  - [PHPUnit 5.6](https://phpunit.de/getting-started.html)

Run all unit and feature tests

    phpunit

-----------
Serve website locally
-----------

    php artisan serve


-------
Challenge Order
-------
  1. Decks Index Page ('/decks')
    - `phpunit tests/features/ViewDecksIndexTest.php`
  2. Root Page
    - `phpunit tests/features/RootPageTest.php`
