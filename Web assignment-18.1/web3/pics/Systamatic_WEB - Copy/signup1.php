<<!DOCTYPE html>
<html>
<head>
<script>
function validation()
{

  var pw=document.forms["abcd"]["pw"].value;
  var cpw=document.forms["abcd"]["cpw"].value;

  if(pw!=cpw)
  {
    alert("passwords not matching please enter the password again");
    return false;
  }
}
  </script>
  </head>


<body>
<table border="0">
<form name="abcd" method="POST" action="signup1.php" onsubmit="return validation()">
<tr><td>User Name</td><td><input type="text" name="Uname" placeholder="User Name"></td></tr>
<tr>
<td> Password</td><td><input type="password" name="pw" placeholder="password"></td>
</tr>
<tr>
<td>Confirm Password</td><td><input type="password" name="cpw" placeholder="Confirm Password"></td>
</tr>

<tr>
<td><input type="submit" value="sign up"></td><td><input type="reset" value="cancel"></td>
</tr>
</form>
</table>
<?php
$UName =$_POST["Uname"];
$Pass =$_POST["pw"];
$Cpass =$_POST["cpw"];

$server = "localhost";
$username ="root";
$password = "";
$db="TuteDB";
  

    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con)
    {
      die("connection error".mysqli_connect_error());
    }

    echo("connected sucessfully<br>");
    $sql = "INSERT INTO LoginTable VALUES('$UName','$Pass','$Cpass')";

    if(mysqli_query($con,$sql))
    {
      echo "New Record Entered Sucessfully";
    }
    else
    {
      echo "Error:" .$sql ."<br>" . mysqli_error($con);
    }
    mysqli_close($con);
    ?>
    
  
</body>
</html>