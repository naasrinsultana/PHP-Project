<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='accounts'){

 ?>
<?php
    //adding header
    include "accounts_header.php";
	//get the input
	$serial_no = $_POST['serial_no'];
	$description = $_POST['description'];
	$debit_amount = $_POST['debit_amount'];
	$credit_amount = $_POST['credit_amount'];
	$total_balance = $_POST['total_balance'];
	$reference = $_POST['reference'];	
	
	//query to store data
	$sql = "insert into school_acc_trial_balance values('','$serial_no','$description','$debit_amount','$credit_amount','$total_balance','$reference',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: school_acc_trial_balance.php');


?>
<?php include "../footer.php"; ?>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?> 