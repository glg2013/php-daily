<?php

$password = 'goodgoodstudy!';
$passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
//var_dump($passwordHash);

if (password_verify($password, $passwordHash)) {
    echo '密码一致';exit();
}
echo '密码错误';