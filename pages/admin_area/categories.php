<?php

	$title='Modify Categories';

	$cats=$tbl_categories->findAll();
	$cats_list=$cats->fetchAll();

	$cri=[
		'cats_list'=>$cats_list
	];
	$content = loadTemplate("../../template_views/admin_area/category_temp.php", $cri);


