<?php

try {
    throw new Exception("hello old man", 1001);
} catch (Exception $exception) {
    echo $exception->getMessage();
    echo PHP_EOL;
    echo $exception->getCode();
}

echo 'over ';
echo PHP_EOL;
$usage = memory_get_peak_usage(true);
var_dump($usage, $usage/1024/1024);

echo PHP_EOL;
var_dump(realpath_cache_size());