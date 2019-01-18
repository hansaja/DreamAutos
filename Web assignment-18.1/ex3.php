<?php
$name = $_POST["name"];
$comment = $_POST["comment"];
$email = $_POST["email"];
echo "
<table border='1'>
<tr>
<td>Name</td>
<td>$name</td>
</tr>
<tr>
<td>Email</td>
<td>$email</td>
</tr>
<tr>
<td>Comment</td>
<td>$comment</td>
</tr>
</table>"
?>