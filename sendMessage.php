<?php

include("include/conn.php");
include("include/authentication.php");
session_start();
if($_POST)
{
	$name=$_SESSION['user_login_email'];
	$to_user_id=$_POST['to_user_id'];
	$from_user_id=$_POST['from_user_id'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat_message`(`to_user_id`, `from_user_id`, `message_by`, `chat_message`) VALUES ('$to_user_id','$from_user_id','$name','$msg')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: chat_history.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>