<?php
$num0 = 10;

echo $num0++;
#postinc prints = 10
echo '<br>';

print("$num0");
#but returns = 11 on post-call
echo '<br>';

$num0 = 10;
echo ++$num0;
#preinc prints incremented = 11
echo '<br>';


$num0 = 10;

echo $num0--;
#postinc prints = 10
echo '<br>';

print("$num0");
#but returns = 11 on post-call
echo '<br>';

$num0 = 10;
echo --$num0;
#preinc prints incremented = 11
echo '<br>';
