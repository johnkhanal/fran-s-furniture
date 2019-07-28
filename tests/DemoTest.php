<?php
	require 'functions/testingFunctions.php';
	class DemoTest extends \PHPUnit_Framework_TestCase
	{
		function testInvalidUsername(){
			$rowValues = [
				'username' => '',
				'password' => 'testing'
			];
			$isValid = testLogin($rowValues);
			$this->assertFalse($isValid);
		}
		function testInvalidPassword(){
			$rowValues = [
				'username' => 'admin',
				'password' => ''
			];
			$isValid = testLogin($rowValues);
			$this->assertFalse($isValid);
		}
		function testValidAll(){
			$rowValues = [
				'username' => 'testing',
				'password' => 'testing'
			];
			$isValid = testLogin($rowValues);
			$this->assertTrue($isValid);
		}
		
	}
?>