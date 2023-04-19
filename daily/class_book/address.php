<?php

require_once "AddressManager.php";

$settings = simplexml_load_file("settings.xml");
$manager = new AddressManager();
$manager->outputAddresses((string)$settings->resolvedomains);