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
		 Users Chat</h1></div>
		 <div class="panel-body">
		 	<div class="display-chat">
				<?php
					$id=$_GET['id'];
					$email_session=$_SESSION['user_login_email'];
			    	$fet_uname=mysqli_query($conn,"SELECT * FROM users where email='$email_session'");
			    	$fetch_daaa=mysqli_fetch_array($fet_uname);
			    	$user_id=$fetch_daaa['id'];	
					$sql="SELECT * FROM `chat_message`";
					$query = mysqli_query($conn,$sql);
					if(mysqli_num_rows($query)>0)
					{
						while($row= mysqli_fetch_assoc($query))	
						{
							if($row['from_user_id']==$user_id || $row['to_user_id']==$user_id){
								if($row['from_user_id']==$id || $row['to_user_id']==$id){
				?>
								<div class="message">
									<p>
										<span><?php echo $row['message_by']; ?> :</span>
										<?php echo $row['chat_message']; ?>
									</p>
								</div>
				<?php
								}
							}
						}
					}
					else
					{
				?>
				<div class="message">
							<p>
								No previous chat available.
							</p>
				</div>
				<?php
					} 
				?>
			</div>
			<form class="form-horizontal" method="post" action="sendMessage.php">
			    <div class="form-group">
			      <div class="col-sm-10">          
			        <textarea name="msg" class="form-control" placeholder="Type your message here..."></textarea>
			        <input type="hidden" name="to_user_id" value="<?php  echo $id; ?>">
			        <input type="hidden" name="from_user_id" value="<?php  echo $user_id; ?>">
			      </div>
				         
			      <div class="col-sm-2">
			        <button type="submit" class="btn btn-primary">Send</button>
			      </div>

			    </div>
			</form>
		 </div>
	</div>
</div>

</body>
</html>