<?php
$listcat=$tbl_categories->findAll();
$categories=$listcat->fetchAll();
$tbl_furniture = new DatabaseTableQueries('furniture_table'); 
//the delete function
if(isset($_GET['df_id'])){
	if($tbl_furniture->delete('id',$_GET['df_id']))
	{
		echo '<script>
				alert("Furnitures Deleted");
				document.location = "furnitures";
				</script>';
	}
}	

//editing furnitures
if(isset($_GET['f_id'])){
	$listFurniture=$tbl_furniture->find('id',$_GET['f_id']);
	$furnitures=$listFurniture->fetch();
	
	$vars=[
		'furnitures'=>$furnitures,
		'categories'=>$categories
		];
}
else{
	$vars=['categories'=>$categories];
}


if(isset($_POST['saveFurniture']))
{
		if($_POST['name']== "" || $_POST['description']== "" ||$_POST['price']=="") echo "<script>alert('Incomplete Data')</script>";
		else
		{
			$criteria=[
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'price' => $_POST['price'],
				'furniture_condition' => $_POST['furniture_condition'],
				'visible' => $_POST['visible'],
				'category_id'=>$_POST['category_id']
			];

			$check = $tbl_furniture->insert($criteria);

			
		if ($_FILES['img']['error'] == 0) {
			$fileName =$tbl_furniture->lastId(). '.jpg';
			move_uploaded_file($_FILES['img']['tmp_name'], '../../images/furniture/' . $fileName);
		}
			if($check == true){
				echo '
					<script>
					alert("Furnitures Saved");
					document.location = "furnitures";
					</script>';
			}else{
				echo '
					<script>
					alert("Furnitures Not Saved");
					</script>';
			}
	}
}




$title='Modify Furniture';
$content=loadTemplate("../../template_views/admin_area/modifyFurniture_temp.php", $vars);
?>