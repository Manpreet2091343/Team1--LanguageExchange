<?php 
include("include/conn.php");

if(isset($_POST['word_submit'])){
	$word=$_POST['word'];
	$meaning=$_POST['meaning'];
	$language=$_POST['language'];
	$sql="SELECT * from dictionary where word='$word' and meaning='$meaning' and language='$language'";
	$sql_find=mysqli_query($conn,$sql);
	if(mysqli_num_rows($sql_find)>0){
		echo "<script>alert('Dictionary Word Already Found')</script>";
		echo "<script>window.location.href='manage_dictionary_words.php'</script>";
	}else{
		$insert_rec="INSERT INTO `dictionary`(`word`, `meaning`, `language`) 
		VALUES('$word','$meaning','$language')";
		$insert_rec_run=mysqli_query($conn,$insert_rec);
		echo "<script>alert('Word Added!!')</script>";
		echo "<script>window.location.href='manage_dictionary_words.php'</script>";

	}
}

?>
