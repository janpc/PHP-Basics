<?php
$abs = abs(-42.3);
echo '|-42.3| = ' . $abs . '<br><br>';

$roundUp = round(9.5, 0, PHP_ROUND_HALF_UP);
echo 'Round up 9.5 = ' . $roundUp . '<br><br>';

$max= max([1,2,5,8,23,4,68,3]);
echo 'Highest value in [1,2,5,8,23,4,68,3] = ' . $max . '<br><br>';

$min= min([1,2,5,8,23,4,68,3]);
echo 'Lowest value in [1,2,5,8,23,4,68,3] = ' . $min . '<br><br>';

$rand = rand();
echo 'Random number = ' . $rand . '<br><br>';
?>