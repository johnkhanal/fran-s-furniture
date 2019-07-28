<?php
	$title='Furnitures';


	$list_furn=$tbl_furniture->findAll();
	$list_furn_list=$list_furn->fetchAll();


	$cri=[
		'list_furn_list'=>$list_furn_list
	];
	
	$content = loadTemplate("../../template_views/admin_area/furnitures_temp.php", $cri);