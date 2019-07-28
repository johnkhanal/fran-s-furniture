<?php 
	class EnquiryFormTest extends \PHPUnit_Framework_TestCase
	{
		function testName(){
			$rowValues = [
				'name' => '',
				'email' => 'sue@gmail.com',
				'telephone' => '12345678',
				'enquiry' => 'test',
			];
			$isValid = testEnquiries($rowValues);
			$this->assertFalse($isValid);
		}
		function testEmail(){
			$rowValues = [
				'name' => 'testing',
				'email' => '',
				'telephone' => '12345678',
				'enquiry' => 'test',
			];
			$isValid = testEnquiries($rowValues);
			$this->assertFalse($isValid);
		}
		function testContact(){
			$rowValues = [
				'name' => 'testing',
				'email' => 'sue@gmail.com',
				'telephone' => '',
				'enquiry' => 'test',
			];
			$isValid = testEnquiries($rowValues);
			$this->assertFalse($isValid);
		}
		function testEnquiry(){
			$rowValues = [
				'name' => 'text',
				'email' => 'sue@gmail.com',
				'telephone' => '12345678',
				'enquiry' => '',
			];
			$isValid = testEnquiries($rowValues);
			$this->assertFalse($isValid);
		}
		function testAll(){
			$rowValues = [
				'name' => 'text',
				'email' => 'sue@gmail.com',
				'telephone' => '12345678',
				'enquiry' => 'enquiress',
			];
			$isValid = testEnquiries($rowValues);
			$this->assertTrue($isValid);
		}

		function testNone(){
			$rowValues = [
				'name' => '',
				'email' => '',
				'telephone' => '',
				'enquiry' => '',
			];
			$isValid = testEnquiries($rowValues);
			$this->assertFalse($isValid);
		}
	}
?>