<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>
<?php
    //adding header
    include "../header.php";
	//get the input
	$boook_name = $_POST['boook_name'];
	$publisher_name = $_POST['publisher_name'];
	$cdate = $_POST['cdate'];
	$author_name = $_POST['author_name'];
	$quantity = $_POST['quantity'];

	
	//query to store data
	$sql = "insert into school_lib_books_infor_entry_system values('','$boook_name','$publisher_name','$cdate','$author_name','$quantity',1)";
	//execute query
	mysqli_query($con,$sql);
	
	//redirect to view page
	header('location: library_book_info.php');
?>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>