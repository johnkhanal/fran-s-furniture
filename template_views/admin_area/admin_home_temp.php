<?php 
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
			?>
		<section class="right">
			<h2>You are now logged in</h2>
		</section>
		<?php
		}	
		else{
			header('Location:../login');}
			?>
	
			