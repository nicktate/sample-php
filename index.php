<?php
require __DIR__ . '/vendor/autoload.php';

header('Content-Type: text/plain');

$megabyte = 512; // define the max megabytes which should be tested

function tryAlloc($megabyte){
    echo "Trying to allocating {$megabyte} megabyte...";
    $mb = $megabyte;
    $dummy = str_repeat("-",1048576*$mb);
    echo "pass.";
    echo "Usage: " . memory_get_usage(true)/1048576;
    echo " Peak: " . memory_get_peak_usage(true)/1048576;
    echo "\n";
}

for($i=10;$i<=$megabyte;$i+=10){
    tryAlloc($i-1);
}
