<?php

require_once "CdProduct.php";

$prod_class = new ReflectionClass('CdProduct');
Reflection::export($prod_class);