# CRUDExercise

This is a simple library system which you can **browse**, **edit**, **add** and **delete**. 

## DEVELOPMENT
This project was developed using HTML, CSS, PHP (Laravel) and Bootstrap.


## FEATURES

* -ADD BOOKS
* -BROWSE BOOKS
* -BROWSE BORROWED BOOKS
* -DELETE BOOKS
* -EDIT BOOK DETAILS

Follow the following to locally setup the project.

1. Download the ZIP file of this project.
2. Extract in in a folder or in your desktop
3. You have to turn off your anti-virus or make an exception for the project.
4. Rename the file env.example to env (Other way to do this is to open the project in IDE then change the file name from there.)
5. Open the env file and change the following:
    DB_DATABASE=homestead to DB_DATABASE=rlms
    DB_USERNAME=homestead to DB_USERNAME=root
    DB_PASSWORD=secret to DB_PASSWORD=
6. Open XAMPP then start both Apache and MySQL.
7. Open Git Bash then change directory to the project.
8. Type _composer install_ then wait for it to finish.
9. After that, type _php artisan key:generate_.
10. Then type _php artisan serve_.
11. Open phpmyadmin in your browser then create a new database named **rlms**.
12. Import the sql file in the project folder named **rlms.sql** to the database.
13. Open 127.0.0.1:8000


