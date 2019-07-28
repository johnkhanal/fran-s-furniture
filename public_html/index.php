<?php
require '../includes/user_includes.php';
	session_start();
	
		if(isset($_GET['page'])){
			if($_GET['page']=='login'){
				require '../pages/admin_area/login.php';
			}
				else if($_GET['page']=='logout')
				{
					require '../pages/admin_area/logout.php';
				}
				
			else{
				require '../pages/user_area/'.$_GET['page']. '.php';
			}
		}
		else{
			require '../pages/user_area/home.php';
		}
		
		$vars = [
			'title' => $title,
			'content' => $content
		];
		
		echo loadTemplate('../template_views/user_area/user_layout.php', $vars);
?>