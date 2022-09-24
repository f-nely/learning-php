<?php

// Must return positive integer
function multiply(int $n1, int $n2)
{
    $result = $n1 * $n2;
    if ($result < 0) {
        throw new Exception('The result is not positive.');
    } else {
        return $result;
    }
}

try {
    echo multiply(-5, 4);
} catch (Exception $e) {
    echo $e->getMessage();
}