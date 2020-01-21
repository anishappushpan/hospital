<!-----------insert signup page for patient-------------->
<?php
require_once'connection.php';
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$nationalid=$_POST['nationalid'];
    $password=$_POST['password'];
	
if(isset($_POST['submit']))
{

	$sq="SELECT * FROM patientsign";
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
else{
	
$sqp="INSERT INTO patientsign(name,gender,email,nationalid,password) VALUES('".$name."','".$gender."','".$email."','".$nationalid."','".$password."')";
		if(!$result = $con->query($sqp))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{

			require_once "patientlogin.php";
				
		}
	mysqli_close($con);	
}
}
?>
	
