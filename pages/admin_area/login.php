<?php
if(isset($_POST['login']))
{
	$user = $tbl_admins->find('username',$_POST['username']);
	if($user->rowCount()>0)
	{
		$user_row=$user->fetch();
		if(password_verify($_POST['password'], $user_row['password']))
		{
			$_SESSION['admin_id']=$user_row['id'];
			$_SESSION['username']=$user_row['username'];
			$_SESSION['admin_type']=$user_row['privilege'];
			$_SESSION['logged_in']=true;
			header('Location:admin/admin_home');

		}
		else
		{
			echo "Invalid Password";
		}
	}

	else
	{
		echo "User Not Found";
	}
}


 $title = "Log In";
 $content = loadTemplate("../template_views/admin_area/login_temp.php", []);
?>