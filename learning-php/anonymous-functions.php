<?php

/*
    Anonymous Functions

    Functions that don't get a name, and are created at
    runtime to perform a specific task.

    Also called 'closures' or 'callback functions'
 */

 $names = ['Joe', 'Erin', 'Teresa', 'Louis'];
 usort($names, function($a, $b){
    return $a[1] <=> $b[1];
 });

 echo '<pre>';
 print_r($names);
 echo '</pre>';