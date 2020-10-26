# Suraksha API


## Overview
The Suraksha API will connect the Sri Lanka Insurance Corporation’s (SLIC) system and Student Information System (SIS) of the Ministry of Education, Sri Lanka to make the claiming processes easier and accurate. The main Objective of the Suraksha API is to provide SLIC with necessary information from the SIS database and store the claim details in the SIS database.


### Setting-up the server
To run the server, first a setup is needed:

(1) Copy `.env.example` file and paste to the same root directory.

(2) Change the copied file to `.env`.

(3) Add the following lines at the end of the `.env` file.

```
L5_SWAGGER_GENERATE_ALWAYS=true
SWAGGER_VERSION=2.0

L5_SWAGGER_CONST_HOST=127.0.0.1:8000
```

(4) To install `Composer`, run:

```
composer install
```

(5) To generate the `APP_KEY`, run:

```
php artisan key:generate
```


### Running the server
To run the server, run:

```
php artisan serve
```


### To view the application:

```
open http://127.0.0.1:8000
```


### To view the Swagger UI interface:

```
open http://127.0.0.1:8000/api/documentation
```