# Suraksha Api


### Setup the server
To run the server, first a setup is needed:

(1) Copy `.env.example` file and paste to the same root directory.

(2) Change the copied file to `.env`.

(3) Add the following lines at the end of the .env file.

```
L5_SWAGGER_GENERATE_ALWAYS=true
SWAGGER_VERSION=2.0

L5_SWAGGER_CONST_HOST=127.0.0.1:8000
```

### Running the server
To run the server, run:

```
composer install
```

```
php artisan key:generate
```

```
php artisan serve
```

### To view the application:

```
open http://localhost:8080
```

### To view the Swagger UI interface:

```
open http://localhost:8080/api/documentation
```