<?php

    require_once __DIR__ . '/vendor/autoload.php';

    $chair = new \Vendor\FurnitureCalculator\Furniture\Chair([1, 1, 1], "red", "wood");
    $calc = new \Vendor\FurnitureCalculator\FurnitureCalculator(10);
    $price = $calc->getFurniturePrice($chair);