<?php

namespace App\Models;

use App\Container;

class UserModel extends Container{
	
	public function getDetails()
	{
		$stmt = $this->container->dbpdo->prepare("select * from photos LIMIT 50");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function getDetails2()
	{
		$sql = 'select * from photos LIMIT 50';
		$db = Capsule::connection( 'my_db' );
		$result = $db->select( $db->raw($sql) );

		$result = $this->container->db->
	}
}



?>	