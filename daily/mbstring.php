<?php

//$str = "\xE1\xE9\xF3\xFA";
//echo mb_detect_encoding($str);

$str = '你好a';
$newStr = mb_convert_encoding($str, "UTF-8", "UTF-8");
var_dump($newStr);