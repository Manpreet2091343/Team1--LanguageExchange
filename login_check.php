
<?php 
include("include/conn.php");

if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$sql="SELECT * from admin where email='$email' and password='$pwd'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		$_SESSION['admin_login_email']=$email;
		echo "<script>alert('Admin Loggedin')</script>";
		echo "<script>window.location.href='home.php'</script>";
	}else{
		echo "<script>alert('Incorrect Credentials Please re-login')</script>";
		echo "<script>window.location.href='login.php'</script>";

	}
}

?>