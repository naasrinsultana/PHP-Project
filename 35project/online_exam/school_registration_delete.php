<?php
	//get id
	$id = $_GET['id'];
	
	//connect with database
	include "../db/dbcon.php";

	//query to delete data
	$sql = "delete from school_online_registration where id=".$id;
	
	//execute the query
	$result = mysqli_query($con,$sql);
	
	//redirect to previous page
	header('Location:school_registration_info.php');	

?>