<?php

$path = '/index';
if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
}
require_once __DIR__ . '/../app/views' . $path . '.php';
// if (isset($_SERVER['PATH_INFO'])) {
//     echo $_SERVER['PATH_INFO'];
// } else {
//     echo "Tidak ada";
// }
