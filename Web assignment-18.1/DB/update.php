<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$cnfrmpwd = $_POST["cnfrmpwd"];

$server = "localhost";
$username = "root";
$password = "";
$db = "TuteDB";

$conn = mysqli_connect($server,$username,$password,$db);

if (!$conn) 
{
	die("Connection Error".mysqli_connect_error());
}
echo ("<font color='green'>Connected!</font><br>");

$sql = "UPDATE LoginTable SET password='$pwd' , confirm_password='$cnfrmpwd' WHERE user_name='$uname'";

if (mysqli_query($conn,$sql)) 
{
	echo "Record Updated!<br>";
}
else
{
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>