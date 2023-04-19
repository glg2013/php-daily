<?php

class XmlProductWriter extends AbstractShopProductWriter
{

    public function write()
    {
        // TODO: Implement write() method.
        $str = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $str .= "<products>\n";
        foreach ($this->products as $shopProduct) {
            $str .= "\t<product title=\"{$shopProduct->getTitle()}\">\n";
            $str .= "\t\t<summary>\n";
            $str .= "\t\t{$shopProduct->getSummaryLine()}\n";
            $str .= "\t\t</summary>\n";
            $str .= "\t</product>\n";
        }
        $str .= "</products>\n";
        print $str;
    }
}