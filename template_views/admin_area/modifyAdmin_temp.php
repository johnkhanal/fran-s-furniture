<section class="right">
	<h2>Admin</h2>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['eaid']))echo $list_admin['id'];?>">

		<label>Username</label>
		<input type="text" name="username" value="<?php if(isset($_GET['eaid']))echo $list_admin['username']; ?>"> 

		<label>Password</label>
		<input type="text" name="password" >

		<label>Privilege</label>
		<select name="privilege"> value=" <?php if(isset($_GET['eaid']))echo $list_admin['privilege']; ?>"> 
			<option value="super">Super</option>
			<option value="regular">Regular</option>
		</select>

	
		<input type="submit" name="saveAdmin" value="SUBMIT">
	</form>
</section>