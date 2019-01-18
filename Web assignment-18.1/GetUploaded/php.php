<?php 
$imgname = $_FILES['image']['name'];
$imgsize = $_FILES['image']['size'];
$imgtype = $_FILES['image']['type'];
$temp_path  = $_FILES['image']['tmp_name'];
echo "$imgname <br>";
echo "$imgsize <br>";
echo "$imgtype <br>";
$fp = fopen($temp_path,"r");
while (!feof($fp)) 
{
	$text = fgets($fp);
	echo "$text <br>";
}
fclose($fp);
?>