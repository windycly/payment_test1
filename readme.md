## Environment needed

- PHP version between 5.5.9 - 7.1.*
- MySQL Server
- Redis Server

## Setup the project

1. Duplicate .env.example as new file named .env
2. Update .env file to reflect server settings

## Start the project

```shell
# php composer.phar install --dev

# php artisan migrate

# php artisan serve
```

Access http://localhost:8000/ to make payment

Access http://localhost:8000/check to check payment

## Documentation

Documentation for PHP can be found on the [PHP website](http://php.net/manual/en/install.php).

Documentation for MySQL can be found on the [MySQL website](https://dev.mysql.com/downloads/installer/).

Documentation for Laravel framework can be found on the [Laravel website](http://laravel.com/docs).
