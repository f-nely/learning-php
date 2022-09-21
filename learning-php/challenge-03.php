<?php

/*
    Your Challenge
    Perform the following arithmetic operations in PHP and 
    store them in an array. Then output all of the result.
*/

$result = [];
$result[] = (14 + 82 - (32 / 2)) ** 2;
$result[] = 18 * ((3 / 6) - 9) * 10;
$result[] = 5 * ((12 / 2) - (8 * 4) + (12 * 6));

echo '<pre>';
print_r($result);
echo '</pre>';