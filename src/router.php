<?php
$uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) :
        require $routes[$uri];
    else :
        abort();
    endif;
}

function abort($code=404)
{
    http_response_code($code);
    require "views/$code.php";
    die();
}

// require 'routes.php';
$routes = require('routes.php');

routeToController($uriPath, $routes);
