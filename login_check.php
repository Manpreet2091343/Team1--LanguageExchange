
<?php 
include("include/conn.php");

if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$sql="SELECT * from users where email='$email' and password='$pwd' and status='Active'";
	echo $sql;
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		$_SESSION['user_login_email']=$email;
		echo "<script>alert('User Loggedin')</script>";
		echo "<script>window.location.href='home.php'</script>";
	}else{
		echo "<script>alert('User Not Found!! Please Register')</script>";
		echo "<script>window.location.href='signup.php'</script>";

	}
}

?>