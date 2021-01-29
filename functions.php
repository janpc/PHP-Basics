<?php
echo 'It generates a function that given two numbers returns the sum of both: <br>';
function sum($a, $b){
    return $a + $b;
}
echo " 3 + 4 = ". sum(3,4);
echo'<br><br>';


echo 'It generates a function that given two numbers returns the multiplication of both: <br>';
function multiplication($a, $b){
    return $a * $b;
}
echo " 3 * 4 = ". multiplication(3,4);
echo'<br><br>';


echo 'It generates a function that given two numbers returns the division of both: <br>';
function division($a, $b){
    return $a / $b;
}
echo " 3 / 4 = ". division(3,4);
echo'<br><br>';


echo 'It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.: <br>';
function operate($a, $op, $b){
    switch($op){
        case '+':
            return sum($a, $b);
            break;
        case '*':
            return multiplication($a, $b);
            break;
        case '/':
            return division($a, $b);
            break;
        default:
            return '¿?';
            break;
        }
}
echo " 1 + 2 = ". operate(1, '+', 2);
echo'<br>';
echo " 6 * 2 = ". operate(6, '*', 2);
echo'<br>';
echo " 6 / 2 = ". operate(6, '/', 2);
echo'<br>';

?>

