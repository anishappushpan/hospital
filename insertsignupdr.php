<!-----------insert signup page for doctor------------->
<?php
require_once'connection.php';
	$name=$_POST['name'];
	$department=$_POST['department'];
	$email=$_POST['email'];
	$nationalid=$_POST['nationalid'];
	$qualification=$_POST['qualification'];
	$certificateno=$_POST['certificateno'];
	$clinicadress=$_POST['clinicadress'];
	$clinictime=$_POST['clinictime'];
    $password=$_POST['password'];
    $status='pending';
	
if(isset($_POST['submit']))
{

$sq="SELECT * FROM doctorsign";
$rslt=mysqli_query($con,$sq);
$flag=0;
while($row1=mysqli_fetch_assoc($rslt))
{

	if($row1['email']==$email)
		{
			$flag=1;
		}
}
	if($flag=1)
	{

			echo "Already existing email id";
			mysqli_close($con);
	}
	else
{
$sqp="INSERT INTO doctorsign(name,department,email,nationalid,qualification,certificateno,clinicadress,clinictime,password,status) VALUES('".$name."','".$department."','".$email."','".$nationalid."','".$qualification."','".$certificateno."','".$clinicadress."','".$clinictime."','".$password."','".$status."')";
		if(!$result = $con->query($sqp))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{

			require_once "doctorlogin.php";
				
		}
	mysqli_close($con);	
}
}
?>
	