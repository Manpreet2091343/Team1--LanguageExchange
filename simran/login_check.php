
<?php 
include("include/conn.php");

if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$sql="SELECT * from users where email='$email' and password='$pwd' ";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		$fetch=mysqli_fetch_array($sql_find);
		$status=$fetch['status'];
		if($status=="Blocked"){
			echo "<script>alert('User Blocked Please contact Administrator')</script>";
			echo "<script>window.location.href='login.php'</script>";
		}else{
			$_SESSION['user_login_email']=$email;
			echo "<script>alert('User Loggedin')</script>";
			echo "<script>window.location.href='home.php'</script>";
		}
	}else{
		echo "<script>alert('User Not Found!! Please Register')</script>";
		echo "<script>window.location.href='register.php'</script>";

	}
}

?>