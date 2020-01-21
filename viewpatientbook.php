<!--------------------view patient booking ------------>
<!doctype html>
<html>
<head>

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
</head>
<body>
 

<div class="card">
<div class="card-body">
<table class="table table-striped card-text bg-light">
<thead>
	<tr>
	<th class="">NAME</th>
	<th>Department</th>
	<th>Dr. ID</th>
	<th>Patient name</th>
	<th>Clinic Address</th>
	<th>Clinic Time</th>
	<th>Date</th>
	<th>Time</th>
	<th>Status</th>
	<th>ID</th>
	<th> </th>
	</tr>
</thead>	
	<?php 
	include("connection.php");
	session_start();
	$result=mysqli_query($con,"SELECT * from appoinment where name='".$_SESSION['name']."'");
	while($row=mysqli_fetch_assoc($result))
	{
		
	?>
	
	<tr>
		<form action="reject_and_approving.php" method="post">
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['department'];?></td>
		<td><?php echo $row['nationalid'];?></td>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['clinicadress'];?></td>
		<td ><?php echo $row['clinictime'];?></td>
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['time'];?></td>
		<td><?php echo $row['status'];?></td>
		<td><input type="text" value="<?php echo $row['id'];?>" name="id" readonly> </td>
		<td><input type="submit" value="Approve" class="btn-primary" name="approve"></td>
		<td><input type="submit" value="Reject"  class="btn-primary" name="reject"></td>
		
		</form>
	</tr>
<?php
	}		
?>
</table>
</div>
</div>
</body>
</html>