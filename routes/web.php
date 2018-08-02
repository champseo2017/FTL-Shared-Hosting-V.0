<?php
//route api
$api = app('Dingo\Api\Routing\Router');

$params = [
    'version' => 'v1',
    'domain'=>'localhost',
    'namespace' => 'App\Http\Controllers',
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'X-Requested-With'],
    'allowedMethods' => ['GET', 'POST', 'PUT',  'DELETE'],
    'exposedHeaders' => [],
    'maxAge' => 0,
];

$api->group($params,function($api){
    $api->get('api/data','TestController@index');
    // $api->get('users/{user_id}/roles/','IndexController@getUserRole');

});
Route::get('/', function () {
    return view('welcome');
});
