<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/faqs', 'FaqsController@index');
$router->get('/faqs/{id}', 'FaqsController@read');
$router->post('/faqs', 'FaqsController@store');
$router->put('/faqs/{id}/update', 'FaqsController@update');
$router->delete('/faqs/{id}/delete', 'FaqsController@delete');


