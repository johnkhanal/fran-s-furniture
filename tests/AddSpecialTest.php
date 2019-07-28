<?php 
	class AddSpecialTest extends \PHPUnit_Framework_TestCase
	{
		function testName(){
			$rowVal = [
				'name' => '',
				'description' => 'acer',
				'post_date' => '2018-2-12'
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
		function testDetail(){
			$rowVal = [
				'name' => 'testing',
				'description' => '',
				'post_date' => '2018-2-12'
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
		function testDate(){
			$rowVal = [
				'name' => 'testing',
				'description' => 'acer',
				'post_date' => ''
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
		function testAll(){
			$rowVal = [
				'name' => 'testing',
				'description' => 'acer',
				'post_date' => '2018-2-12'
			];
			$isValid = testSpecial($rowVal);
			$this->assertTrue($isValid);
		}

		function testNone(){
			$rowVal = [
				'name' => '',
				'description' => '',
				'post_date' => ''
			];
			$isValid = testSpecial($rowVal);
			$this->assertFalse($isValid);
		}
	}
?>