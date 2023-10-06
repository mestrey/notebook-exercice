<?php

$router->group(['prefix' => 'notebook'], function () use ($router) {
    $router->get('/', 'NotebookController@index');
    $router->post('/', 'NotebookController@store');
    $router->get('/{id}', 'NotebookController@show');
    $router->post('/{id}', 'NotebookController@edit');
    $router->delete('/{id}', 'NotebookController@destroy');
});
