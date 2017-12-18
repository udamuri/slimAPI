<?php

namespace App\Models;

use App\Container;

class UserModel extends Container{
	
	public function getDetails(){
		$stmt = $this->container->db->prepare("select * from photos LIMIT 50");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}



?>	