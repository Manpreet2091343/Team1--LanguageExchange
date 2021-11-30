<?php 
include("include/conn.php");

if(isset($_POST['register'])){
	$email=$_POST['email'];
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$sql="SELECT * from users where uname='$user_name' and email='$email'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		echo "<script>alert('User Already Found')</script>";
		echo "<script>window.location.href='register.php'</script>";
	}else{
		$insert_rec="INSERT INTO `users`(`user_name`, `email`, `password`,`status`) 
		VALUES('$user_name','$email','$password','Active')";
		$insert_rec_run=mysqli_query($conn,$insert_rec);
		echo "<script>alert('User Registered!! Please Login')</script>";
		echo "<script>window.location.href='login.php'</script>";

	}
}

?>
