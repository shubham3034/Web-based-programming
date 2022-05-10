<html>
<?php
echo "SHUBHAM<br>";
$x = array("hello"=>"35","Phn."=>"78","rollno"=>"8");
arsort($x);
foreach($x as $y => $y_values)
{
	echo "key=".$y.",value=".$y_values;
	echo "<br>";
}
?>
</html>