<?php

/*
    What are loops?

    Loops
    Execute a piece of code until some condition become false.

    All loops should have
    - A true/false condition.
    - A statement that moves that codition toward becoming false.

    Infinite loops
    Loops that never terminate but will crash your website/application.
*/

$colors = ['red', 'blue', 'green', 'yellow'];
for ($i = 0; $i < sizeof($colors); $i++) {
    echo "<p>$colors[$i]</p>";
}