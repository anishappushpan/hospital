<!----------------doctor signup page or registration----------->
<!doctype html>
<html>
<head>
<title>
sign up page
</title>
<link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<body>
<script>
function validate_form()
{
var x=document.forms['myform']['name'].value
var y=document.forms['myform']['email'].value
var w=document.forms['myform']['password'].value
var z=document.forms['myform']['department'].value
var a=document.forms['myform']['nationalid'].value
if(x=="" ||y=="" ||w=="" ||z=="" ||a=="" )
{
		alert("fill the fields");
}	
}
function validate_form()
{
	var str=document.forms["myform"]["password"].value
	if(str.length<6)
	{

			alert("password is too short");
			return false;
	}
	return true;
}
</script>
</head>

<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
			<form action="insertsignupdr.php" method="post" class="m-auto py-1 text-light p-3 form-style rounded" onsubmit="return validate_form()" name="myform" role="form">
			<h3 div class="text-center text-dark">Sign Up</h3>
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="name" placeholder="Name">
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="department" placeholder="Department">
			<input type="email" class="form-control inputcomponent mt-md-3 space" name="email" placeholder="Email-ID or Mobile Number">
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="nationalid" placeholder="National-id">
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="qualification" placeholder="qualification">
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="certificateno" placeholder="certificate_number">
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="clinicadress" placeholder="clinic-address">
			<input type="text" class="form-control inputcomponent mt-md-3 space" name="clinictime" placeholder="clinic-time">
			<input type="password" class="form-control inputcomponent mt-md-3 space" name="password" placeholder="Enter Password">
			
			
			<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Register</button>
			</form>
		</div>
	</div>
</div>	
</body>
</html>