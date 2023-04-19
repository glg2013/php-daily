<?php

$payInfo = array(
    'smash_weekly_ish' =>               1.99,
    'smash_monthly_ish' =>              5.99,
    'smash_yearly_ish' =>               19.99,
    'smash_220_en' =>                   3.99,
    'smash_570_en' =>                   9.99,
    'smash_1175_en' =>                  19.99,
    'smash_3030_en' =>                  49.99,
    'smash_4375_en' =>                  69.99,
    'smash_6750_en' =>                  99.99,
    'smash_smallpack_ish' =>            1.99,
    'smash_bigpack_ish' =>              14.99,
    'smash_eventone_ish' =>             1.99,
    'smash_eventtwo_ish' =>             2.99,
    'smash_eventthree_ish' =>           4.99,
    'smash_winningstart1_ish' =>        0.99,
    'smash_winningstart2_ish' =>        5.99,
    'smash_50_en' =>                    0.99,
);

$itemid = 'smash_50_en';
$amount = $payInfo[$itemid] * 100;

var_dump($amount);

if($amount <= 0) {
    echo 'error -1';
    exit();
}

echo 'success';