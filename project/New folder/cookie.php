<?php




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	if (!isset($_COOKIE['visited'])) {

		setcookie("visited","1",time()+86400,"/") or die("could not set cookie!");
		echo "this is your first visit in this website.";

	}else{

		echo "you are old visitor.";
	}



	?>

</body>
</html>