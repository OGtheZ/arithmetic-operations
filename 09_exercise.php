<?php

function BMI($weight, $height): string
{
    $weightInLbs = $weight * 2.20462262;
    $heightInInches = $height * 0.393700787;
    $bmi = ($weightInLbs * 703) / ($heightInInches**2);
    if ($bmi < 18.5)
    {
        return "The person is underweight";
    }
    else if($bmi >18.5 && $bmi < 25)
    {
        return "The person's weight is optimal";
    }
    else{
        return "The person is overweight";
    }
};

echo BMI(50, 180) . PHP_EOL;