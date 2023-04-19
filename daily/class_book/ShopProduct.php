<?php

class ShopProduct
{
    private $title = "default product";
    private $producerMainName = "main name";
    private $producerFirstName = "first name";
    private $price = 0;
    private $discount = 0;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * @return string
     */
    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    /**
     * @param int $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price - $this->discount;
    }

    function getProducer()
    {
        return "{$this->producerFirstName}" . " {$this->producerMainName}";
    }

    function getSummaryLine()
    {
        $base = "$this->title ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}