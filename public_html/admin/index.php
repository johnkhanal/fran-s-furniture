<?php
	session_start();
	require'../../includes/admin_includes.php';
	
	
		if(isset($_GET['page'])){
			if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) 
				require '../../pages/admin_area/'.$_GET['page']. '.php';
			else
				require '../../pages/admin_area/admin_home.php';
		}
		else{
			require '../../pages/admin_area/admin_home.php';
		}

		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		
		echo loadTemplate('../../template_views/admin_area/layout.php', $tempVars);
		
		
?>