<?php

global $debug;
$debug = __DIR__ . "/debug.log";
require_once __DIR__ . '/bootstrap.php';
/*
$values = [
    'Host' => $_SERVER['HTTP_HOST'],
    'IP' => $_SERVER['SERVER_ADDR'],
    'Request_uri' => $_SERVER['REQUEST_URI'],
    /*'REFERER' => $_SERVER['HTTP_REFERER'], */
   /* 'METHOD' => $_SERVER['REQUEST_METHOD'],
    'PATH' => parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
];
$log = '';
*/

foreach ($values as $key => $val) {
    $log .= $key . ': ' . $val . PHP_EOL;
}
file_put_contents($debug, $log . PHP_EOL,  FILE_APPEND | LOCK_EX);



?>