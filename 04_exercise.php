<?php

$number = 10;
$start= 1;

for($i=$start; $i<=$number;$i++)
{
    $start *= $i;
}

echo $start;
