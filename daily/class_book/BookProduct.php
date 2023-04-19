<?php

require_once "ShopProduct.php";

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    /**
     * @return int|mixed
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": page count - {$this->numPages}";
        return $base;
    }
}