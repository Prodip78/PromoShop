<?php

function numcheck($num){
	if ($num !=5) {
		throw new Exception("number is not 5");
		
	}
	return true;

}
try{
	numcheck(5);
	echo "yes you have done it";
}
catch (exeception $e){
echo "Error:".$e->getmassage();
}
?>