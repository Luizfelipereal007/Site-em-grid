<?php

$filename = __DIR__ . "/../.env";
$envsParsed = [];

$envs = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

array_map(function ($env) use (&$envsParsed) { 
    list($key, $value) = explode("=", $env);

    $envsParsed[$key] = $value;
}, $envs);

define("APP_CONSTANTS", $envsParsed);
