<main class="admin">
	<section class="left">

		<ul>

			<?php foreach ($categories as $row) { ?>
				<li><a href="category&cat_id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">

	<h1>Furniture</h1>
	<ul id="furniture_list" class="furniture">
		
<?php
		
		foreach ($furnitures as $frow) {
			if($frow['visible']==1){
			$cat=$tbl_categories->find('id',$frow['category_id']);
			$cat = $cat->fetch();

		echo '<li>';

		if (file_exists('../images/furniture/' . $frow['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $frow['id'] . '.jpg"><img src="../images/furniture/' . $frow['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $frow['name'] . '</h2>';
		echo '<h3>' . $cat['name'] . '</h3>';
		echo '<h4>£' . $frow['price'] . '</h4>';
		echo '<h3>'. strtoupper($frow['furniture_condition']).'</h3>';
		echo '<p>' . $frow['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	
	}
}

	?>

</ul>

</section>

</main>