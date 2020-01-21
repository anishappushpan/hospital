<!---------doctor authentication------------>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sqs="select * from doctorsign where name='".$name."' and password='".$password."'";
	$result=mysqli_query($con,$sqs);
	if (mysqli_num_rows($result) > 0)
	{   
		while($row=mysqli_fetch_assoc($result))
		{	
			session_start();
			$_SESSION['name']=$row['name'];
			require_once "doctorbase.php";
		}
	}
	else
	{
			echo "failed";
	}
}	
?>
	
