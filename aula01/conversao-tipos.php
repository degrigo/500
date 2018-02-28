<?php

// Type Casting

echo "<pre>";

$var = 10;
var_dump($var);

$cast = (boolean) $var;
var_dump($cast);

$cast = (int) $var;
var_dump($cast);

$cast = (float) $var;
var_dump($cast);

$cast = (string) $var;
var_dump($cast);

$cast = (array) $var;
var_dump($cast);

$cast = (object) $var;
var_dump($cast);

$cast = (unset) $var;
var_dump($cast);