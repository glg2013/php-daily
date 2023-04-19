<?php

$msg = '世界你好！abc';

$info = '';
for ($i = 0; $i < mb_strlen($msg); $i++) {
    $m = mb_substr($msg, -($i+1), 1);
    $info .= $m;
}

echo $info;