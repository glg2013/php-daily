<?php

class Person2
{
    private $name;
    private $age;
    private $id;
    public $account;

    public function __construct($name, $age, $account)
    {
        $this->name = $name;
        $this->age = $age;
        $this->account = $account;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->id = 0;
        //$this->account = clone $this->account;
    }
}