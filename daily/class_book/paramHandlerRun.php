<?php

require_once "ParamHandler.php";

$test = ParamHandler::getInstance("./params.xml");
$test->addParam("key1", "val1");
$test->addParam("key2", "val2");
$test->addParam("key3", "val3");
$test->write();

$test->read();