<?php

require '../../vendor/autoload.php';

// 设置Whoops提供的错误和异常处理程序
$whoops = new Whoops\Run();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
$whoops->register();

$redis = new Redis();
$redis->connect('127.0.0.1');

$uid = 'c5fa1fce680477ac';
$prefix = 'game::';


function getRuneList($redis, $prefix, $uid) {
    $runKey = 'wow_rune_list:';
    $runes = $redis->hGetAll($prefix . $runKey . $uid);
    //print_r($runes);
    var_export($runes);
}

getRuneList($redis, $prefix, $uid);