<?php

$total = 10;

switch ($total) {
    case 1:
        echo "<p>{$total} is 1</p>";
        break;
    case 2:
        echo "<p>{$total} is 2</p>";
        break;
    case 3:
        echo "<p>{$total} is 3</p>";
        break;
    default:
        echo "<p>{$total} is more than 3</p>";
}

$turtle = 'Leo';
$bandana = '';
switch ($turtle) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'orange';
        break;
    case 'Don':
        $bandana = 'purple';
        break;
}

echo "<p>$bandana</p>";