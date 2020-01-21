<!--------------------reject and approving page--------->
<?php

include("connection.php");
if(isset($_POST['approve']))
{

	$id=$_POST['id'];
	$sql="UPDATE appoinment SET status='Approved' where id='".$id."'";
	if(mysqli_query($con,$sql))
	{

			require_once "viewpatientbook.php";
	}
	
}
else if(isset($_POST['reject']))
{
		
	$id=$_POST['id'];
	$sql="UPDATE appoinment SET status='Rejected' where id='".$id."'";
	if(mysqli_query($con,$sql))
	{

			require_once "viewpatientbook.php";
	}
	
	
}
?>