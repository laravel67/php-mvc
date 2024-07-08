<?php

namespace Web\App\PHP\MVC\Middleware;


class AuthMiddleware implements Middleware
{
    function before(): void
    {
        session_start();
        if (!isset($_SESSION['auth'])) {
            header('Location: /login');
            exit();
        };
    }
}
