<?php

use Web\App\PHP\MVC\Core\Router;
use Web\App\PHP\MVC\Middleware\AuthMiddleware;
use Web\App\PHP\MVC\Controllers\HomeController;
use Web\App\PHP\MVC\Controllers\LoginController;
use Web\App\PHP\MVC\Controllers\ProductController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/word', HomeController::class, 'word');
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');


Router::add('GET', '/login', LoginController::class, 'login');


Router::run();
