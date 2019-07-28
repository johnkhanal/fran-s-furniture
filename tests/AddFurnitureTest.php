<?php 
	//furniture form testing
	class AddFurnitureTest extends \PHPUnit_Framework_TestCase
	{
		function testName(){
			$rowVal = [
				'name' => '',
				'description' => 'abc',
				'price' => '12'
				
			];
			$isValid = testFurnitures($rowVal);
			$this->assertFalse($isValid);
		}
		function testDes(){
			$rowVal = [
				'name' => 'abced',
				'description' => '',
				'price' => '343'
			];
			$isValid = testFurnitures($rowVal);
			$this->assertFalse($isValid);
		}
		function testPrice(){
			$rowVal = [
				'name' => 'abced',
				'description' => 'test',
				'price' => ''
			];
			$isValid = testFurnitures($rowVal);
			$this->assertFalse($isValid);
		}
		
		function testAll(){
			$rowVal = [
				'name' => 'abced',
				'description' => 'test',
				'price' => '343'
			];
			$isValid = testFurnitures($rowVal);
			$this->assertTrue($isValid);
		}

		function testNone(){
			$rowVal = [
				'name' => '',
				'description' => '',
				'price' => ''
			];
			$isValid = testFurnitures($rowVal);
			$this->assertFalse($isValid);
		}
	}
?>