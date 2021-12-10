
<?php 
include("include/conn.php");

if(isset($_GET['book_id'])){
	$book_id=$_GET['book_id'];
	$sql="SELECT * from books where id='$book_id'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		$update_status="UPDATE books set status='hidden' where id='$book_id'";
		$update_status_run=mysqli_query($conn,$update_status);
		echo "<script>alert('Book Hidden')</script>";
		echo "<script>window.location.href='manage_books.php'</script>";
	}else{
		echo "<script>alert('Book Not Found')</script>";
		echo "<script>window.location.href='manage_books.php'</script>";

	}
}

?>