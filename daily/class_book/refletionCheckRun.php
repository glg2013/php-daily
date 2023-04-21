<?php

require_once "CdProduct.php";

function classData(ReflectionClass $reflectionClass)
{
    $details = "";
    $name = $reflectionClass->getName();

    if ($reflectionClass->isUserDefined()) {
        $details .= "$name is user defined\n";
    }
    if ($reflectionClass->isInternal()) {
        $details .= "$name is built-in\n";
    }
    if ($reflectionClass->isInterface()) {
        $details .= "$name is interface\n";
    }
    if ($reflectionClass->isAbstract()) {
        $details .= "$name is an abstract class\n";
    }
    if ($reflectionClass->isFinal()) {
        $details .= "$name is a final class\n";
    }
    if ($reflectionClass->isInstantiable()) {
        $details .= "$name can be instantiated\n";
    } else {
        $details .= "$name can not be instantiated\n";
    }
    return $details;
}

$prod_class = new ReflectionClass('CdProduct');
print classData($prod_class);