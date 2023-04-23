<?php

$password = 'goodgoodstudy!';
$passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
//var_dump($passwordHash);print strlen($passwordHash);exit();
//$passwordHash = '$2y$12$n3P136l8uSUHWqxGCe/3V.lxNzuJa3LbgSFia92JgD0slpcTglIP.';

if (password_verify($password, $passwordHash)) {
    echo '密码一致';exit();
}
echo '密码错误';