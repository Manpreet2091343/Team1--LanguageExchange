<?php
include("include/conn.php");
include("include/authentication.php");
?>
<html>
<?php include("include/head.php"); ?>
<style type="text/css">
	.container{
		border-radius: 25px;
		background-image: url("images/1.jpg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
		width: 35%;
	}
	.panel{
		background-color: transparent;
	}
	.panel-heading{
		text-align: center;
	}
</style>
<body>
	
<?php  
include("include/nav.php");
?>  
<div class="container">
 <div class="panel">
      <div class="panel-heading"><h1>Add Book</h1></div>
      <div class="panel-body">
      	<form class="form-horizontal" action="book_add.php" method="POST">
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Book Name:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="name" placeholder="Enter Book Name" name="book_name" required="required">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Book URL:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="email" placeholder="Enter Book URL" name="book_url" required="required">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="pwd">Language:</label>
		      <div class="col-sm-10">          
		        <input type="text" class="form-control" id="pwd" placeholder="Enter Language(1,2,3)" name="language" required="required">
		      </div>
		    </div>
		    <div class="form-group" style="text-align: center;">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <input type="submit" class="btn btn-default" name="add_book" value="Add Book">
		      </div>
		    </div>
		</form>
      </div>
    </div>
  
</div>

</body>
</html>