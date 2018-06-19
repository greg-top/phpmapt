<?php

$scores = [ 80, 30, 90, 70  ];

//sort an array with custom sorting function ASC
usort( $scores, function ( $score1, $score2 ) {
    if ( $score1 === $score2 ) {
        return 0;
    }

    return $score1 < $score2 ? -1 : 1;
    #return $score2 < $score1 ? -1 : 1; //DESC way
} );

var_dump( $scores );

#Spaceship operator in action
// Integers
echo 'integers <br>';
echo (1 <=> 1) . '<br>'; //0
echo (1 <=> 2) . '<br>'; //-1
echo (2 <=> 1) . '<br>'; //1

//Floats
echo 'floats <br>';
echo (1.5 <=> 1.5) . '<br>'; //0
echo (1.5 <=> 2.5) . '<br>'; //-1
echo (1.5 <=> 0.5) . '<br>'; //1

//Strings
echo 'strings <br>';
echo ("a" <=> "a") . '<br>'; //0
echo ("a" <=> "b") . '<br>'; //-1
echo ("ab" <=> "ac") . '<br>'; //-1
echo ("abc" <=> "abz") . '<br>'; //-1
echo ("b" <=> "a") . '<br>'; //1
echo ("az" <=> "ac") . '<br>'; //1

//Arrays
echo 'arrays <br>';
echo ([1,2,3] <=> [1,2,3]) . '<br>'; //0
echo ([1,1,3] <=> [1,2,3]) . '<br>'; //-1
echo ([1,2,3] <=> [1,2,3]) . '<br>'; //1

$scores = [ 80, 30, 90, 70  ];

//sort an array with custom sorting function ASC
usort( $scores, function ( $score1, $score2 ) {
    return $score1 <=> $score2; //use spaceship operator in sorting function
    #return $score2 <=> $score1; //DESC way
} );

var_dump( $scores );