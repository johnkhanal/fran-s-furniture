<?php 
	//admin login
	function testLogin($testValue){
		$isValid = true;
		if($testValue['username'] == ""){
			$isValid = false;
		}
		if($testValue['password'] == ""){
			$isValid = false;
		}
		return $isValid;
	}
	
	//enquiries
	function testEnquiries($eval){
		$isValid = true;
		if($eval['name'] == ""){
			$isValid = false;
		}
		if($eval['email'] == ""){
			$isValid = false;
		}
		if($eval['telephone'] == ""){
			$isValid = false;
		}
		if($eval['enquiry'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//add category
	function testCat($cat){
		$isValid = true;
		if($cat['name'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//add admin
	function testAdmin($admin){
		$isValid = true;
		if($admin['username'] == ""){
			$isValid = false;
		}
		if($admin['password'] == ""){
			$isValid = false;
		}
		if($admin['privilege'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//add specials
	function testSpecial($specialval){
		$isValid = true;
		if($specialval['name'] == ""){
			$isValid = false;
		}
		if($specialval['description'] == ""){
			$isValid = false;
		}
		if($specialval['post_date'] == ""){
			$isValid = false;
		}
		return $isValid;
	}

	//add furniture
	function testFurnitures($val){
		$isValid = true;
		if($val['name'] == ""){
			$isValid = false;
		}
		if($val['description'] == ""){
			$isValid = false;
		}
		if($val['price'] == ""){
			$isValid = false;
		}
		
		return $isValid;
	}
?>