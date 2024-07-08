<?php

namespace Web\App\PHP\MVC\Controllers;

use Web\App\PHP\MVC\Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Belajar php mvc",
            'body' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio nisi veritatis quis labore neque aperiam sapiente assumenda quae obcaecati nobis harum, exercitationem temporibus praesentium blanditiis molestias dignissimos placeat eum nostrum!"
        ];
        $this->view('Home/index', $data);
    }


    public function hello()
    {
        echo "Hello Controller method hello";
    }

    public function word()
    {
        echo "Word Controller method word";
    }
}
