<?php

namespace Vendor\FurnitureCalculator\Furniture;

interface FurnitureInterface
{
    /**
     * @param array $sizes
     * @return float
     */
    public function quantityOfMaterial($sizes);
}