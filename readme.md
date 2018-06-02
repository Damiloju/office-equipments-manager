# Office Equipment Manager (OMS)

Oms is a simple web application built under the laravel framework for store and managing office equipments 

## Requirements

PHP 5.2+ and Composer are required.

## Installation
After cloning the repository, Run:
* Composer update
* npm install
* Copy `.env.example` to a new file `.env`
* Edit database configuration in `.env`, change
    ```
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
    ```
* Run php artisan migrate

## Usage
Run `php artisan serve` to run on the default port 8000 or `php artisan serve --port=***` to run on your preferred port.

Next,you register a user 

After registration, login and Create Offices and Equipments

Your management Begins!

## Contributing
All contributions are welcomed and can be made in form of pull requests 

## Security Vulnerabilities

If you discover a security vulnerability within OMS, please send an e-mail to Yusuf Oluwadamiloju at yusufdamiloju@gmail.com.

## License

OMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
