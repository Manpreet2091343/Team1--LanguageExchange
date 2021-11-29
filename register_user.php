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
      <div class="panel-heading"><h1>Register User Form</h1></div>
      <div class="panel-body">
      	<form class="form-horizontal" action="register_user_add.php" method="POST">
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Name:</label>
		      <div class="col-sm-10">
		        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="user_name">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="email">Email:</label>
		      <div class="col-sm-10">
		        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-2" for="pwd">Password:</label>
		      <div class="col-sm-10">          
		        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
		      </div>
		    </div>
		    <div class="form-group" style="text-align: center;">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <input type="submit" class="btn btn-default" name="register" value="Add User">
		      </div>
		    </div>
		</form>
      </div>
    </div>
  
</div>

</body>
</html>