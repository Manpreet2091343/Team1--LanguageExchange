
<?php 
include("include/conn.php");

if(isset($_GET['word_id'])){
	$word_id=$_GET['word_id'];
	$sql="SELECT * from dictionary where id='$word_id'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		$email=$_SESSION['user_login_email'];
		$idd=mysqli_query($conn,"SELECT * FROM users where email='$email'");
		$fetch_data_id=mysqli_fetch_array($idd);
		$user_id=$fetch_data_id['id'];
		$insert_query=mysqli_query($conn,"INSERT INTO favourites (`user_id`, `word_id`, `flag`) values('$user_id','$word_id','yes')");
		echo "<script>alert('Word added to Favourite')</script>";
		echo "<script>window.location.href='check_language.php'</script>";
	}else{
		echo "<script>alert('Word not added to favourites')</script>";
		echo "<script>window.location.href='check_language.php'</script>";

	}
}

?>