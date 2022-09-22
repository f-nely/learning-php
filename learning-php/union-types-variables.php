<?php

function double(float|int $a): float|int
{
    return $a * 2;
}

echo double(3.4);