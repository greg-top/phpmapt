<?php

$i = 0;

while( $i < 3 ) {
    echo "ha";
    $i++;
}

//recursive function

function hahaRecursive( $i ) {
    if ( $i ===  3 ) {
        return;
    }

    return 'ha' . hahaRecursive(++$i);
}

echo hahaRecursive(0);

function factorialRecursive( $number ) {
    if ($number === 1) {
        return 1;
    }

    return $number * factorialRecursive($number -1);
}

echo factorialRecursive(5);