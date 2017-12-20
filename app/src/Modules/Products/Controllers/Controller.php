<?php
namespace App\Modules\Products\Controllers;

use App\Container;
use App\Modules\Products\Models\ProductsModel;

class Controller extends Container{
	
	
	public function getProduct($request, $response, $args)
	{
            //$result = json_decode(ProductsModel::all());
            $category = $args['id'];
            $products = $this->container->db->table('products')
                        ->leftjoin('category', 'category.id', '=', 'products.category');
            if(!is_null($category) && $category !== '' && is_numeric($category))
            {
                $products->where('category.id', '=', $category);
            }
            
            $products->select('products.name', 'products.price', 'products.discount', 'products.desc', 'products.status', 'category.name as c_name');
            $products->toSql();
            
            $result = $products->get()->toArray();


	    return $this->json->render($response, $result);
	}

	public function createProduct($request, $response, $args)
	{
            $contentType = $request->getHeader('Content-Type');
            $body = $request->getBody();
            $post = json_decode($body, true);
            $valid = 'gaada';
            if($contentType == 'application/json') {
                $valid = 'ada';
            }

            $create = new ProductsModel;
            $create->name = $post['name'];
            $create->category = $post['category'];
            $create->price = $post['price'];
            $create->discount = $post['discount'];
            $create->desc = $post['desc'];
            $create->create_at = strtotime(date("Y-m-d H:i:s"));
            $create->update_at = strtotime(date("Y-m-d H:i:s"));
            $create->status = 1;
            $create->save();

            return $this->json->render($response, ['tes'=>$post['name']]);
	}


}