<?php

// 可以翻转带有中文的字符串
$msg = '世界你好！abc';

$len = mb_strlen($msg);
$info = '';
for ($i = 0; $i < $len; $i++) {
    $m = mb_substr($msg, -($i+1), 1);
    $info .= $m;
}

echo $info;