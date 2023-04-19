<?php

require_once "PersonWriter.php";

class Person
{
    private $writer;

    public function __construct(PersonWriter $personWriter)
    {
        $this->writer = $personWriter;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if (method_exists($this->writer, $name)) {
            return $this->writer->$name($this);
        }
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        $method = "get{$name}";
        if (method_exists($this, $method)) {
            return $this->$method();
        } else {
            return "no property {$name}";
        }
    }

    public function getName()
    {
        return "Bob";
    }

    public function getAge()
    {
        return 41;
    }
}