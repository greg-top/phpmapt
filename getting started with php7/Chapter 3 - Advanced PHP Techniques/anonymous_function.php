<?php

#example of regular function
function hello()
{
    echo "Hello";
}

hello();

# Anonymous functions

# assign to variable -> reuse this variable to return result is necessary
$hello = function ()
{
    echo "Hello" . "<br>";
};

# via function
function printMessage( $function )
{
    $function();
}

//usage of anonymous function
printMessage( function () {
    echo "Hello" . "<br>";
} );

#CLOSURE

$counter = 0;

// pass $counter here
$closure = function () use ( $counter ) {
    return ++$counter;
};

echo $closure();
echo $counter; // value 0, use one counter for all functions and loops

//secret option to allow modify original value - put ampersand & to $counter variable
#$closure = function () use ( &$counter )

#CALLBACK in array functions

$scores = [20, 35, 50, 76, 98, 100];

$result = array_filter( $scores, function( $score ) {
    return $score > 50;
} );

print_r($result);