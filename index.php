<?php

session_start();
require_once './config/global.php';

$request = $_SERVER['REQUEST_URI'];
$request=parse_url($request, PHP_URL_PATH);
$segments= explode('/', trim ($request, '/'));
function home()
{
    http_response_code(404);
    require ROOT_DIR . '/view/home.php';
    exit; 
}
if ($segments[0] === 'clientes'){
    switch ($segments[1] ?? '') {
        default:
            home();
            break;
    }
} else{ }
