<?php

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

//generate application key
$router->get('/key', function () {
    return str_random(32);
});

$router->get('/foo', function () {
    return "Hello Get Method";
});

$router->post('/bar', function () {
    return "Hello Post Method";
});

$router->get('/user/{id}', function ($id) {
    return "User id = " . $id;
});

$router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return "Post id = " . $postId . ", Comment id = " . $commentId;
});

$router->get('/profile', function () {
    return redirect()->route('/myprofile');
});

$router->get('/myprofile', function () {
    return "Nama : Bertho";
});
