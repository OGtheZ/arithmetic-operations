<?php

function weeklySalary($basePay, $hoursWorked)
{
    if ($basePay < 8 || $hoursWorked > 60)
    {
        return "Error";
    }
    else if($hoursWorked > 40)
    {
        return $basePay * 40 + (($hoursWorked - 40) * ($basePay * 1.5));
    }
    else
    {
        return $basePay * $hoursWorked;
    }
};

echo weeklySalary(8.20, 47) . PHP_EOL;
echo weeklySalary(7.50, 35) . PHP_EOL;
echo weeklySalary(10, 73) . PHP_EOL;