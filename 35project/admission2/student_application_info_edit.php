<?php @session_start();
	if(isset($_SESSION['username']) && $_SESSION['department']=='student'){

 ?>
<?php
    //adding header
    include "../header.php";
	//Get id of url
	$id = $_GET['id'];
    //fetch data from table query
    $sql = "select * from school_application_form where id=".$id;
    //execute query
    $result = mysqli_query($con,$sql);
	//fetch from table
	$row=mysqli_fetch_array($result);			
?>	


<div class="container">
<hr />
  <h2>Edit Student's  Application Information</h2>
<hr />  
  <form action="student_personal_info_update.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="hidden" class="form-control" id="id" name="id" value="<?php print $row['id'];  ?>">
            
      <input type="text" class="form-control" id="student_name" placeholder="Enter name" name="student_name" value="<?php print $row['student_name'];  ?>" required>
    </div>
    <div class="form-group">
      <label for="fn">Father's Name:</label>
      <input type="text" class="form-control" id="father_name" placeholder="Name of Father" name="father_name"  value="<?php print $row['father_name'];  ?>" required>
    </div>

    <div class="form-group">
      <label for="mn">Mother's Name:</label>
      <input type="text" class="form-control" id="mother_name" placeholder="Name of Mother" name="mother_name" value="<?php print $row['mother_name'];  ?>" required>
    </div>
     <div class="form-group">
  <label for="pa">Present Address:</label>
  <textarea class="form-control" rows="5" id="present_address"  placeholder="Present Address" name="present_address" value="<?php print $row['present_address'];  ?>"   required></textarea>
</div> 

     <div class="form-group">
  <label for="pmnt">Permanent Address:</label>
  <textarea class="form-control" rows="5" id="permanent_address"  placeholder="Permanent Address" name="permanent_address" value="<?php print $row['permanent_address'];  ?>"   required></textarea>
</div> 

    <div class="form-group">
      <label for="r">Religion:</label>
      <select class="form-control" id="religion" name="religion"  required>
      	<option  value="<?php print $row['religion'];  ?>"><?php print $row['religion'];  ?></option>        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddhist">Buddhist</option>
        <option value="Christian">Christian</option>
      </select>
    </div>

    <div class="form-group">
      <label for="">Gender:</label>
      <select class="form-control" id="gender" name="gender"  required>
      	<option  value="<?php print $row['gender'];  ?>"><?php print $row['gender'];  ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Common">Common</option>
      </select>
    </div>
    <div class="form-group">
      <label for="db">Date of Birth:</label>
      <input type="date" class="form-control" id="date_of_birth" placeholder="" name="date_of_birth" value="<?php print $row['date_of_birth'];  ?>"  required>
    </div>

    <div class="form-group">
      <label for="pb">Place Of Birth:</label>
      <input type="text" class="form-control" id="place_of_birth" placeholder="Place Of Birth" name="place_of_birth" value="<?php print $row['place_of_birth'];  ?>"  required>
    </div>
 <div class="form-group">
      <label for="psn">Previous School Name:</label>
      <input type="text" class="form-control" id="previous_school_name" placeholder="Place Of Birth" name="previous_school_name" value="<?php print $row['previous_school_name'];  ?>"  required>
    </div>
     <div class="form-group">
  <label for="rlps">Reason of Leaving Ptrevious School:</label>
  <textarea class="form-control" rows="5" id="reason_of_leaving_previous_school"  placeholder="Reason of Leaving SchoolComment" name="reason_of_leaving_previous_school" value="<?php print $row['reason_of_leaving_previous_school'];  ?>"   required></textarea>
</div> 
    <div class="form-group">
      <label for="rps">Reasult of Previous School:</label>
      <input type="text" class="form-control" id="result_of_previous_school" placeholder="Blood Group" name="result_of_previous_school" value="<?php print $row['result_of_previous_school'];  ?>" >
    </div>
    <div class="form-group">
      <label for="fec">First Enrolled Class:</label>
      <input type="text" class="form-control" id="first_enrolled_class" placeholder="Blood Group" name="first_enrolled_class" value="<?php print $row['first_enrolled_class'];  ?>" >
    </div>
    <div class="form-group">
      <label for="ad">Admission Date:</label>
      <input type="text" class="form-control" id="admission_date" placeholder="Blood Group" name="admission_date" value="<?php print $row['admission_date'];  ?>" >
    </div> 
 <div class="form-group">
      <label for="sts">Status:</label>
      <input type="text" class="form-control" id="status" placeholder="Blood Group" name="status" value="<?php print $row['status'];  ?>" >
    </div> 
        <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php } else {
	print "Please <a href='../login.php'>Login</a> to enter this page";	
}
	?>