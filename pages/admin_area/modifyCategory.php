<?php
if(isset($_GET['cat_id'])){
	$list_categories=$tbl_categories->find('id',$_GET['cat_id']);
	$cat_selected=$list_categories->fetch();
	$cri=[
		'cat_selected'=>$cat_selected
		];
}
else{
	$cri=[];
}

if(isset($_GET['dcat_id'])){
	if($tbl_categories->delete('id',$_GET['dcat_id']))
	
		header('Location:categories');

}
if(isset($_POST['savecat']))
{

	//checking data inserted or not
	if($_POST['name'] == "" ) echo "<h2>Category name cannot be empty.</h2>";
		
else{
		$entries=[
			'id'=>$_POST['id'],
			'name'=>$_POST['name']
		];
		$check = $tbl_categories->save($entries,'id');
		if($check == true){
			echo '
				<script>
				alert("Category Saved");
				document.location = "categories";
				</script>';
		}else{
			echo '
				<script>
				alert("Could not complete");
				</script>';
		}
	}
}



$title='Modify Category';
$content=loadTemplate("../../template_views/admin_area/modifyCategory_temp.php", $cri);
?>