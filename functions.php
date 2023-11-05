<?php 

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function routeToControllers($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort($code);
    }
}

function  abort($code = 404) {
    http_response_code($code);
    require "./controllers/{$code}.php";
}