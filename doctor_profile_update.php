<!---------doctor field updation-------->
<!doctype html>
<html>

<body>
<?php session_start();?>

<div>
<div>
<table >
<thead>
	<tr>
	<th>ID</th>
	<th>Email</th>
	<th>Dr ID</th>
	<th>Qualification</th>
	<th>Clinic Address</th>
	<th>Clinic Time</th>
	</tr>
</thead>	
	<?php 
	include("connection.php");
	$result=mysqli_query($con,"SELECT * from doctorsign");
	while($row=mysqli_fetch_assoc($result))
	{
			
	?>
	
	<tr>
		<form action="updatesdoctor.php" method="post">
		<td ><input type="text" value="<?php echo $row['id'];?>" name="id" readonly> </td>
		
		
		<td><input type="text" value="<?php echo $row['email'];?>" name="email" ></td>
		<td><input type="text" value="<?php echo $row['nationalid'];?>" name="nationalid"></td>
		<td><input type="text" value="<?php echo $row['qualification'];?>" name="qualification"></td>
		<td><input type="text" value="<?php echo $row['clinicadress'];?>" name="clinicadress"></td>
		<td><input type="text" value="<?php echo $row['clinictime'];?>" name="clinictime"> </td>
		<td><input type="submit" name="submit" value="Edit"></td>
		
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