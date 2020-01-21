<!--------booking system------------->
<!doctype html>
<html>
<head>
<!-----------stylesheet connection----------->
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dash board</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
		<style>table,td,th{border:2px solid black;}
		
		</style>
</head>
<body>
<?php session_start();?>

<div>
				<ul>
					<li><a href="patientbase.php">logout</a></li>
					
				</ul>
</div>
<div class="card-body">
<table class="c" >
<thead>
	<tr>
	<th>NAME</th>
	<th>Department</th>
	<th>Dr. ID</th>
	<th>username</th>
	<th>specialized</th>
	<th>Clinic Address</th>
	<th>Clinic Time</th>
	<th>Date</th>
	<th>Time</th>
	</tr>
</thead>	
	<?php 
	include("connection.php");
	$result=mysqli_query($con,"SELECT * from doctorsign");
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	
	<tr>
		<form action="insertbookingdetails.php" method="post">
		<td><input type="text" value="<?php echo $row['name'];?>" name="name" readonly></td>
		<td><input type="text" value="<?php echo $row['department'];?>" name="department" readonly></td>
		<td><input type="text" value="<?php echo $row['nationalid'];?>" name="nationalid" readonly></td>
		<td><input type="text" value="patient name" name="username"></td>
		<td><input type="text" value="<?php echo $row['qualification'];?>" name="qualification" readonly></td>
		<td><input type="text" value="<?php echo $row['clinicadress'];?>" name="clinicadress" readonly></td>
		<td><input type="text" value="<?php echo $row['clinictime'];?>" name="clinictime" readonly> </td>
		<td><input type="date" value="date" name="date"></td>
		<td>
				<select name="time">
					<option value="10 AM">10 AM</option>
					<option value="11 AM">11 AM</option>
					<option value="12 AM">12 AM</option>
					<option value="1 PM">11 PM</option>
					<option value="2 PM">11 PM</option>
				</select>
				
		<td><input type="submit" name="submit" value="Book"></td>
		
		</form>
	</tr>
<?php
	}		
?>
</table>
</div>
</body>
</html>