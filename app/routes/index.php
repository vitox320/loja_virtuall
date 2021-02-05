<?php

use CoffeeCode\Router\Router;

require __DIR__."../../../vendor/autoload.php";

$router = new Router("localhost:8000");

$router->get("/", function(){
    return "Chora Viola";
});

