<?php

require_once "Person.php";

/*
$p = new Person();
print $p->name2;
*/

$person = new Person(new PersonWriter());
$person->writeName();