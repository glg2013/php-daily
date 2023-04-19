<?php

class ShopProductBackups
{
    public $title               =   "default product";
    public $producerMainName    =   "main name";
    public $producerFirstName   =   "first name";
    public $price               =   0;

    public function __construct($title, $firstName, $mainName, $price) {
        $this->title                =   $title;
        $this->producerFirstName    =   $firstName;
        $this->producerMainName     =   $mainName;
        $this->price                =   $price;
    }

    function getProducer() {
        return "{$this->producerFirstName}"." {$this->producerMainName}";
    }
}