<?php

echo"Today is " .date("d/m/Y")."</br>";

echo"Today is " .date("l")."</br>";

echo"Default tmie is " .date("h:i:sa")."</br>";
date_default_timezone_set('Asia/Dhaka');

echo"Bangladeshi time is " .date("h:i:sa")."</br>";
?>