<?php

require_once 'example-func.php';
require 'example-var.php';

/*
    Server Side Includes

    A way of including multiple files in a single PHP file,
    before it's sent to the browser.

    There's only one HTTP request!

    Benefits
    - Break up large sections of code: you can put your classes 
    in separate files. group functions together, and more.
    - Keep output files separate from processing files.
    - Organize your website into different files, taking the 
    reusable parts and templatizing them.

    include '';
    include_once '';
    require '';
    require_once '';
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <?php echo para_print($description); ?>
    <small>By: <?php echo $author; ?></small>
</body>
</html>