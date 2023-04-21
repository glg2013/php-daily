<?php

require_once "XmlParamHandler.php";
require_once "TextParamHandler.php";

abstract class ParamHandler
{
    protected $source;
    protected $params = array();

    public function __construct($source)
    {
        $this->source = $source;
    }

    public function addParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    public function getAllParams()
    {
        return $this->params;
    }

    public static function getInstance($filename)
    {
        if (preg_match("/\.xml$/i", $filename)) {
            return new XmlParamHandler($filename);
        }
        return new TextParamHandler($filename);
    }

    abstract function read();
    abstract function write();
}