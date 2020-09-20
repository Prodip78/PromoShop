<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$name =array("Prodip","Nishat","Tonmoy","Imtiaz");
	$Department =array("Computer science","maths","Physics","English");
	$combine =array_combine($name, $Department);
	print ("<pre>");
	print_r($combine);
	print ("</pre>");
	?>

</body>
</html>