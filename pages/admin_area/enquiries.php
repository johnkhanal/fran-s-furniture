<?php
	$all_enquiries= $tbl_enquiries->findAll();
	$list_enquiry= $all_enquiries->fetchAll(); 
// deleting
	if (isset($_GET['denid'])) {
	
		if($tbl_enquiries->delete('id',$_GET['denid']))
	{
		echo '<script>
				document.location = "enquiries";
				</script>';
	}
	}

//checking enquiry 
	if (isset($_GET['enid'])) 
	{
		//$admin_id=$_SESSION['userId'];
		$id=$_GET['enid'];
		$admin_name= $_SESSION['username'];
		$records=['id'=>$id, 'reviewed_by'=>$admin_name, 'checked'=>1];
		if($tbl_enquiries->update($records, 'id'))
		{

			echo '
				<script>
				document.location = "enquiries";
				</script>';
		}

	}



//sending contents
	$vars=[ 'list_enquiry'=>$list_enquiry];
	$title= 'Enquiries';

	$content=loadTemplate("../../template_views/admin_area/enquiry_temp.php",$vars);
 ?>