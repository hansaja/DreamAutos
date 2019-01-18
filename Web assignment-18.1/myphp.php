<?php
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$cnfrmpwd = $_POST["cnfrmpwd"];
if($pwd==$cnfrmpwd)
{
	alert("Passwords Match!");
}
else
{
	alert("Passwords don't match");
}
?>
