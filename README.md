# todoapp

need to make the app look better and have good ui
for the commit

Laravel ToDo App

Project Description

This is a simple yet robust ToDo Application built using the Laravel framework. The application allows users to manage their daily tasks by creating, updating, deleting, and marking tasks as complete. It serves as a practical example of building a CRUD (Create, Read, Update, Delete) application with Laravel and demonstrates essential web development practices.

                Features

1. Task Management:
   1. Create new tasks with titles and descriptions.
   2. Edit existing tasks.
   3. Delete tasks.
2. Responsive Design: User-friendly interface optimized for desktop and mobile devices.
3. Database Integration: Persistent storage of tasks using MySQL.

Installation Instructions

Prerequisites

Ensure the following are installed on your system:

1. PHP 8.1 or newer
2. Composer
3. MySQL or an equivalent database
4. Node.js and npm (optional for frontend assets)

to check in terminal

node -v
composer -v
php -v

Steps

1.  Clone the Repository:

        git clone https://github.com/aaryanboy/todoapp.git
        cd todo-app

2.  Install Dependencies:
    composer install

3.  Set Up Environment Variables:
    Copy the .env.example file to .env:
    cp .env.example .env
    for this project i have setup .env as it is since there is no important keys and sensative passwords but please look at .env before saving to github

        note.. can skip the step 4 to7 and start development server immidiatly

4.  Update database credentials in the .env file:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

5.  Generate Application Key:
    php artisan key:generate

6.  Run Migrations:
    Create database tables:
    php artisan migrate

7.  Seed Database (Optional):
    Populate the database with sample data:
    php artisan db:seed
    Serve the Application:

8.  Start the development server:
    php artisan serve
    Open http://localhost:8000 in your browser.
