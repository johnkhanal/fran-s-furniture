
<main class="admin">
	<section class="left">
		<ul>
			<?php foreach ($categories as $row) { ?>
				<li><a href="category&cat_id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
			<?php } ?>
		</ul>
	</section>

	<section class="right">
		<!-- prints  particular category name -->
		<h1><?php echo $category_name['name']; ?></h1>

	<ul class="furniture">
<?php
	
		foreach ($furniture as $frow) {
			$categories=$tbl_categories->find('id',$frow['category_id']);
			$category = $categories->fetch();
			echo '<li>';

		if (file_exists('../images/furniture/' . $frow['id'] . '.jpg')) {
			echo '<a href="../images/furniture/' . $frow['id'] . '.jpg"><img src="../images/furniture/' . $frow['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $frow['name'] . '</h2>';
		echo '<h3>' . $category['name'] . '</h3>';
		echo '<h4>£' . $frow['price'] . '</h4>';
		echo '<p>' . $frow['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

	?>

</ul>

</section>

</main>