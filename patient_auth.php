<!---------------patient authentication------------->
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sqs="select * from patientsign where name='".$name."' and password='".$password."'";
	$result=mysqli_query($con,$sqs);
	if (mysqli_num_rows($result) > 0)
	{   
		while($row=mysqli_fetch_assoc($result))
		{
			session_start();
			$_SESSION['id']=$row['id'];
			require_once "patientbase.php";
		}
	}
	else
	{
			echo "failed";
	}
}	
	?>