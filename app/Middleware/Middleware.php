<?php


namespace Web\App\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}
