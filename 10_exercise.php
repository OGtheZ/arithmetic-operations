<?php

class GeometryClass
{
    public function circleArea($r)
    {
        if ($r < 0)
        {
            return  "error";
        }
        else
        {
            return M_PI * $r * $r;
        }
    }
    public function rectangleArea($length, $width)
    {
        if ($length < 0 || $width < 0)
        {
            return "error";
        }
        else {
            return $length * $width;
        }
    }
    public function triangleArea($base, $height)
    {
        if ($base <0 || $height < 0)
        {
            return "error";
        }
        else
        {
            return $base * $height * 0.5;
        }
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle" . PHP_EOL;
echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
echo "3. Calculate the Area of a Triangle" . PHP_EOL;
echo "4. Quit\n";
$selection = readline("Enter your choice (1-4): ");
$x = new GeometryClass();
if ($selection < 1 || $selection > 4)
    {
        echo "error" . PHP_EOL;
    }
else if ($selection === '1')
{
    $r = readline("Enter the radius :");
    echo "The radius is of the circle is : " . $x->circleArea($r) . PHP_EOL;
}
else if ($selection === '2')
{
    $length = readline("Enter the length: ");
    $width = readline("Enter the width: ");
    echo "The area is of the rectangle is:  " . $x->rectangleArea($length, $width) . PHP_EOL;
}
else if ($selection === '3')
{
    $base = readline("Enter the base of the triangle :");
    $height = readline("Enter the height of the triangle :");
    echo "The triangle's area is : " . $x->triangleArea($base, $height) . PHP_EOL;
}
