<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php
$intnum=200;
$min   =1;
$max   =200;

if (filter_var($intnum,FILTER_VALIDATE_INT,array ("options"=>array ("min_range"=>$min,"max_range"=>$max)))) {
	echo "this is valid";
}else{
	echo "its not valid";
}


?>
</body>
</html>