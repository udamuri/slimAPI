<?php

namespace App\Models;

use App\Container;

class UserModel extends Container{
	
	public function getDetails(){
		$stmt = $this->container->db->prepare("select * from photos");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}



?>	