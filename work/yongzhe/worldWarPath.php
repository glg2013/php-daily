<?php

$info = loadAreaByPoint(392, 163);



function loadAreaByPoint($x, $y, $skip = array())
{
    //计算客户端当前视野所能看见的区域
    $start = microtime(true);
    $offsetx = 20 / 2;
    $offsety = 20 / 2;
    $startx = max(0, $x - $offsetx);
    $endx = min(1000 - 1, $x + $offsetx);
    $starty = max(0, $y - $offsety);
    $endy = min(1000 - 1, $y + $offsety);
    $aids = array();
    for ($px = $startx; $px <= $endx; $px += 20) {
        for ($py = $starty; $py <= $endy; $py += 20) {
            $aid = transformPointToArea($px, $py);
            $aids[$aid] = true;
        }
    }

    print_r($aids);
    exit();

//    //加载守卫
//    $allianceId = $this->rdrWorld->hGet(self::INFO_KEY . $this->uid, 'alliance_id');
//    $guards = $this->loadGuard(array_keys($aids), $allianceId);
//
//    //获取区域数据
//    $maps = array();
//    foreach ($aids as $aid => $_) {
//        /*if(in_array($aid, $skip)){
//            continue;
//        }*/
//
//        $map = $this->getAreaMapEx($aid, $allianceId, $guards);
//        $maps[$aid] = $map;
//    }

    //获取区域行动路线
//    $path = $this->getAreaPath(array_keys($aids), $allianceId);
}

function transformPointToArea($x, $y)
{
    $ax = ceil(($x+1) / 20);
    $ay = ceil(($y+1) / 20);
    return "{$ax}|{$ay}";
}