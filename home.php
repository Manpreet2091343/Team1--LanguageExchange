<?php
include("include/conn.php");
include("include/authentication.php");
?>
<html>
<?php include("include/head.php"); ?>
<style type="text/css">
	.navbar{
		border-radius: 10px;
	}
</style>
<body>
	
<?php  
include("include/nav.php");
?>  
<div class="container">
		<h1 style="text-align: center;">Welcome User <br> <?php
			$email_user_loggedin=$_SESSION['user_login_email'];
		 $fetch_user_name="SELECT * FROM users where email='$email_user_loggedin'";
		 $fetch_user_name_run=mysqli_query($conn,$fetch_user_name);
		 $fetch_user_name_data=mysqli_fetch_array($fetch_user_name_run);
		 echo $fetch_user_name_data['user_name']; ?></h1>	
	</div>
</body>
</html>