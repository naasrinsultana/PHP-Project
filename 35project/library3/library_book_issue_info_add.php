<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='library'){
 ?>
<?php include "library_header.php"; ?>
<?php
    //adding header
    include "../header.php";
?>	
<div class="container">
<hr />
  <h2>Library Book Issue Management System</h2>
<hr />  
  <form action="library_book_issuel_info_store.php" method="post">
    <div class="form-group">
      <label for="member_id">Member Id:</label>
      <select class="form-control" id="member_id" placeholder="Member Id:" name="member_id" required>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
        
      </select>
    </div>
    <div class="form-group">
      <label for="book_id">Book Id:</label>
      <select  class="form-control" id="book_id" placeholder="Book Id" name="book_id" required>
      	<option value="1">1</option>
      	<option value="2" >2</option>
      	<option value="3" >3</option>
      	<option value="4">4</option>
      	<option value="5">5</option> 
      </select>
            
    </div>

    <div class="form-group">
      <label for="">Book Issue Date:</label>
      <input type="date" class="form-control" id="book_issue_date" placeholder="Book Issue Date" name="book_issue_date" required>
    </div>
    <div class="form-group">
      <label for="">Returning Date:</label>
      <input type="date" class="form-control" id="returning_date" placeholder="Returning Date" name="returning_date"  required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include "../footer.php"; ?>
<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
?>