Unfinished Flashcards!
===================
Hey there! This is a simple, incomplete web app written in Laravel as a practice project for newcomers who'd like learn the framework.

The goal of the app is to allow users to view and create decks of flashcards to be studied in random order. Many important features are not yet implemented. Follow the instructions below to start improving upon this foundation!

----------
Setup
-------------

Create your sqlite database file called `database.sqlite` in the root of the `database` directory

    touch database/database.sqlite

Then install your packages, run the table migrations, and seed your database

    composer install
    php artisan migrate
    php artisan db:seed

> **Note:**

> - Running the migrate command may return the following prompt:

  	**************************************
  	*     Application In Production!     *
  	**************************************
  	 Do you really wish to run this command? (yes/no) [no]:

> - Just type 'yes' and hit Enter
