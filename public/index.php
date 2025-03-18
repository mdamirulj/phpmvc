<?php
require_once '../config.php';
require_once '../app/Core/Router.php';

$router = new Router();
$router->get('/phpmvc/public/', 'HomeController@index');
$router->dispatch();
