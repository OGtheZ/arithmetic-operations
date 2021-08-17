<?php

function acceleration(int $t)
{
    $a = -9.81;
    $vi = 0;
    $xi = 0;

    return 0.5 * ($a * $t**2) + ($vi * $t) + $xi;
    }
echo acceleration(10);
