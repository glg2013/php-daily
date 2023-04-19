<?php

require_once "ShopProduct.php";
class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    /**
     * @return int|mixed
     */
    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": play time - {$this->playLength}";
        return $base;
    }
}