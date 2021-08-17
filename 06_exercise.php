<?php
$maxNumber = 110;
for($i = 1; $i<=10; $i++)
{
    for($i = 1; $i<=$maxNumber; $i++)
    {
       switch ($i)
       {
           case $i % 11 === 0 && $i % 3 === 0:
               echo "Coza " . PHP_EOL;
               break;
           case $i % 11 === 0 && $i % 5 === 0:
               echo "Loza " . PHP_EOL;
               break;
           case $i % 11 === 0 && $i % 7 === 0:
               echo "Woza " . PHP_EOL;
               break;
           case $i % 11 === 0:
               echo $i . PHP_EOL;
               break;
           case $i % 3 === 0 && $i % 5 === 0:
               echo "CozaLoza ";
               break;
           case $i % 3 === 0 && $i % 7 === 0:
               echo "CozaWoza ";
               break;
           case $i % 5 === 0 && $i % 7 === 0:
               echo "LozaWoza ";
               break;
           case $i % 3 === 0:
               echo "Coza ";
               break;
           case $i % 5 === 0:
               echo "Loza ";
               break;
           case $i % 7 === 0:
               echo "Woza ";
               break;
           default:
               echo "$i ";
       }
    }
}