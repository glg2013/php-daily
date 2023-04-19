<?php

$pay_token = 'da8d182e1cashjkulkof6ae22a4a918457';
$method = 'POST';
$uri = '/api/apps/game/wallet/get_balance';

$data = [
    "openid" => "fge35vh5h3f2",
    "appid" => "tthdch45hd2df",
    "zone_id" => "1",
    "access_token" => "hds2rt6bhgh5wfg5nf4gdh6",
    "ts" => 1507530737,
    "pf" => "android"
];

ksort($data, SORT_STRING);
$stringA = http_build_query($data);

$stringB = $stringA . "&org_loc=". $uri ."&method=" . $method;

$sign = hash_hmac("sha256", $stringB, $pay_token);
echo $sign;