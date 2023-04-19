<?php

require_once "Person2.php";
require_once "Account.php";

$person = new Person2("bob", 41, new Account(200));
$person->setId(343);
$person2 = clone $person;

$person->account->balance += 10;
var_dump($person);
var_dump($person2);