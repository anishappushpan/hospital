<!---------admin authentication page---------->
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from admin where username='".$username."' and password='".$password."'";
	$result=mysqli_query($con,$sql);
	if (mysqli_num_rows($result) > 0)
	{   
		require_once "base.php";
	}
}	
	?>