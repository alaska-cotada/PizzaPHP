<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


// GET route
$app->get(
    '/',
    function () {

        require_once("paginas/index.php");
    
    }

);

$app->get(
    '/criarPizza',
    function () {

        require_once("paginas/criarPizza.php");
    
    }

);

$app->get(
    '/menu_bebidas',
    function () {

        require_once("paginas/menu_bebidas.php");
    
    }

);

$app->get(
    '/menu_cervejas',
    function () {

        require_once("paginas/menu_cervejas.php");
    
    }

);
$app->get(
    '/menu_lanches',
    function () {

        require_once("paginas/menu_lanches.php");
    
    }

);

$app->get(
    '/menu_pizzas',
    function () {

        require_once("paginas/menu_pizzas.php");
    
    }

);

$app->get(
    '/menu_sorvetes',
    function () {

        require_once("paginas/menu_sorvetes.php");
    
    }

);

$app->get(
    '/menu_temperos',
    function () {

        require_once("paginas/menu_temperos.php");
    
    }

);

$app->get(
    '/pizzas',
    function () {

        require_once("paginas/pizzas.php");
    
    }

); 

$app->get(
    '/pdo',
    function () {

        require_once("paginas/pdo.php");
    
    }

);


$app->get(
    '/cad',
    function () {

        require_once("paginas/cad.php");
    
    }

);

$app->run();
