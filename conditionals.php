<?php
$d = new DateTime();
$monday='We aren\'t on Monday';
if($d->format('D')=='Mon'){
    $monday='We are on Monday';
}
echo 'Create a simple condition that evaluates whether the current day is Monday: ' . $monday . ' <br><br> ';



echo 'Current month: ';
if($d->format('m')==10){
    echo 'We are on October <br> <br>';
}else{
    echo $d->format('M') . '<br><br>';
}

echo 'Double condition: ';
if($d->format('i')<10){
    echo "The current minute is less than 10.";
}else{
    if($d->format('i')>15){
        echo "The current minute  is more than 15.";
    }else{
        echo "Does not meet any conditions.";
    }
}
echo '<br> <br>';


echo 'Weekday with switch: ';

switch($d->format('N')){
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    case 7:
        echo 'Sunday';
        break;
    default:
        echo 'WTF?';
        break;
}
?>