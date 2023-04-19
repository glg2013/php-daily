<?php

//var_dump(getExchangeDay(1), getExchangeDay(2), getExchangeDay(315), getExchangeDay(316), getExchangeDay(317), getExchangeDay(320), getExchangeDay(630), getExchangeDay(631));

var_dump(
    getExchangeDay(1), getExchangeDay(315),
    getExchangeDay(316), getExchangeDay(317), getExchangeDay(500), getExchangeDay(630),
    getExchangeDay(631), getExchangeDay(632), getExchangeDay(946)
);

//var_dump(getExchangeDay(631));
//var_dump(getExchangeDay(632));
//var_dump(getExchangeDay(633));

function getExchangeDay($openDay, $cyclicDay = 316)
{
    //$openDay = SSystemModel::getInstance()->getDay();
    // 按照(setting里配置的循环天数)一个循环，新的相对的兑换开始时间
    //$settings = SCacheModel::getInstance()->get('setting');
    //$cyclicDay = $settings['summon_again_time'];

    $currentExchangeStart = $openDay % $cyclicDay;
    if ($currentExchangeStart == 0) {
        $currentExchangeStart = $cyclicDay;
    }

    return $openDay .' - '. $currentExchangeStart;
}