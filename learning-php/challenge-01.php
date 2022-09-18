<?php

    $name = 'Teresa'; // Heading 1
    $city = 'NYC';
    $movie = 'Star Wars'; // Italics
    $friend = 'George'; // Bold
    $candy = 'Sour Patch Kids';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $name;?>!</h1>
    
    <?php echo "<p>So glad you can join us in {$city} today! You will be <b>{$friend}</b>'s guide as you do a range of actitivies.</p>"; ?> 
    
    <?php echo "<p>You will end your day by seeing <i>{$movie}</i> at 7:00 pm. Make sure to bring the money you've been provided. The movie ticket is \$12. $friend's favorite candy is $candy, so grab some of those too.</p>"; ?>
    
    <?php echo "<p>...and of-course, \"May the Force be with You!\"</p>"; ?>
</body>
</html>