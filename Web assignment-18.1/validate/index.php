<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Validation</title>
	<style type="text/css">
		body
		{
			padding: 10px 10px;
		}
	</style>
</head>
<body>
<form method="POST" action="index.php">
	<label>Name:</label>
	<input type="text" name="name"><br><br>
	<label>Age:</label>
	<input type="text" name="age"><br><br>
	<button type="submit" class="btn btn-success">OK</button>
	<button type="Reset" class="btn btn-warning">Reset</button>
</form>

<?php
if(isset($_POST['name'])&&($_POST['age']))
{
	$uname = $_POST['name'];
	$age = $_POST['age'];
	if($age>=0)
	{
		echo "$uname , $age";
	}
	else
	{
		echo "Invalid Age";
	}
	
}
else
{
	echo "Fill All Textboxes";
}
?>
</body>
</html>