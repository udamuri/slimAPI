<?php
namespace App\Core;

/**
* 
*/
class Formula 
{
	
	private $a;
	private $b;

	public function __construct($a = 0, $b = 0)
	{
		$this->a = $a;
		$this->b = $b;
	}

	public function sumbu() 
	{
		return  $this->a * $this->b;
	}

}