<?php
/*Types: indexed*/

$arrayName = array('jane', 'syliva');
$arrayName = ['jane', 'syliva'];

print("$arrayName[1]");

echo '<br>';
/*Types: associative*/
$userGroups = ['01G9TKJP1PJM5QF3FX0S09XED3' => 'jane', '01G9TKJP1PJM5QF3FX0S09XED4' => 'john'];
print($userGroups["01G9TKJP1PJM5QF3FX0S09XED3"]);

foreach ($userGroups as $key => $value) {
    print("userId: $key for $value");
    echo '<br>';
}

/*Types:multiDim*/
