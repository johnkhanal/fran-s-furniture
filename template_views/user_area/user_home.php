<main class="home">
	<p>
		Welcome to Fran's Furniture. We're a family run furniture shop based in Northampton. We stock a wide variety of 
		modern and antique furniture including laps, bookcases, beds and sofas.
	</p>

	<div id="special_offer">
	<?php foreach ($specials as $sp_row) {?>
	<div class="photo">
		<a href="../images/Specialoffer/<?php echo $sp_row['id'];?>.jpg">
			<img style="width: 100%; height:400px;" src="../images/Specialoffer/<?php echo $sp_row['id'];?>.jpg" />
			</a>
	
	</div>

	<h2 class="specials">
	<a href="furniture">	<?php echo $sp_row['name'] ?></a>
		
	</h2>
	<div class="description">
		<?php echo $sp_row['description'] ?>
		<div class="post_date">
			<i>Posted On:<?php echo $sp_row['post_date'] ?></i>
		</div>
	</div>
	<?php } ?>
</div>
</main>