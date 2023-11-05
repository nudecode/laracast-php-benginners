<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/books' => 'controllers/books.php',
    '/authors' => 'controllers/authors.php',
    '/404' => 'controllers/404.php'
];


routeToControllers($uri, $routes);