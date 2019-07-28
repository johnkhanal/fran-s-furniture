<?php

 	$furnitures=$tbl_furniture->find10(10);
 	$categories=$tbl_categories->findAll();

	$vars = [
		'furnitures'=>$furnitures, 
		'tbl_furniture'=>$tbl_furniture,
		'categories'=> $categories,
		'tbl_categories'=> $tbl_categories
	];
 $title = "All Furnitures";
 $content = loadTemplate("../template_views/user_area/furniture_temp.php", $vars);
?>


		