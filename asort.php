<html>
<?php
echo "SHUBHAM<br>";
$x = array("hello"=>"35","class"=>"12","rollno"=>"8");
asort($x);
foreach($x as $y => $y_values)
{
	echo "key=".$y.",value=".$y_values;
	echo "<br>";
}
?>
</html>