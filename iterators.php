<?php
for($i=0; $i<5; $i++){
    echo $i;
}
echo ' // ';

$animals=['dog', 'cat', 'snake'];
foreach($animals as $animal){
    echo $animal.' ';
}
echo ' // ';

$a=0;
while($a<5){
    echo $a;
    $a++;
}
echo ' // ';

$a=0;
do{
    echo $a;
    $a++;
}while($a<5);
echo ' // ';
?>