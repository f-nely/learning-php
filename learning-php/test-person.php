<?php

require_once 'Person.php';

$joe = new Person('Joe', 35);
$rob = new Person('Rob', 30);

echo $joe->getName() . '<br>';
echo $rob->getName() . '<br>';

$joe->setBirthday(true);
echo $joe->getAge();