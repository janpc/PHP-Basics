<?php

echo "Define a simple array composed of text strings: <br>";
$array = ['Hola', ' ', 'mundo', '.'];
echo var_dump($array);
echo "<br><br>";

echo "Define a simple array consisting of whole numbers and decimal numbers: <br>";
$array = [1, 1.1, 2, 2.1, 3, 3.1];
echo var_dump($array);
echo "<br><br>";

echo "Define a multidimensional array: <br>";
$array = [[1, 1.1], [2, 2.1], [3, 3.1]];
echo var_dump($array);
echo "<br><br>";

echo "Execute the function that allows to obtain the length of an array: <br>";
$array = ['Hola', ' ', 'mundo', '.'];
echo var_dump($array) . '<br>';
echo 'Length: ' . count($array);
echo "<br><br>";

echo "Execute the function that allows to obtain the combination of two arrays: <br>";
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array = array_merge($array1, $array2);
echo 'Array1: <br>';
echo var_dump($array1) . '<br>';
echo 'Array2: <br>';
echo var_dump($array2) . '<br>';
echo 'combination: <br>';
echo var_dump($array) . '<br>';
echo "<br><br>";

echo "Execute the function that once is given an array return the last element of it: <br>";
$last = end($array);
echo var_dump($array) . '<br>';
echo "Last: $last";
echo "<br><br>";

echo "Execute the function that once is given an array add a new element to the array in question: <br>";
echo var_dump($array) . '<br>';
array_push($array, 0);
echo var_dump($array) . '<br>';

?>