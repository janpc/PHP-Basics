<?php
$d = new DateTime();
echo 'Format Y-m-d: ' . $d->format('Y-m-d') . '<br>';

echo 'Format miliseconds since 1970: ' . $d->format('u') . '<br>';

echo 'Current day: ' . $d->format('D') . '. ' . $d->format('d'). '<br>';

echo 'Current month in numerical format: ' . $d->format('m') . '<br>';

echo 'Current minute with leading zeros: ' . $d->format('i') . '<br>';
?>