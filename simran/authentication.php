<?php
if(!isset($_SESSION['admin_login_email'])){
	echo "<script>alert('Admin Not Loggedin!! Please Login')</script>";
	echo "<script>window.location.href='login.php'</script>";
}
?>