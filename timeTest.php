<?php

require_once ('../task.php');
$rdrGame = load('Loader')->redis('rdrGame');

function getExchangeDay()
{
    $openDay = SSystemModel::getInstance()->getDay();
    // 按照(setting里配置的循环天数)一个循环，新的相对的兑换开始时间
    $settings = SCacheModel::getInstance()->get('setting');
    $cyclicDay = $settings['summon_again_time'];
    $currentExchangeStart = $openDay % $cyclicDay;

    if ($currentExchangeStart == 0) {
        $currentExchangeStart = $cyclicDay;
    }
    return $currentExchangeStart;
}

$openDay = getExchangeDay();
echo $openDay;
echo PHP_EOL;

$indexs = SCacheModel::getInstance()->get('tavern_exchange_indexs');
rsort($indexs);
foreach($indexs as $startday){
    if($openDay >= $startday){
        $day = $startday;
        break;
    }
}

//获取当前已兑换数量
$num = $rdrGame->hGet('tavern_all', $day);

$uid = 'c5686b222103e801';
$input = $rdrGame->hGetAll('tavern:' . $uid);//$this->uid);
//检测状态
if($input['all'] == $day){
    $state = 0;//self::STATE_DONE;
}else{
    $settings = SCacheModel::getInstance()->get('setting');
    if($num >= $settings['summon_everyone_req_num']){
        $state = 1;//self::STATE_ALIVE;
    }else{
        $state = 2;//self::STATE_NONE;
    }
}

$result = array(
    'state' => $state,
    'num' => $num,
    'day' => $day,
);

print_r($result);