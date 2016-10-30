<?php

namespace Vendor\FurnitureCalculator\Furniture;

class Chair extends AbstractFurniture implements FurnitureInterface
{
    public function quantityOfMaterial($sizes)
    {
        // some operations with sizes
        $quantity = 3;
        return $quantity;
    }    
}