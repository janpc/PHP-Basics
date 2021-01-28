<?php
$boolean=true;
echo 'Boolean: ' . $boolean . '<br><br>';
$integer=1;
echo 'Integer: ' . $integer . '<br><br>';
$float=1.1;
echo 'Float: ' . $float . '<br><br>';
$string='string';
echo 'String: ' . $string . '<br><br>';
$array=array([1,2,3]);
echo 'Array: ' . var_dump($array) . '<br><br>';
$object = new stdClass();
$object->property = 'Object';
echo 'Object: ' . var_dump($object)  . '<br><br>';
$null=null;
echo 'Null: ' . $null  . '<br><br>';
?>