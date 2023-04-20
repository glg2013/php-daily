<?php

/*
namespace main;

require_once "Debug.php";
use com\getinstance\util\Debug as uDebug;

class Debug {
    public static function helloWorld()
    {
        print "hello from main\Debug";
    }
}

uDebug::helloWorld();
Debug::helloWorld();
*/

namespace com\getinstance\util;
require_once "global.php";

class Lister
{
    public static function helloWorld()
    {
        print "hello from " . __NAMESPACE__ . "\n";
    }
}

Lister::helloWorld();
\Lister::helloWorld();