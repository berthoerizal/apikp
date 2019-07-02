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
$router->get('/key', 'ExampleController@generateKey');
$router->post('/foo', 'ExampleController@fooExample');
$router->get('/user/{id}', 'ExampleController@getUser');
$router->get('post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');

// $router->get('/foo', function () {
//     return "Hello Get Method";
// });

// $router->post('/bar', function () {
//     return "Hello Post Method";
// });

// $router->get('/user/{id}', function ($id) {
//     return "User id = " . $id;
// });

// $router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
//     return "Post id = " . $postId . ", Comment id = " . $commentId;
// });

// $router->get('/profile', function () {
//     return redirect()->route('route.myprofile');
// });

// $router->get('/myprofile', ['as' => 'route.myprofile', function () {
//     return "Ini adalah profile ku";
// }]);

// $router->group(['prefix' => 'admin'], function () use ($router) {
//     $router->get('/home', function () {
//         return "ini adalah halaman admin/home";
//     });

//     $router->get('/berita', function () {
//         return "ini adalah halaman admin/berita";
//     });
// });

$router->get('/admin/home', ['middleware' => 'age', function () {
    return "Old Enough";
}]);

$router->get('/fail', function () {
    return "Not yet";
});
