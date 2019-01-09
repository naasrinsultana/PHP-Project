<?php
    //adding header
    include "../header.php";
?>	


<div class="container">
<hr />
  <h2>Add Book's Information</h2>
<hr />  
  <form action="library_book_info_store.php" method="post">
    <div class="form-group">
      <label for="email">Book Name:</label>
      <input type="text" class="form-control" id="boook_name" placeholder="Enter Book name" name="boook_name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Author Name:</label>
      <input type="text" class="form-control" id="author_name" placeholder="Author Name" name="author_name" required>
    </div>

    <div class="form-group">
      <label for="">Publisher Name:</label>
      <input type="text" class="form-control" id="publisher_name" placeholder="Publisher Name" name="publisher_name" required>
    </div>
    <div class="form-group">
      <label for="">Quantity:</label>
      <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity"  required>
    </div>

    <div class="form-group">
      <label for="">Date:</label>
      <input type="date" class="form-control" id="cdate" placeholder="" name="cdate" required>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>