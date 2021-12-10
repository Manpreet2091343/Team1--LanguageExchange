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
		  ?>Manage Books</h1></div>
		 <div class="panel-body">
		 	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>Book Name</th>
			        <th>Book Url</th>
			        <th>Language</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php  
			    	$i=0;
					    $fetch_words="SELECT * FROM books ";
					    $fetch_words_run=mysqli_query($conn,$fetch_words);
					    while($fetch_words_data=mysqli_fetch_array($fetch_words_run)){
					    $book_id= $fetch_words_data['id'];
					    $book_name=$fetch_words_data['book_name'];
					    $book_url=$fetch_words_data['book_url'];
					    $language=$fetch_words_data['language'];
					    $flag=$fetch_words_data['status'];
		 	    		$i=$i+1;
			    	?>
					      <tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $book_name; ?></td>
					        <td><a href="<?php echo $book_url; ?>"><?php echo $book_url; ?></a></td>
					        <td><?php echo $language; ?></td>
					        <?php if($flag=="Active"){ ?>
					        	<td><a href="mark_hidden_book.php?book_id=<?php echo $book_id;  ?>">Hide Book</a></td>
					    	<?php }else{
					    	?>
					    		<td><a href="mark_available_book.php?book_id=<?php echo $book_id;  ?>">Mark Available</a></td>
					    	<?php } ?>
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