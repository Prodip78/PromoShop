<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr>
	    1.GLOBALS
	<hr>
	<?php
	$x=5;
	$y=5;
	function sum(){
		$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	}
	sum();
	echo $z;
	?>
	<hr>
	2.SERVER
	<hr>
	<?php
	echo $_SERVER['HTTP_USER_AGENT'];
	?>
	<hr>
	2.REQUEST
	<hr>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
		Username:<input type="text" name="username">
		<input type="submit" value="submit">
		
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] =="POST"){
		$name=$_REQUEST['username'];
		if (empty($name)) {
			echo "<span style='color:red'>User field must not be empty!!</span>";
		}else{
			echo "<span style='color:green'>you are submitted:".$name."</span>";
		}
	}

	?>
	<hr>
	3.GET
	<hr>
	<a href="text.php?msg=Good&text=Bye">sent data</a>


</body>
</html>