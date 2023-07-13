<?php

use Core\Request;
use Core\Router;

/// khởi tạo đối tượng router
$router = new Router(new Request);

$router->get('/', 'Controllers\HomeController@index');

$router->get('/test', 'Controllers\HomeController@test');