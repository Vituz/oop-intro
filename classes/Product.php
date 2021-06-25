<?php

/**
 * Product class
 * @author Vituz
 * @copyright Vituz 2021
 */
class Products
{
    public $name;
    public $description;
    public $price;
    public $instock;
    public $img;

    function __construct(string $name, string $description, float $price, bool $instock = false, $img = 'https://picsum.photos/300')
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->instock = $instock;
        $this->img = $img;
    }
}
