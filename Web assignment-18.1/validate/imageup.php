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
<form method="POST" action="imageup.php" enctype="multipart/form-data">
	<input type="file" name="image"><br><br>
	<button type="submit" name="submit" value="submit" class="btn btn-success">OK</button>
</form>
<?php
$img = $_FILES['image']['tmp_name'];
UploadImage($img);
function UploadImage($img)
{

}
?>
</body>
</html>