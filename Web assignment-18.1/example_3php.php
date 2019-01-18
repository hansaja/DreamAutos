<?php
$fname = $_FILES['myfile']['name'];
$ftype = $_FILES['myfile']['type'];
$fsize = $_FILES['myfile']['size'];
echo "$fname $ftype $fsize";
?>