<?php 
include("include/conn.php");

if(isset($_POST['add_book'])){
	$book_name=$_POST['book_name'];
	$book_url=$_POST['book_url'];
	$language=$_POST['language'];
	$sql="SELECT * from books where book_name='$book_name' and book_url='$book_url' and language='$language'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		echo "<script>alert('Book Already Found')</script>";
		echo "<script>window.location.href='add_book.php'</script>";
	}else{
		$insert_rec="INSERT INTO `books`(`book_name`, `book_url`, `language`) 
		VALUES('$book_name','$book_url','$language')";
		$insert_rec_run=mysqli_query($conn,$insert_rec);
		echo "<script>alert('Book Added!!')</script>";
		echo "<script>window.location.href='add_book.php'</script>";

	}
}

?>
