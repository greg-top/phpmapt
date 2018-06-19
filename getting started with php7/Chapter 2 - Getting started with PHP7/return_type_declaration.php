<?php

#declare strict mode
declare ( strict_types=1 );

//specify return type declaration in PHP7
function sum( float $number1, float $number2 ): float {
    return $number1 + $number2;
}

//specify return type declaration in PHP7
function divide( float $number1, float $number2 ): int {
    return $number1 / $number2;
}

$result = sum( 2.5, 5 );
var_dump($result);

$result = divide( 2.5, 5 );
var_dump($result); //output will be 0 as we specified return type declaration to INT, float result 0.5 will be turned to INT 0. In Strict mode set in line 4 this line will output fatal error