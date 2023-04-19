<?php

require_once "ShopProduct.php";
class ShopProductWriter
{
    private $products = array();

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        //$str = "{$shopProduct->title}: " . $shopProduct->getProducer() .  "( {$shopProduct->price})\n";
        //print $str;
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer();
            $str .= " ({$shopProduct->getPrice()})\n";
        }
        print $str;
    }
}