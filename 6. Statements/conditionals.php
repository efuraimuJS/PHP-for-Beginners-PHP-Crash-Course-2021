<?php
/*if elseif else*/

$age = '';
if ($age > 17) {
    print('you\'re able to vote');
} elseif ($age < 18) {
    print('you \'re not able to vote');
} else {
    print('IDK');
}

echo '<br>';
/*switch*/

$DAYOFWEEK = 'monday';

switch ($DAYOFWEEK) {
    case 'monday':
        print('day1');
        break;
    default:
        print('enter good day');
        break;
}
