<?php
include("include/conn.php");
include("include/authentication.php");
?>
<html>
<?php include("include/head.php"); ?>
<style type="text/css">
	.border_heigth{
		-webkit-text-stroke: 2px black;
		color: white;
		font-size: 70px;
		text-align: center;
		margin-top: -15px;
		margin-left: 60px;	
	}
</style>
<body>
	
<?php  
include("include/nav.php");
?>  
	<div class="container">
		<h1  class="border_heigth"><br></h1>	
		
	</div>
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading"><h1 style="text-align: center;">
		 <?php 
		  ?>Books</h1></div>
		 <div class="panel-body">
		 	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>Book Name</th>
			        <th>Book Url</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php  
			    	$i=0;
			    		$language_id=$_GET['id'];
			    		$user_email=$_SESSION['user_login_email'];
			    		$find_id=mysqli_query($conn,"SELECT * from users where email='$user_email'");
			    		$fetch_data=mysqli_fetch_array($find_id);
			    		$user_id=$fetch_data['id'];
					    $fetch_words="SELECT * FROM books where language='$language_id' and status='Active'";
					    $fetch_words_run=mysqli_query($conn,$fetch_words);
					    while($fetch_words_data=mysqli_fetch_array($fetch_words_run)){
					    $word_id= $fetch_words_data['id'];
					    $book_name=$fetch_words_data['book_name'];
					    $book_url=$fetch_words_data['book_url'];
		 	    		$i=$i+1;
			    	?>
					      <tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $book_name; ?></td>
					        <td><a href="<?php echo $book_url; ?>"><?php echo $book_url; ?></a></td>
					      </tr>

			    	<?php
			    		}
			    	?>
			    </tbody>
			  </table>
		 </div>
	</div>
</div>

</body>
</html>