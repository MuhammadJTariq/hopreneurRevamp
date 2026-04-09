<?php 

define('PUBLIC_PATH', __DIR__ . '/public');

function view($file) {
    require PUBLIC_PATH . '/' . $file . '.php';
}

$routes = ['/', '/contact', '/products', '/terms', '/projects', '/blog', '/blog-single'];

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $request = $_SERVER['REQUEST_URI'];
    if (str_ends_with($_SERVER['REQUEST_URI'], '.php')) {
    view('404');
    exit;
}

    if(in_array($request, $routes)){
        if($request === '/'){
            view('home');
            exit();
        }
        else {
            view($request);
            exit();
        }
    } else {
        view('404');
        exit();
    }
}

/*
function asset($path) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    return $protocol . $_SERVER['HTTP_HOST'] . '/' . ltrim($path, '/');
}
*/






?>