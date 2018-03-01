<?php

$a = true;
$b = false;

echo "<pre>";

// And
var_dump($a and $b);
var_dump($a && $b);
echo "<hr>";

// Or
var_dump($a or $b);
var_dump($a || $b);
echo "<hr>";

// Xor
var_dump($a xor $a);
var_dump($a xor $b);
var_dump($b xor $b);
echo "<hr>";

// Negação
var_dump(!$a);
var_dump(!$b);
echo "<hr>";