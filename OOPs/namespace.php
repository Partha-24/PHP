<?php

require './OOPs/classes.php';
require './OOPs/constant.php';

$apple = new classes\fruit();
$banana = new classes\fruit();

$apple->setName('Apple');
$banana->setName('Banana');

echo "a for ".$apple->getName('Apple')."\n";
echo "b for ".$banana->getName('Banana')."\n";