<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hr> 
	1.Array_column
	<hr>
	<?php
    $name=array(
    	array(
    		'id'         =>'200',
    		'First_name' =>'250',
    		'last_name'  =>'300'


    	),
    	array(
    		'id'         =>'400',
    		'First_name' =>'225',
    		'last_name'  =>'350'


    	),
    	array(
    		'id'         =>'100',
    		'First_name' =>'450',
    		'last_name'  =>'700'


    	)



    );
    $firstname =array_column($name, 'First_name');

    print("<pre>");
    print_r($firstname);
    print("</pre>");




	?>

</body>
</html>