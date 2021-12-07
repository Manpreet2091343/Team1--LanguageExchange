<?php
include("include/conn.php");
if(!isset($_GET['id'])){
	echo "<script>alert('Please select Language')</script>";
	echo "<script>window.location.href='check_language.php'</script>";
}else{
	$id=$_GET['id'];
}

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
		 View Languages Available</h1> </div>
		 <div class="panel-body">
		 	<h2 style="text-align: center;"><a href="find_users_chat.php?id=<?php echo $id; ?>">Chat With Users</a></h2>
		 	<h2 style="text-align: center;"><a href="dictionary.php?id=<?php echo $id; ?>">Dictionary</a></h2>
		 </div>
	</div>
</div>

</body>
</html>