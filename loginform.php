<!DOCTYPE html>
<html>
<head>
	<title>signupform</title>
	<style>
	body

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing:20px; 

}
input[type=Username], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing:20px; 

}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing:20px; 

}
input[type=E-mail], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing:20px; 

}

input[type=reset] {
    width: 100%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #45a049;
}
table {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px;
}
</style>

</head>
<body>

	<br>
<form>


	<center>
		<h1><b>Signup Form</b></h1>
	<table>
		<tr>
	<td>Username:</td><td><input type="Username" value="" placeholder="Enter username"></td>

	<tr>
	<td>password:</td><td><input type="password" value="" placeholder="Enter password"></td>

	<tr>
	<td>Email:</td><td><input type="E-mail" value="" placeholder="Enter E-mail"></td>
	<tr>
	<td>Contact Number:</td><td><input type="text" value="" placeholder="Enter contact number"></td>
	<tr>
		<td colspan="2"><input type="checkbox" name="" value="">I agree terms and conditions</td>
		<tr>

         <td><input type="submit"value="submit"></td>
          <td><input type="Reset"value="Cancel"></td>
    </table>
</center>

</form>

<?php



?>
</body>
</html>