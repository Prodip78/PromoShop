<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr>
	1.Arithmatics Operator
	<hr>
	<?php
	$x=10;
	$y=5;
	$z=$x/$y;
	echo $z;
	?>
	<hr>
	2.Assignment operator
	<hr>
	<?php
	$x=100;
	$x-=10;
	echo $x;
	?>
	<hr>
	3.Comparison operator
	<hr>
	<?php
	$x=100;
	$y="100";
	var_dump($x!==$y);
	?>
	<hr>
	4.Increment/Decrement operator
	<hr>
	<?php
	$x =10;
	echo $x--;
	?>
	<hr>
	5.Logical operator
	<hr>
	<?php
	$x=100;
	$y=50;
	if ($x==100 xor $y==80) {
		echo "prodip is a boss";
	}

	?>
	<hr>
	6.String operator
	<hr>
	<?php
	$x="I am a";
	$y="honest person";
	echo $x.=$y;

	?>
	<hr>
	7.Array operator
	<hr>
	<?php
	$x=array("a"=>"red","b"=>"green");
	$y=array("c"=>"black","d"=>"white");
	print("<pre>");
	var_dump($x==$y);
	print("</pre>");

	?>

</body>
</html>