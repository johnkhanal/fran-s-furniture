<section class="right">
	<h2>Specials</h2>
	<h4><a class="addnew" href="modifySpecial">Add New Offer</a></h4>
	<table class="mytable">
		<?php $sn=1; ?>
		<tr>
			<th>SN</th>
			<th>Title</th>
			<th>Description</th>
			<th>Posted</th>
			<th>Ending</th>
			<th>Action</th>
		</tr>

		<tr>
			<?php foreach ($all_specials as $row){ ?>
				<td><?php echo $sn; $sn++ ?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['post_date'];?></td>
				<td><?php echo $row['end_date'];?></td>
				<td><a href="modifySpecial&esid=<?php echo $row['id'];?>">EDIT</a> <a onclick= "return confirm('Are you sure to delete?');" href="modifySpecial&desid=<?php echo $row['id'];?>">DELETE</a></td></tr>
			<?php } ?>
		
	</table>

</section>