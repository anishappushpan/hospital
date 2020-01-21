<!-------------insert booking details-------------->
<?php
require_once'connection.php';
	$name=$_POST['name'];
	$department=$_POST['department'];
	$nationalid=$_POST['nationalid'];
	$username=$_POST['username'];
	$clinicadress=$_POST['clinicadress'];
	$clinictime=$_POST['clinictime'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $status='pending';
	
if(isset($_POST['submit']))
{
	
$sqp="INSERT INTO appoinment(name,department,nationalid,username,clinicadress,clinictime,date,time,status) VALUES('".$name."','".$department."','".$nationalid."','".$username."','".$clinicadress."','".$clinictime."','".$date."','".$time."','".$status."')";
		if(!$result = $con->query($sqp))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{

			require_once "bookingdoctor.php";
				
		}
	mysqli_close($con);	
}
?>