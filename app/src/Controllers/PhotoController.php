<?php


namespace App\Controllers;

use App\Container;
use App\Models\PhotoModel;

class PhotoController extends Container{
	
	
	public function view($request, $response, $args)
	{	
	
		// $photo = $this->container->db->table('photos')->get();
		// $result = json_decode($photo);
		$result = json_decode(PhotoModel::all());

	    return $this->json->render($response, $result);
	}

	public function create($request, $response, $args)
	{
		// $create = PhotoModel::create([ 
  //          'title' => 'udamuri@gmail.com',
  //          'image' => 'iamfuny',
  //          'slug' => 'iamfuny',
  //      ]);

		$create = new PhotoModel;
		$create->title = $create->generateRandomString(20);
		$create->image = $create->generateRandomString(15);
		$create->slug = $create->generateRandomString(18);
		$create->save();

		$result = json_decode($create);

		return $this->json->render($response, ['tes'=>1]);
	}


}