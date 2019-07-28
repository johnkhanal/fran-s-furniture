<?php 
$list_specials= $tbl_specials->findAll();
$all_specials=$list_specials->fetchAll();
$title='Modify Specials';
$vars=[
	'all_specials'=>$all_specials
];
$content=loadTemplate("../../template_views/admin_area/specials_temp.php",$vars);
 ?>

