<?php

namespace Web\App\PHP\MVC\Core;

class BaseController
{

    // Base View
    public static function view(string $view, $data = [])
    {
        // extract($data);
        require __DIR__ . "/../Views/$view.php";
    }
}
