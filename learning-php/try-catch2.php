<?php

// Must return positive integer
// Try/catch statements update for PHP 8.0
function multiply(int $n1, int $n2)
{
    return (($n1 * $n2) > 0) ? $n1 * $n2 : throw new Exception('The result is not positive.');
}

try {
    echo multiply(-3, 4);
} catch (Exception $e) {
    echo $e->getMessage();
}