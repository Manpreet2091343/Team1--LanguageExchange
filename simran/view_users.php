<?php
include("include/conn.php");
include("include/authentication.php");
?>
<html>
<?php include("include/head.php"); ?>
<style type="text/css">
	.navbar{
		border-radius: 10px;
	}
	.sample{
		border-radius: 25px;
		background-image: url("images/1.jpg");
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}
	.panel{
		background-color: transparent;
	}
	.panel-heading{
		text-align: center;
	}
	table{
		color: white;
	}
	.anchor_tag{
		color: white;
		text-decoration: underline;
	}
	.anchor_tag:hover{
		color: black;
		text-decoration: underline;	
	}
</style>
<body>
	
<?php  
include("include/nav.php");
?>  
<div class="container">
		<h1 style="text-align: center;">Welcome Admin </h1>	
</div>
<div class="container sample">
	<div class="panel">
		<div class="panel-heading"><h1 style="text-align: center;">
		View Users</h1></div>
		 <div class="panel-body">
		 	<table class="table ">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>User Name</th>
			        <th>User Email</th>
			        <th>Status</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php  
			    	$i=0;
			    		$fetch_all_users="SELECT * From users ";
			    		$fetch_all_users_query_run=mysqli_query($conn,$fetch_all_users);
			    		while($fetch_data=mysqli_fetch_array($fetch_all_users_query_run)){
			    			$id=$fetch_data['id'];
			    			$user_name=$fetch_data['user_name'];
			    			$email=$fetch_data['email'];
			    			$status=$fetch_data['status'];
			    			$i=$i+1;
			    	?>
					      <tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $user_name; ?></td>
					        <td><?php echo $email; ?></td>
					        <td><?php if($status=="Active"){ echo $status; }else{ echo $status; }  ?></td>
					      	<td><?php if($status=="Active"){ ?> <a class="anchor_tag" href="block_user.php?id=<?php echo $id;  ?>">Block User </a> <?php  }else{ ?> <a class="anchor_tag" href="active.php?id=<?php echo $id;  ?>">Activate User</a> <?php }  ?></td>
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