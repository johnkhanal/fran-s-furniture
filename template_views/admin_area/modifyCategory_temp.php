
<section class="right">
	<h2>Category</h2>
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php if(isset($_GET['cat_id']))echo $cat_selected['id'];?>"> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['cat_id']))echo $cat_selected['name']; ?>"> 
		<input type="submit" name="savecat">
	</form>
</section>