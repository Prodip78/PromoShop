<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr>
	1.indexed array
	<hr>
	<?php
	$car =array("volvo","BMW","toyota");
	$length =count($car);
	for ($i=0; $i <$length; $i++) { 
		echo $car[$i]."<br>";
	}

	?>
	<hr>
	2.Associative array
	<hr>
	<?php
	$age=array("Tonmoy"=>"24","Nishat"=>"25","Imtiaz"=>"26");

	foreach ($age as $key => $value) {
		echo "name =".$key.",age =". $value."<br>";
	}


	?>
	<hr>
	3.Multidimensional array
	<hr>
	<?php
   $car =array(
   	array("Volvo","100","200"),
   		array("BMW","200","250"),
   			array("Toyota","300","150")

);
  echo $car[2][2];
    


	?>

</body>
</html>