<?php 
if(isset($_GET['esid'])){
	$find_special=$tbl_specials->find('id',$_GET['esid']);
	$spec=$find_special->fetch();
	$vars=[
		'spec'=>$spec
		];
}
else{
	$vars=[];
}

if (isset($_POST['saveOffer'])) {
		
		if($_POST['name'] == "" || $_POST['description'] == "") echo "<script>alert('Incomplete form!!!!')</script>";

		else{
			$values = [
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'post_date' => $_POST['post_date'],
				'end_date'=> $_POST['end_date']
			];

			$check = $tbl_specials->save($values, 'id');

			if ($_FILES['special_image']['error'] == 0) {
			$fileName =$tbl_specials->lastId().'.jpg';
			move_uploaded_file($_FILES['special_image']['tmp_name'], '../../images/Specialoffer/' . $fileName);
				}
			if($check == true){
				echo '<script>
					 alert("Spcials Saved!");
					 document.location="specials";
					 </script>';
			}else{
				echo '<script>
					 alert("!!!!!!!!!Could not save Spcials!!!!!!!!!!!!");
					 </script>';
			}
		}
}

//deleting special offers
if (isset($_GET['desid'])) {
	if($tbl_specials->delete('id',$_GET['desid']))
	{
		echo '<script>
				document.location = "specials";
				</script>';
	}
}
$title='Modify Specials';

$content=loadTemplate("../../template_views/admin_area/modifySpecial_temp.php",$vars);
 ?>
