<?php 
$adminss= $tbl_admins->findAll();
$list_admin= $adminss->fetchAll();

if(isset($_GET['deaid'])){
	$tbl_admins->delete('id',$_GET['deaid']);
}

if(isset($_GET['eaid'])){
	$admin_id=$tbl_admins->find('id',$_GET['eaid']);
	$list_admin=$admin_id->fetch();
	$cri=[
		'list_admin'=>$list_admin
		];
}

if (isset($_POST['saveAdmin'])) {
		
		if($_POST['username'] == "" || $_POST['password'] == "") echo "<script>alert('Fill in all the forms')</script>";

		else{
			$values = [
				'id' => $_POST['id'],
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'privilege'     => $_POST['privilege']
			];

			$check = $tbl_admins->save($values, 'id');
			if($check == true){
				echo '<script>
					 alert("Admin Saved!");
					 document.location="admin";
					 </script>';
			}else{
				echo '<script>
					 alert("!!!!!!!!!Could not save admin!!!!!!!!!!!!");
					 </script>';
			}
		}
}
$title='Modify Admins';
$cri=['list_admin'=>$list_admin];
$content=loadTemplate("../../template_views/admin_area/modifyAdmin_temp.php", $cri);

 ?>