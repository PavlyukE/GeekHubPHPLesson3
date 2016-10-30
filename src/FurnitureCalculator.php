<?php
namespace Vendor\FurnitureCalculator;

use Vendor\FurnitureCalculator\Furniture\FurnitureInterface;

class FurnitureCalculator
{
    /**
     * @var float
     */
    private $materialPrice;


    public function __construct($materialPrice)
    {
        $this->materialPrice = $materialPrice;
    }
    /**
     * @param FurnitureInterface $furniture
     * @return float price
     */
    public function getFurniturePrice(FurnitureInterface $furniture)
    {
        $price = $this->materialPrice * $furniture->quantityOfMaterial();
        return $price;
    }
}