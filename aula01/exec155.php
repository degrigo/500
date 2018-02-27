<?php

echo "<pre>";

$var = 20;
var_dump($var);

$casting = (boolean) $var;
var_dump($casting);

$casting = (int) $var;
var_dump($casting);

$casting = (float) $var;
var_dump($casting);

$casting = (string) $var;
var_dump($casting);

$casting = (array) $var;
var_dump($casting);

$casting = (object) $var;
var_dump($casting);

$casting = (unset) $var;
var_dump($casting);