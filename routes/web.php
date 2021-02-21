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
use App\Http\Middleware\AppAuth;
use App\Http\Middleware\RendererAuthValidate;

$router->group(['middleware' => AppAuth::class], function()use ($router){

	$router->group(['prefix'=>'pengguna'], function()use ($router){
		$router->get('/','PenggunaController@index');
		$router->post('/create','PenggunaController@store');
	});

});
