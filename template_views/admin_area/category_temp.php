	<section class="right">
	<h2>List Of Categories</h2>
	<h3><a class="addnew" href="modifyCategory">Add New Category</a></h3>

	<table class="mytable">
		<thead>
			
		<tr>
			<th>SN</th>
			<th>Category</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
			
	
			<?php
				$sn=1;
				foreach ($cats_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].' </td><td><a href="modifyCategory&cat_id='.$row['id']. '">Edit</a>';?>  <a onclick= "return confirm('Are you sure to delete?');" href="modifyCategory&dcat_id=<?php echo $row['id']; ?>">Delete</a></td>
				<?php	$sn++; ?>
		<?php	}
		?>
			</tbody>
	</table>
		</section>
