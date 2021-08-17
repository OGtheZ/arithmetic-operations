<?php

$lowerBound = 5;
$higherBound = 50;

$sum = array_sum(range($lowerBound, $higherBound));
$average = $sum/count(range($lowerBound, $higherBound));

echo "The sum of $lowerBound to $higherBound is $sum" . PHP_EOL;
echo "The average is $average" . PHP_EOL;