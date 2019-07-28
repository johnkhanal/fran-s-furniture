	<sction class="right">
		
	<h2>Furnitures</h2>
	<h3><a class="addnew" href="modifyFurniture">Add New Furniture</a></h3>
	<table class="mytable">
		<thead>
			
		<tr>
			<th>SN</th>
			<th>Title</th>
			<th>Description</th>
			<th>Price</th>
			<th>Condition</th>
			<th>Visible</th>
			<th>Action</th>
		</tr>
		</thead>
		
			<?php
				$sn=1;
				foreach ($list_furn_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['description'].
					'</td><td>'.$row['price'].'</td><td>'.$row['furniture_condition'].'</td><td>'; if($row['visible']==1) echo'Show';else echo "Hide";?></td>
					<td style="padding: 0;"><a href="modifyFurniture&f_id=<?php echo $row['id'];?>">Edit</a>
					 <a onclick= "return confirm('Are you sure to delete?');" href="modifyFurniture&df_id=<?php echo $row['id']; ?>">Delete</a></td></tr>
						<?php $sn++; ?>
			 <?php }
		?>
	</table>
		</section>
