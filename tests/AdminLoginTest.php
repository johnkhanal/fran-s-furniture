<?php 
	class AdminLoginTest extends \PHPUnit_Framework_TestCase{
		function testUsername(){
			$rowVal = [
				'username' => '',
				'password' => 'testing',
				'privilege' => 'super'
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
		function testPassword(){
			$rowVal = [
				'username' => 'name',
				'password' => '',
				'privilege' => 'super'
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
		function testType(){
			$rowVal = [
				'username' => 'tessts',
				'password' => 'testing',
				'privilege' => ''
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
		function testAll(){
			$rowVal = [
				'username' => 'tessts',
				'password' => 'testing',
				'privilege' => 'regular'
			];
			$isValid = testAdmin($rowVal);
			$this->assertTrue($isValid);
		}

		function testNone(){
			$rowVal = [
				'username' => '',
				'password' => '',
				'privilege' => ''
			];
			$isValid = testAdmin($rowVal);
			$this->assertFalse($isValid);
		}
	}
?>