<section class="right">
	<h2>List of Admins</h2>
	<h4><a class="addnew" href="modifyAdmin">Add New Admin</a></h4>

	<table class="mytable">
		<tr>
			<th>SN</th>
			<th>Username</th>
			<th>Privilege</th>
			<th>Action</th>
		</tr>
			<?php
				$sn=1;
				foreach ($admin_list as $row) {
					echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['username'].'</td><td>'.$row['privilege'].'</td>'.
					' <td><a href="modifyAdmin&eaid='.$row['id']. '">Edit</a>';
					if($row['privilege']=='regular') {?>
					<a onclick= "return confirm('Are you sure to delete?');" href="modifyAdmin&deaid=<?php echo $row['id']; ?>">Delete</a></td>
					<?php $sn++; ?>
		<?php	}}
		?>
	</table>
</section>