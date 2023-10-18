<?php
// $uriPath = parse_url($_SERVER['REQUEST_URI'])['path'];
$uriPath = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$routes = match($uriPath) {
    '/' => 'controllers/index.php',
    'articles' => 'controllers/articles.php',
    'contact' => 'controllers/contact.php',
    default => 'views/404.php'
};

require($routes);