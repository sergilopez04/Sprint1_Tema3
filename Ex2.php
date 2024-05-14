<?php
$X = array (10, 20, 30, 40, 50,60);
echo count($X).PHP_EOL;

// si fuera con unset usaría array_values($X)
array_splice($X, 3, 1);
echo count($X).PHP_EOL;
var_dump($X).PHP_EOL;

?>