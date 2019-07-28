 <?php


  $furniture=$tbl_furniture->find('category_id',$_GET['cat_id']);
 	$categories=$tbl_categories->findAll();
 	  $category_name=$tbl_categories->find('id',$_GET['cat_id']);
 	  $category_name=$category_name->fetch();

	$vars = [
		'furniture'=>$furniture, 
		'tbl_categories'=> $tbl_categories,
		'categories'=> $categories,
		'category_name'=>$category_name
	];
 $title = "All Furnitures";
 $content = loadTemplate("../template_views/user_area/category_temp.php", $vars);
?>

		