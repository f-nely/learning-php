<?php

function math($n1, $n2 = 2, $op = 'multiply')
{
    if ('add' == $op) {
        return $n1 + $n2;
    } else if ('sub' == $op) {
        return $n1 - $n2;
    } else if ('divide' == $op) {
        return $n1 / $n2;
    } 

    return $n1 * $n2;
}

echo math(4, op:'add', n2: 12);

