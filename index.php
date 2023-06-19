<?php
require_once("Router.php");
define('__ROOT__', "D:\dev\laragon\www\scratch\PhpMVCSystem");


$router = new Router($_GET['url']); 
$router->get('/', "Home#index"); 
$router->get('/users', "User#showUsers" ); 
$router->get('/posts/:id', "User#showUsers" ); 
$router->run(); 