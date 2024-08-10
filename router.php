<?php


// Create Router instance
$router = new \Bramus\Router\Router();

$router->get('/', function() { 
    echo json_encode([
        "message"=>"method get"
    ]);
 });

$router->post('/', function() { 
    $data = json_decode(file_get_contents('php://input'),true);
    echo json_encode([
        "method"=>"post",
        "data" => $data
    ]);
 });

$router->put('/', function() { 
    $data = json_decode(file_get_contents('php://input'),true);
    echo json_encode([
        "method"=>"put",
        "data" => $data
    ]);
 });

$router->delete('/', function() { 
    $data = json_decode(file_get_contents('php://input'),true);
    echo json_encode([
        "method"=>"delete",
        "data" => $data
    ]);
 });

$router->options('/', function() { 
    $data = json_decode(file_get_contents('php://input'),true);
    echo json_encode([
        "method"=>"options",
        "data" => $data
    ]);
 });

$router->patch('/', function() { 
    $data = json_decode(file_get_contents('php://input'),true);
    echo json_encode([
        "method"=>"patch",
        "data" => $data
    ]);
 });

// Run it!
$router->run();