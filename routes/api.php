<?php
use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

Route::get('/',function(){
    return view('welcome');
});

$api->version('v1',function($api){

    $api->get('hello',function(){
        return "hello";
    });


});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
