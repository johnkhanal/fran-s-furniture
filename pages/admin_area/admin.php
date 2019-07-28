<?php 
	$title='Modify Admins';
	$admin=$tbl_admins->findAll();
	$admin_list=$admin->fetchAll();

	$vars=[
		'admin_list'=>$admin_list
	];
	$content = loadTemplate("../../template_views/admin_area/admin_temp.php", $vars);
 ?>