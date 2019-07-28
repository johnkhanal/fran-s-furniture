<section class="right">
	<h2>Specials
	</h2>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php if(isset($_GET['esid'])) echo $spec['id'] ;?>">
		<label>Title</label>
		<input type="text" name="name" value="<?php if(isset($_GET['esid'])) echo $spec['name'] ;?>">

		<label>Details</label>
		<textarea name="description"><?php if(isset($_GET['esid'])) echo $spec['description'] ;?></textarea>

		<label>Posted On</label>
		<input type="date" name="post_date" value="<?php if(isset($_GET['esid'])) echo $spec['post_date'] ;?>">



		<label>Valid Till</label>
		<input type="date" name="end_date" value="<?php if(isset($_GET['esid'])) echo $spec['end_date'] ;?>">

		<?php
		if (isset($_GET['esid'])) {
			if (file_exists('../../images/Specialoffer/'.$spec['id'].'.jpg')) {
						echo '<img style="width: 200px; clear: both" src="../../images/Specialoffer/'.$spec['id'].'.jpg" />';
					}}
				?>
				<label>Image</label>
				<input type="file" name="special_image" /> <br> <br>
		<input type="submit" name="saveOffer" value="SUBMIT">
	</form>
</section>