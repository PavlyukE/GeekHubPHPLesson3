<?php

namespace Vendor\FurnitureCalculator\Furniture;

abstract class AbstractFurniture
{
    /**
     * @var array
     */
    private $sizes;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $material;

    /**
     * @param array  $sizes
     * @param string $color
     * @param string $material
     */
    public function __construct($sizes, $color, $material)
    {
        $this->sizes = $sizes;
        $this->color = $color;
        $this->material = $material;
    }
}
