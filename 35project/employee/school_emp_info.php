<?php 
@session_start();
    if(isset($_SESSION['username']) && $_SESSION['department']=='employee'){
 ?>

<?php include "employee_header.php"; 
    include "pag_school_emp_info.php";
?>
<div class="container">
<hr />
<h2><center>Employee Information Management System</center></h2>
<h3><center><b>Personal Information</b></center></h3>
<hr />
<div align="right"><h4><a href="school_emp_info_add.php" class="btn btn-primary">Add Information</a></h4></div>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
<table class="table table-striped">
  <thead>
      <tr>
        <th>Name</th>
        <th>Father Name</th>
        <th>Present Address</th>
        <th>Blood Group</th>
        <th>Action</th>       
      </tr>
    </thead>
	<?php
    //adding header
    //include "../header.php";
    
    //fetch data from table query
    //$sql = "select * from school_emp_info";
    
    //execute query
    //$result = mysqli_query($con,$sql);
    
    //fetch from table
    while($row=mysqli_fetch_array($nquery)){
		print "
        <tr>
        <th>$row[name]</th>
        <th>$row[father_name]</th>
        <th>$row[present_address]</th>
        <th>$row[blood_group]</th>
        <th><a href='school_emp_info_view.php?id=$row[id]'>View</a> | <a href='school_emp_info_edit.php?id=$row[id]'>Edit</a> | <a href='school_emp_info_delete.php?id=$row[id]'  onclick='return checkDelete()'>Delete</a></th>
        
      </tr>";
        
    }
    
    ?>
    
    </tbody>
  </table>

   <!-- pagintion start -->
    <div id="pagination_controls" style="text-align:right; padding-bottom: 10px;">
        <?php echo $paginationCtrls; ?>
    </div>
  <!-- pagination end -->  
 
</div>

<?php include "../footer.php"; ?>

<?php  } else {
    print "Please <a href='../login.php'>Login</a> to enter this page"; 
}
?>



