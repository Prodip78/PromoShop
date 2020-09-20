<?php
$ch=array('a','b','c','d','e');
print("<pre>");
print_r(array_chunk($ch, 2));
print_r(array_chunk($ch, 2,true));
print("</pre>");

?>