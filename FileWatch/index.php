<?php

$path = $argv[1];
$currentTime = filemtime($path);

var_dump($path);
var_dump($currentTime);