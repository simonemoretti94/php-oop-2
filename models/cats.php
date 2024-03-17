<?php
class CatsSpecs extends Product
{
    function __construct(public string $name, public float $price, public string $path, public array $categories,)
    {
        parent::__construct($name, $price, $path, $categories);
    }
}
