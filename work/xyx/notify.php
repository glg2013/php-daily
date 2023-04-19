<?php

$callback = $_GET['clickid'];
var_dump($callback);
exit();

$url = 'https://analytics.oceanengine.com/api/v2/conversion';
$postFields = [
    'event_type'    =>  'active',
    'context'       =>  [
        'ad'    =>  [
            'callback' => 'EPHk9cX3pv4CGJax4ZENKI7w4MDev_4C', //$callback,
        ]
    ],
    'timestamp'     =>  getMillisecond()
];
$jsonPostData = json_encode($postFields);

$result = jsonPost($url, $jsonPostData);
var_dump($result);


function getMillisecond(){
    list($t1, $t2) = explode(' ', microtime());
    return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
}

function jsonPost($url, $json) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>$json,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);
    var_dump();

    curl_close($curl);
    return $response;
}