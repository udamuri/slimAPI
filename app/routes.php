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

//product
$app->get('/products/view', '\App\Modules\Products\Controllers\Controller:getProduct');
$app->get('/products/view/{id}', '\App\Modules\Products\Controllers\Controller:getProduct');
$app->post('/products/create', '\App\Modules\Products\Controllers\Controller:createProduct');

//photos
$app->post('/photos/create', '\App\Controllers\UserController:createPhotos');
$app->post('/muri/create', '\App\Controllers\PhotoController:create');
$app->get('/muri/view', '\App\Controllers\PhotoController:view');

