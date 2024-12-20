<?php
$name = ['Linto','Vaseem','Roshama','Nihuma','Ayushma','Jaseem'];
$t=$name;
echo "Displaying using print_r <br>";
print_r($name);
echo "<br> Sorting using asort() <br>";
asort($name);
print_r($name);
echo "<br> Sorting using asort <br>";
arsort($t);
print_r($t);
?>
