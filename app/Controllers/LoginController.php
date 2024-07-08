<?php

namespace Web\App\PHP\MVC\Controllers;

use Web\App\PHP\MVC\Core\BaseController;

class LoginController extends BaseController
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        $this->view('login', $data);
    }
}
