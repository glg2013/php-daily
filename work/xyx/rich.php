<?php

function reportAction($clueToken, $openId, $unionId = null)
{
    if (!$clueToken || !$openId) {
        return;
    }

    //https://bytedance.feishu.cn/docx/doxcnsCqXkvxoAg36GDzkRRRuAq
    //https://clue.oceanengine.com/outer/wechat/applet/token/1759312953857032
    //322095191F0F61A6CBCBC443F7CC2CA2

    $token = 'D528C6F23C7D7';
    $timestamp = '1646989046';//time();
    $nonce = 234;//createNonce();
    $request = [
        'timestamp' => $timestamp,
        'nonce' => $nonce,
        'signature' => getSignature($token, $nonce, $timestamp),
    ];
    $url = 'https://clue.oceanengine.com/outer/wechat/applet/token/1759312953857032';
    $url = $url . '?' . http_build_query($request);

    $body = [
        'clue_token' => $clueToken,
        'open_id' => $openId,
        'event_type' => 0
    ];
    if ($unionId) {
        $body['union_id'] = $unionId;
    }

    var_dump($body, $url);
    exit();

    $resp = Utils::jsonPostByCurl($url, $body);
    //$ret = json_decode($resp, true);
    $rdrCross = load('Loader')->redis('rdrCross');
    $rdrCross->lpush('rich_active_report', $resp);
    $rdrCross->ltrim('rich_active_report', 0, 1000);
}

function createNonce()
{
    //return Utils::makeUUID() . time();
    $strs = "QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
    $name = substr(str_shuffle($strs), mt_rand(0, strlen($strs) - 11), 10);
    return md5(time() . rand(1000, 9999) . $name);
}

function getSignature($token, $nonce, $timestamp)
{
    $collect = array((string)$token, (string)$nonce, (string)$timestamp);
    usort($collect, 'strcmp');
    $signature = sha1(implode('', $collect));
    return $signature;
}

$clueToken = 'D528C6F23C7D7';
$openId = 234;
$unionId = null;
reportAction($clueToken, $openId, $unionId);