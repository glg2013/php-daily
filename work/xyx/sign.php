<?php

function makeSign($token)
{
    // key 32位的字符串
    $secret_key = "4o6dhzAJZ1yKs5WLiDUSCRrOmE2P9clF";
    // iv, 16为的字符串
    $secret_iv = "r0twZ97mbJpdO1DA";

    // 加密方式
    $encrypt_method = "AES-128-CBC"; // 还有可选值 AES-192-CBC， AES-256-CBC

    return  base64_encode(openssl_encrypt($token,$encrypt_method, $secret_key, 0, $secret_iv));
}

function stringToInt($string)
{
    // key 32位的字符串
    $secret_key = "4o6dhzAJZ1yKs5WLiDUSCRrOmE2P9clF";
    // iv, 16为的字符串
    $secret_iv = "r0twZ97mbJpdO1DA";

    // 加密方式
    $encrypt_method = "AES-128-CBC"; // 还有可选值 AES-192-CBC， AES-256-CBC

    return  openssl_decrypt(base64_decode($string),$encrypt_method, $secret_key, 0, $secret_iv);
}

function reply($data, $err = '')
{
    header("Content-Type: application/json");
    echo json_encode(array(
        'err' => $err,
        'data' => $data
    ));
    exit();
}

$token = 'fengniancong#$%';
$sign = makeSign($token);
//var_dump($sign);
//echo PHP_EOL;
//var_dump(stringToInt($sign));

$ret = [
    'access_token' => $sign
];

reply($ret);