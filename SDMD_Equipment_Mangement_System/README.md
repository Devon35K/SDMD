SDMD Equipment Management System – Laravel Project Setup Guide
To set up and run the SDMD Equipment Management System, follow the steps below:

First, ensure your system has the necessary prerequisites installed: PHP (version 8.1 or higher), Composer, MySQL or any supported database, and optionally Node.js & NPM if the project involves frontend asset compilation.

If Laravel is not installed globally, you can install it using Composer by running:
composer global require laravel/installer
Make sure the Composer global bin directory is in your system’s PATH. You can refer to the official Laravel Installer documentation at: https://laravel.com/docs/11.x/installation.

Next, open your terminal and navigate to the project directory:
cd SDMD_Equipment_Management_System

Once inside the folder, install all the necessary dependencies by running:
composer install

After the dependencies are installed, copy the example environment file to set up your environment:
cp .env.example .env

Then generate your application key with:
php artisan key:generate

Before proceeding, open the newly created .env file and configure the database and other required settings (such as DB name, username, and password). If your project includes a database schema, run the following command to apply the migrations:
php artisan migrate
Ensure your .env file is correctly configured with valid database credentials before running this step.

To serve the project locally, simply run:
php artisan serve

If you wish to make the project accessible to other devices on the same network (for example, for testing on mobile or other computers), you can run:
php artisan serve --host=0.0.0.0 --port=8000

Once the server is running, open your browser and visit http://127.0.0.1:8000 for local access or use your machine’s local IP (e.g., http://192.168.x.x:8000) for network access.

That's it! The SDMD Equipment Management System should now be up and running. You can update this guide to include any additional frontend or deployment steps specific to your team.
