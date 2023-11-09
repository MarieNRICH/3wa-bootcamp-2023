<?php

require './Controllers/HomeController.php';
require './Controllers/AboutController.php';
require './Controllers/ContactController.php';
require './Controllers/BlogController.php';

const AVAIABLE_ROUTES = [
    'accueil'=>'HomeController',
    'a-propos'=>'AboutController',
    'contact'=>'ContactController',
    'blog'=>'BlogController',
];


$page = 'home';
$controller;

if(isset($_GET['page']) && !empty($_GET['page'])){
    $page = $_GET['page'];
}

if(array_key_exists($page,AVAIABLE_ROUTES)){
    $controller = AVAIABLE_ROUTES[$page];
}else{
    $controller = 'ErrorController';
}

$controller();


?>
