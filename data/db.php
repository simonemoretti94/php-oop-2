<?php
require_once __DIR__ . '/../models/dogs.php';
require_once __DIR__ . '/../models/cats.php';

/**
 * @param string name; product's name
 * @param float price; product's price
 * @param string path; product's img path
 * @param array categories; an array of categories
 */
class Product
{
    function __construct(public string $name, public float $price, public string $path, public array $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->path = $path;
        $this->categories = $categories;
    }
}
