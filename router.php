<?php 

define('PUBLIC_PATH', __DIR__ . '/public');

function view($file) {
    require PUBLIC_PATH . '/' . $file;
}

function asset($path) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    return $protocol . $_SERVER['HTTP_HOST'] . '/' . ltrim($path, '/');
}

$routes = [
    "/" => "home.php",
    "/products" => "products.php",
    "/projects" => "projects.php",
    "/contact" => "contact.php",
    "/terms" => "terms.php",
    
];

$request_uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') ?: '/';

$file = $routes[$request_uri] ?? "404.php";

$path = PUBLIC_PATH . '/' . $file;

if (file_exists($path)) {
    require $path;
} else {
    require PUBLIC_PATH . "/404.php";
}



?>