<?php


namespace App\Controllers;

use App\Container;
use App\Models\UserModel;

class UserController extends Container{
	
	public function test($request, $response, $args)
	{
		 $response->write("Welcome to Slim! hh");
		 $this->container->logger->addInfo("Something interesting happened");
		 return $response;
	}

	public function userInfo($request, $response, $args)
	{
		$model 		= new UserModel($this->container);
		$rsp 		= $model->getDetails();
		
		return $this->json->render($response,$rsp);
	}

	public function createPhotos($request, $response, $args)
	{	
		$contentType = $request->getHeader('Content-Type');
		$body = json_decode($request->getBody());

	    return $this->json->render($response, $body);
	}


}