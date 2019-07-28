<?php 
	class CategoryAddTest extends \PHPUnit_Framework_TestCase
	{
		function testName(){
			$rowVal = [
				'name' => ''
			];
			$isValid = testCat($rowVal);
			$this->assertFalse($isValid);
		}
		function testRight(){
			$rowVal = [
				'name' => 'Beds'
			];
			$isValid = testCat($rowVal);
			$this->assertTrue($isValid);
		}
	}
?>