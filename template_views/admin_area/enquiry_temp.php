<sction class="right">

	<h2>Enquiries</h2>

	<table class="mytable">
		<tr>
			<th>SN</th>
			<th>Name</th>
			<th>Email</th>
			<th>Enquiry</th>
			<th>Action</th>
			<th>Viewed By</th>
		</tr>
			<?php
				$sn=1;
				foreach ($list_enquiry as $row) {
						if($row['checked']==0)
							//shows checked if the admin has marked it completed
				$checked = '<a href="enquiries&enid='.$row['id'].'">Check</a>'; 	else{$checked='Checked';} 
						
				echo '<tr><td>'.$sn.' </td>'.'<td>'.$row['name'].'</td><td>'.$row['email'].
					'</td><td>'.$row['enquiry'].'</td>'.'<td>'.$checked;?>
						<a onclick= "return confirm('Are you sure to delete?');" href="enquiries&denid=<?php echo $row['id']; ?>">DELETE</a>
					</td>
					<td> <?php echo $row['reviewed_by']; ?></td>
					<?php $sn++; ?>
			<?php } ?>
	</table>
		</section>
