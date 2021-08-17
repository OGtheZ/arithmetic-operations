<?php

$x = rand(1, 100);

$number = readline("I'm thinking of a number between 1-100. try to guess it. ");
if($number === $x)
{
    echo "You guessed it! What are the odds?!?" . PHP_EOL;
}
elseif($number < $x)
{
    echo "Sorry, you are too low. I was thinking of $x" . PHP_EOL;
}
elseif($number > $x)
{
    echo "Sorry, you are too high. I was thinking of $x" . PHP_EOL;
}
exit;