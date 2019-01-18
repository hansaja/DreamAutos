<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Signup</title>
	<style type="text/css">
		body
		{
			padding: 10px 10px;
		}
	</style>
	<script type="text/javascript">
		function validate()
		{
		var uname = document.getElementById("uname").value;
		var pwd = document.getElementById("pwd").value;
		var cnfrmpwd = document.getElementById("cnfrmpwd").value;
		if(uname==null || uname=="" || pwd==null || pwd=="" || cnfrmpwd==null || cnfrmpwd=="")
		{
			alert("Enter All Fields");
			return false;
		}
		else
		{
			if (pwd!=cnfrmpwd) 
			{
				alert("Passwords don't match");
				return false;
			}
		}
	}
	</script>
</head>
<body>
	<h1 align="center">Signup</h1><br>
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="well">
			<form action="delete.php" method="POST" onsubmit ="return validate()">
				<div class="row">
					<div class="col-sm-5"><label>User Name:</label></div>
					<div class="col-sm-7"><input type="text" id="uname" name="uname" class="form-control" placeholder="Enter Username"></div>
				</div><br>
				<div class="row">
					<div class="col-sm-5"><label>Passowrd:</label></div>
					<div class="col-sm-7"><input type="password" id="pwd" name="pwd" class="form-control" placeholder="Enter Password"></div>
				</div><br>
				<div class="row">
					<div class="col-sm-5"><label>Confirm Passowrd:</label></div>
					<div class="col-sm-7"><input type="password" id="cnfrmpwd" name="cnfrmpwd" class="form-control" placeholder="Enter Password Again"></div>
				</div><br>
				<div class="row">
					<div class="col-sm-6"><center><button type="reset" class="btn btn-danger btn-block" >Reset</button></center></div>
					<div class="col-sm-6"><center><button type="submit"  class="btn btn-success btn-block" class="form-control">Submit</button></center></div>
			</form>
			</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</body>
</html>
