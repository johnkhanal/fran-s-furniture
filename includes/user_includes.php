<?php

	require '../db/dbcon.php'; //database connection code
	require '../classes/DatabaseTableQueries.php';
	require '../functions/loadTemplate.php';
	
	$tbl_furniture = new DatabaseTableQueries('furniture_table'); 
	$tbl_categories = new DatabaseTableQueries('category_table');
	$tbl_admins= new DatabaseTableQueries('admins_table');
	$tbl_enquiries= new DatabaseTableQueries('enquiries_table');
	$tbl_specials= new DatabaseTableQueries('special_table');

?>