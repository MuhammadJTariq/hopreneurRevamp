<?php 

// 1. Filesystem Paths (Internal use only)
define('PATH_ROOT', __DIR__);
define('PATH_TEMPLATES', PATH_ROOT . '/public/templates');

// 2. A more robust URL Helper
function home_url($path = '') {
    // Check for standard HTTPS or Forwarded HTTPS from proxies
    $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || 
                ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https';
    
    $protocol = $is_https ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    return rtrim($protocol . $host, '/') . '/' . ltrim($path, '/');
}

// 3. Web URIs (For use in HTML tags)
define('STYLES_URI', home_url('public/style'));
define('SCRIPTS_URI', home_url('public/scripts'));

// 4. Scoped Header Function
function get_header($vars = []){
    // Extract variables so they are accessible in the template
    extract($vars); 
    $template_path = PATH_TEMPLATES . '/header.php';
    
    if (file_exists($template_path)) {
        include($template_path);
    } else {
        trigger_error("Header template not found", E_USER_WARNING);
    }
}

function get_footer($vars = []){
    extract($vars);
    $template_path = PATH_TEMPLATES . '/footer.php'; 

    if (file_exists($template_path)) {
        include($template_path);
    
} else {
    trigger_error('Footer Template Not found', E_USER_WARNING);
}
}

?>