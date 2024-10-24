## Introduction

This POS (Point of Sale) system is built on the Laravel framework, which allows users to manage sales, customers, and products in a retail setting. The API enables developers to integrate the POS system with their applications, allowing them to perform CRUD operations on the system's resources.

## Running on local 
- root folder 
    - npm install
    - composer install
    - php artisan migrate
    - npm run dev

## Docker env
    docker-compose up --build


## Endpoints

The API has the following endpoints:

1. `/api/login`
   This endpoint is used to authenticate the user. It expects a POST request with the user's email and password. If the credentials are valid, the API will return a token that the user can use to access other endpoints. The token is valid for 24 hours.
2. `/api/logout`
   This endpoint is used to logout the user. It expects a POST request with the user's token. If the token is valid, the API will log the user out and invalidate the token.

3. `/api/customers`
   This endpoint is used to manage customers. It supports CRUD operations for creating, reading, updating, and deleting customers. It expects a token in the request header for authentication.

4. `/api/products`
   This endpoint is used to manage products. It supports CRUD operations for creating, reading, updating, and deleting products. It expects a token in the request header for authentication.

5. `/api/sales`
   This endpoint is used to manage sales. It supports CRUD operations for creating, reading, updating, and deleting sales. It expects a token in the request header for authentication.

6. `/api/users`
   This endpoint is used to manage users. It supports CRUD operations for creating, reading, updating, and deleting users. It expects a token in the request header for authentication.

## Authentication

The API uses token-based authentication, which means that users need to provide a token in the request header to access the endpoints that require authentication. The token is obtained by sending a POST request to the /api/login endpoint with the user's email and password. The token is valid for 24 hours, after which the user needs to log in again to obtain a new token.

## Errors

The API returns error responses with an appropriate HTTP status code and a JSON response body that provides additional information about the error. The following are the possible error responses:

1. `400 Bad Request`: This error occurs when the request is invalid, such as missing a required parameter.

2. `401 Unauthorized`: This error occurs when the user is not authenticated or the token is invalid.

3. `403 Forbidden`: This error occurs when the user is authenticated but does not have the required permissions to perform the requested operation.

4. `404 Not Found`: This error occurs when the requested resource does not exist.

5. `422 Unprocessable Entity`: This error occurs when the request is valid but the server cannot process it, such as when a validation rule fails.

## Conclusion

This POS API provides developers with the ability to integrate their applications with a retail Point of Sale system. With endpoints for managing customers, products, sales, and users, the API offers developers the flexibility to build a custom solution that meets their specific needs. The API uses token-based authentication to secure access to the endpoints that require authentication and returns error responses with appropriate HTTP status codes and error messages.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
