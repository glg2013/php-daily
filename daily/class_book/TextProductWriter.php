<?php

class TextProductWriter extends AbstractShopProductWriter
{

    public function write()
    {
        // TODO: Implement write() method.
        $str = "PRODUCTS:\n";
        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine() ."\n";
        }
        print $str;
    }
}