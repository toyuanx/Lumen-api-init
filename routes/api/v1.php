<?php

/**
 * api路由
 * 
 * 作者：yuanx(564498011@qq.com)
 */
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
	$api->get('test', function() {
		return 'hello lumen!';
	});
	$api->post('login', ['uses' => 'AuthController@postLogin']);
});

