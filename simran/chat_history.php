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
		 Chat History</h1></div>
		 <div class="panel-body">
		 	<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>User Name</th>
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
			    		$chat_history="SELECT from_user_id,to_user_id FROM chat_message where to_user_id='$user_id' or from_user_id='$user_id' group by from_user_id,to_user_id";
					    $chat_history_run=mysqli_query($conn,$chat_history);
					    while($fetch_data=mysqli_fetch_array($chat_history_run)){
			    			$from_user_id=$fetch_data['from_user_id'];
			    			$to_user_id=$fetch_data['to_user_id'];
			    			if($from_user_id==$user_id){
			    				$fet_uname=mysqli_query($conn,"SELECT * FROM users where id='$to_user_id'");
			    			}else{
			    				$fet_uname=mysqli_query($conn,"SELECT * FROM users where id='$from_user_id'");
			    			};
			    			$fetch_daaa=mysqli_fetch_array($fet_uname);
			    			$name=$fetch_daaa['user_name'];
			    			$idd=$fetch_daaa['id'];	
			    			$i=$i+1;
			    	?>
					      <tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $name; ?></td>
					        <td><a href="chat_user.php?id=<?php echo $idd;  ?>">Continue Chat</a></td>
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