<?php

$routes = require "routes.php";
function abort($code = 404) {
    http_response_code($code);

    require "views/$code.php";

    die();
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
