<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use App\Core\Formula;

class MuriTest extends TestCase
{

	private $dummy = ['id'=>1,'name'=>'muri'];

	public function testMuri()
	{
		$expected = 130;
		$result = 130;

		$this->assertEquals($result, $expected);
	}

	public function testMuri2()
	{
		$expected = json_encode($this->dummy);
		$result = json_encode(['id'=>1,'name'=>'muri']);

		$this->assertJsonStringEqualsJsonString($result, $expected);
	}

	public function testFailure()
    {
    	$expected = ['bar' => 'baz'];
		$result = 'bar';
		
        $this->assertArrayHasKey($result, $expected);
    }

    public function testAssertTrue()
    {
        $this->assertTrue(true);
    }

    public function testSum()
    {
    	$a = 100;
    	$b = 5;

    	$model = new Formula($a, $b);
    	$result = $model->sumbu();

    	$this->assertEquals($result, 500);
    }

}