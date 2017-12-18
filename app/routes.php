<?php
/*
// need more details to enable Middleware
use \App\Middleware\JsonResponse;
$app->get('/details', '\App\Controllers\UserController:userInfo')
  ->add(new JsonResponse());
*/
  
$app->get('/', function ($request, $response, $args) {

    $response->write("Welcome to Slim!");
    $this->logger->addInfo("Something interesting happened");
    return $response;

})->add(new ExampleMiddleware());


 
$app->get('/test', '\App\Controllers\UserController:test');
$app->get('/details', '\App\Controllers\UserController:userInfo');

//post
$app->post('/photos/create', '\App\Controllers\UserController:createPhotos');

