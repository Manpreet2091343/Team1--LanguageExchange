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
		 Find Users</h1></div>
		 <div class="panel-body">
		 	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>User Name</th>
			        <th>Language</th>
			        <th>Chat</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php  
			    	$i=0;
			    		$email_session=$_SESSION['user_login_email'];
			    		$fet_uname=mysqli_query($conn,"SELECT * FROM users where email='$email_session'");
			    		$fetch_daaa=mysqli_fetch_array($fet_uname);
			    		$user_id=$fetch_daaa['id'];
			    		$language=$_GET['id'];
					    $fetch_uname="SELECT * FROM users where id<>'$user_id' and language='$language'";
					    $fetch_uname_run=mysqli_query($conn,$fetch_uname);
					    while($fetch_data=mysqli_fetch_array($fetch_uname_run)){
			    			$user_name=$fetch_data['user_name'];
			    			$id=$fetch_data['id'];
			    			$language=$fetch_data['language'];
			    			$i=$i+1;
			    	?>
					      <tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $user_name; ?></td>
					        <td><?php echo $language; ?></td>
					        <td><a href="chat_user.php?id=<?php echo $id;  ?>">Chat</a></td>
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