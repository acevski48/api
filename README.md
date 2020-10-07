# api

Clone the project from the GitHub repository by running the following command in the terminal

```
git clone https://github.com/acevski48/api.git
```

Enter the directory with

```
cd api
```

Install the Composer dependencies by running:

```
composer install
```

Rename the file .env.example to .env and use it as a starting point for your local development environment.

Run the following command to generate an application key:

```
php artisan key:generate
```

`OPTIONAL:` You could use Laravel Valet for MacOS.

`OPTIONAL:` You could also use the PHP built-in server which Laravel has a command by running:

```
php artisan serve --port=8080
```

Open the project in your browser by going to: 

```
http://localhost:8080/
```
