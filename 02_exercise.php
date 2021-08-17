<?php

function checkOddEven(int $a)
{
    if ($a %2 === 0)
    {
        echo "Even number" . PHP_EOL;
    }else
    {
        echo "Odd number" . PHP_EOL;
    }
    echo "bye!" . PHP_EOL;
    exit;
};

echo checkOddEven(7);