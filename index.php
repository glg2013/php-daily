<?php

////取随机10位字符串
//$strs="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
//$name=substr(str_shuffle($strs),mt_rand(0,strlen($strs)-11),10);
//var_dump(md5(time() . rand(1000,9999) . $name));


//$params['purchaseID'] = 'xxxxxxx';
//$query['purchaseID'] = $params['purchaseID'];
//$url = 'http://iap.samsungapps.com/iap/v6/receipt' . '?' . http_build_query($query);
//
//echo $url;
//
//$Ymj = '20230316';
//$key = 'SDHJSRAIN9987S';
//$userName = 'daxien2-1GSsDOW8qghbnptwhflpdMg6hmL2';
//
//echo md5($userName . $Ymj . $key);

//// 1轮
//echo '1轮' . PHP_EOL;
//echo 1 % 316;
//echo PHP_EOL;
//echo 315 % 316;
//echo PHP_EOL;
//
//// 2轮
//echo '2轮' . PHP_EOL;
//echo 316 % 316;
//echo PHP_EOL;
//echo 631 % 316;
//echo PHP_EOL;
//
//// 3轮
//echo '3轮' . PHP_EOL;
//echo 632 % 316;
//echo PHP_EOL;
//echo 946 % 316;
//echo PHP_EOL;
//
//exit();

//for ($i = 1; $i <= 100; $i++) {
//    $openDay = $i % 8;
//    if ($openDay == 0) {
//        $openDay = 8;
//    }
//
//    $msg = '开服第 ' .$i. ' 天' . $openDay . PHP_EOL;
//    echo $msg;
//}
//exit();

$list = [];
$index = 0;
$result = [];
$againDay = 312;
for ($i = 1; $i <= 999; $i++) {
    if ($i != 0 && $i % $againDay == 1) {
        $index += 1;
    }
    $list[$index][] = '开服 ' . $i . ' 天, 顺序编号:' . ($i % $againDay);

    $roundOpenDay = $i % $againDay;
    $roundOpenDay = $roundOpenDay == 0 ? $againDay : $roundOpenDay;
    $result[$i] = '开服 ' . $i . ' 天, 顺序编号:' . $roundOpenDay;
}
print_r($result);
exit();
