<?php
echo "Q1:<br><br>";
echo "Name: Hiroon Imalsha Wijekoon <br>";
echo "Batch:18.1 Plymouth";
echo "<br><br>Q2:<br><br>";
$a = 40;
$b = 20;

$sum = $a+$b;
$sub = $a-$b;
$div = $a/$b;
$mul = $a*$b;
echo "Sum : $sum <br>";
echo "Sub : $sub <br>";
echo "Mul : $mul<br>";
echo "Div : $div<br><br>";

echo "<br>Q3:<br><br>";
$arr = array(10,20,30,40);
for($x = 0;$x<4;$x++)
{
	echo "Index ".$x." : ".$arr[$x]."<br>";
}
echo "<br>";
if($arr[0]>$arr[1])
{
	echo "0th Index is greater than 1st Index";
}
else
{
	echo "1st Index is greater than 0th Index";
}
echo "<br>";

echo "<br>Q4:<br><br>";
?>