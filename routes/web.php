<?php

/* @var Router $router */

use Laravel\Lumen\Routing\Router;

$router->get('/', function () use ($router) {
    return "Lümen Framework";
});

// Endpoints

$router->get('/api/v1/product', 'ProductController@showAll');
$router->get('/api/v1/product/{id}', 'ProductController@show');
$router->post('/api/v1/product', 'ProductController@save');
$router->put('/api/v1/product/{id}', 'ProductController@update');
$router->delete('/api/v1/product/{id}', 'ProductController@delete');