<?php 
// if(!defined abs path exit for each class)

define('PUBLIC_PATH', __DIR__ . '/public');

function view($file) {
    require PUBLIC_PATH . '/' . $file . '.php';
}

$routes = ['/', '/contact', '/products', '/terms', '/projects', '/blog'];

if($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] !== '/blog/'){
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


if($_SERVER['REQUEST_URI'] === "/blog/"){
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    $parts = explode('/', $uri);

    if ($parts[0] === 'blog' && isset($parts[1])) {
        $slug = $parts[1];
        view('blog-single');
    }
}


/*
function asset($path) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    return $protocol . $_SERVER['HTTP_HOST'] . '/' . ltrim($path, '/');
}
*/






?>