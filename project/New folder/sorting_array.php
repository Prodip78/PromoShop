<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr>
1.Alphabetical order
<hr>
<?php
$names=array("Alamin","Shakil","Nishat","Badol","Tonmoy");
sort($names);
$length=count($names);
for ($i=0; $i <$length ; $i++) { 
	echo $names[$i];
	echo "<br/>";
}

?>
</body>
</html>