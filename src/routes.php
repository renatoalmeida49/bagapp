<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@index');
$router->post('/login', 'LoginController@singIn');
$router->post('/login/singUp', 'LoginController@singUp');

$router->get('/search', 'SearchController@index');

$router->post('/insert', 'HandbagController@insertAction');
$router->get('/handbags/insert', 'HandbagController@insert');

$router->get('/logoff', 'LoginController@logout');