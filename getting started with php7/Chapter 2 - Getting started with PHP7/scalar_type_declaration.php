<?php

#declare strict mode for Scalar Type Declaration
declare( strict_types = 1 );

function sendMoney( int $a ) {
    var_dump($a);
}


#use function with correct integer argument
sendMoney(100);

#below will trow a fatal error
//sendMoney('Hello');

#example with Boolean value
sendMoney(true); //scalar type declaration works in coercive mode as default - convert the value if possible. If strict mode is declared in line 4 this example will output fatal error


