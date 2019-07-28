<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/style.css"/>
		
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="../home">Home</a></li>
			<li><a href="../furniture">Our Furnitures</a></li>
			<li><a href="../about">About Us</a></li>
			
			<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
			?>
			<li><a href="logout">Log Out</a></li>
		<?php } else { ?>
			<li><a href="../login">Log In</a></li>
		<?php } ?>
		</ul>

	</nav>
<img src="../../images/randombanner.php"/>


<main class="admin">
	<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
	<section class="left">
		<ul>
			<li><a href="categories"> Categories</a></li>
			<li><a href="furnitures"> Furnitures</a></li>
			<!-- checking if the admin is super or not to able to add other admins -->
			<?php if ($_SESSION['admin_type']=='super') {
			echo '<li><a href="admin"> Admin</a></li>';
			} ?>
			<li><a href="specials">Special Offers</a></li>
			<li><a href="enquiries"> Enquiries</a></li>
			<li><a href="../faq">FAQs</a></li>
			
		</ul>
	</section>
<?php } ?>
		<?php echo $content; ?>

</main>

	

	<footer>
		&copy; Fran's Furniture <?php echo 	Date('Y') ; ?>
	</footer>
</body>
</html>