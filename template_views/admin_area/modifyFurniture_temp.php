
<section class="right">
	<h2>Furniture</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['f_id']))echo $furnitures['id'];?>">
		<label>Category </label>
		<select name="category_id" >
		<?php 
			foreach($categories as $row)
		echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		 ?>
		</select> 
		<label>Name</label>
		<input type="text" name="name" value=" <?php if(isset($_GET['f_id']))echo $furnitures['name']; ?>"> 

		<label>Price</label>
		<input type="text" name="price" value="<?php if(isset($_GET['f_id']))echo $furnitures['price']; ?>"> 


		<label>Description</label>
		<textarea name="description"> <?php if(isset($_GET['f_id']))echo $furnitures['description']; ?></textarea>

		<label>Condition</label>
		<select name="furniture_condition" value=" <?php if(isset($_GET['f_id']))echo $furnitures['furniture_condition']; ?>"> 
			<option value="first hand">First Hand</option>
			<option value="second hand">Second Hand</option>
		</select>

		<label>Show/Hide</label>
		<select name="visible" value="<?php if(isset($_GET['f_id']))echo $furnitures['visible']; ?>"> 
			<option value="1">Show</option>
			<option value="0">Hide</option>
		</select>
<?php
		if (isset($_GET['f_id'])) {
			if (file_exists('../../images/furniture/' . $furnitures['id'] . '.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/furniture/' . $furnitures['id'] . '.jpg" />';
					}}
				?>
		<label>Image</label>
				<input type="file" name="img" /> <br> <br>

		<input type="submit" name="saveFurniture" value="SUBMIT">
	</form>
</section>