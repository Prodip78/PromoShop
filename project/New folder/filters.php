<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
$str="<h2>I am learning php.</h2> ";
$newstr=filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;

?>
<hr/>

<?php
$ip ="127.0.0.1";
if (filter_var($ip,FILTER_VALIDATE_IP)) {
	echo "$ip is valid ip address";
}else{
	echo "$ip is not valid ip address";
}

?>

</body>
</html>