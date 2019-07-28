<?php
if (isset($_POST['ebutton'])) {
$criteria=[
			
			'name'=>$_POST['name'],
			'email'=>$_POST['email'],
			'telephone'=>$_POST['telephone'],
			'enquiry'=>$_POST['enquiry'],
		];

		$add = $tbl_enquiries->insert($criteria);
		if($add == true){
			echo '<script>
				alert("Your enquiry has been submitted.");
				window.location=contact;
				</script>';

				
		}else{
			echo '
				<script>
				alert("Insufficient Information");
				</script>';
		}
}
 $title = "Contact Us";
 $content = loadTemplate("../template_views/user_area/contact_temp.php", []);
?>

		