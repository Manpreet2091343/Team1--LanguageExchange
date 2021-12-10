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
		  ?>Dictionary</h1></div>
		 <div class="panel-body">
		 	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>Word</th>
			        <th>Meaning</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php  
			    	$i=0;
			    		$language_id=$_GET['id'];
			    		$alphabet=$_GET['alphabet'];
			    		$user_email=$_SESSION['user_login_email'];
			    		$find_id=mysqli_query($conn,"SELECT * from users where email='$user_email'");
			    		$fetch_data=mysqli_fetch_array($find_id);
			    		$user_id=$fetch_data['id'];
					    $fetch_words="SELECT * FROM dictionary where language='$language_id' and word LIKE '$alphabet%' and status<>'hidden'";
					    $fetch_words_run=mysqli_query($conn,$fetch_words);
					    while($fetch_words_data=mysqli_fetch_array($fetch_words_run)){
					    $word_id= $fetch_words_data['id'];
					    $word=$fetch_words_data['word'];
					    $meaning=$fetch_words_data['meaning'];

						$fetch_favourites="SELECT * FROM favourites WHERE word_id='$word_id' and user_id='$user_id'";
						$fetch_favourites_run=mysqli_query($conn,$fetch_favourites);
						if(mysqli_num_rows($fetch_favourites_run)>0){
							$fetch_data=mysqli_fetch_array($fetch_favourites_run);
			    			$flag=$fetch_data['flag'];
			    			$id=$fetch_data['id'];
						}else{
							$flag="not-favourite";
						}
		 	    		$i=$i+1;
			    	?>
					      <tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $word; ?></td>
					        <td><?php echo $meaning; ?></td>
					        <?php if($flag=="not-favourite"){ ?>
					        	<td><a href="mark_favourite.php?word_id=<?php echo $word_id;  ?>"><img src="images/mark_favourite.png" width='40' height='40'></a></td>
					    	<?php }else{

					    		echo "<td><img src='images/favourite.jpg' width='40' height='40'></td>";
					    	} ?>
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