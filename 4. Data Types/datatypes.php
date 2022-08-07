<?php
/*
    integer
    floats
    booleans
    strings
    null
    */
$num = 4;

var_dump($num);

echo gettype($num);
#int(4) integer

echo '<br>';

$floats = 4.444;

var_dump($floats);

echo gettype($floats);
#float(4.444) double

echo '<br>';

$bool = true;

var_dump($bool);

echo gettype($bool);
#bool(true) boolean

echo '<br>';

$str = 'true';

var_dump($str);

echo gettype($str);
#string(4) "true" string

echo '<br>';
$varNull = 'NULL!';

$varNull = NULL;

var_dump($varNull);

echo gettype($varNull);
#NULL NULL
