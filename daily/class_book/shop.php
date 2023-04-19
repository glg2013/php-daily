<?php

require_once 'ShopProductBackups.php';
require_once 'ShopProductWriter.php';
require_once 'CdProduct.php';
require_once 'BookProduct.php';

/*
$product1 = new ShopProductBackups();
$product2 = new ShopProductBackups();

var_dump($product1);
var_dump($product2);
*/

/*
$product1 = new ShopProductBackups();
print $product1->title;
*/

/*
$product1 = new ShopProductBackups();
$product1->title                =   "My Antonia";
$product1->producerMainName     =   "Cather";
$product1->producerFirstName    =   "Willa";
$product1->price                =   5.99;

print "author: {$product1->getProducer()}\n";
*/

/*
$product1 = new ShopProductBackups("My Antonia", "Willa", "Cather", 5.99);
print "author: {$product1->getProducer()}\n";
*/

/*
$product1 = new ShopProductBackups("My Antonia", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer->write($product1);
*/

/*
class wrong {};
$writer = new ShopProductWriter();
$writer->write(new wrong());
*/

$product2 = new CdProduct("Exile on Coldharbour Lane", "The", "Alabama 3", 10.99, null);
print "artist: {$product2->getProducer()}\n";