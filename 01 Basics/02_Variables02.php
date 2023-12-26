<?php 
// php variable is mutable because it can be change
$task = "Read";
echo $task;
echo "\n";
$task = "Write";
echo $task;
echo "\n";

define("PI", 3.1416);
echo "Value of PI is ".PI;
echo "\n";
echo constant("PI");
echo "\n";
$constant = "constant";
echo "Value of PI = {$constant('PI')}";
?>
