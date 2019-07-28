		<?php
	
	$specials = $tbl_specials->findAll();
	$cri=[
		'specials'=>$specials];


		 $title = "Fran's Furniture";
		$content = loadTemplate("../template_views/user_area/user_home.php",$cri) ?>

		