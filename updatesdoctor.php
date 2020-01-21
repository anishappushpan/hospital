<!------------------upadates doctors details--------------->
<?php
require_once'connection.php';
	$id=$_POST['id'];
	$email=$_POST['email'];
	$nationalid=$_POST['nationalid'];
	$qualification=$_POST['qualification'];
	$clinicadress=$_POST['clinicadress'];
	$clinictime=$_POST['clinictime'];
if(isset($_POST['submit']))
{
	
$sqp="UPDATE doctorsign SET email='".$email."',nationalid='".$nationalid."',qualification='".$qualification."',clinicadress='".$clinicadress."',clinictime='".$clinictime."' ";
		if(!$result = $con->query($sqp))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{

			require_once "doctor_profile_update.php";
				
		}
	mysqli_close($con);	
}
?>