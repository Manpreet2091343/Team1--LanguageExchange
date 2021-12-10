
<?php 
include("include/conn.php");

if(isset($_GET['word_id'])){
	$word_id=$_GET['word_id'];
	$sql="SELECT * from dictionary where id='$word_id'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		$update_status="UPDATE dictionary set status='hidden' where id='$word_id'";
		$update_status_run=mysqli_query($conn,$update_status);
		echo "<script>alert('Word Hidden')</script>";
		echo "<script>window.location.href='manage_dictionary_words.php'</script>";
	}else{
		echo "<script>alert('word Not Found')</script>";
		echo "<script>window.location.href='manage_dictionary_words.php'</script>";

	}
}

?>