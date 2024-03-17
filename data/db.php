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

$dogsProducts = [
    new DogsSpecs('Cereal Biscuits', 3.21, './assets/img/dogsSpec_cereal_biscuits.jpeg', ['healty', 'tooths care']),
    new DogsSpecs('Big Kennel', 25.99, './assets/img/dogsSpec_big_kennel.jpeg', ['wide', 'comfortable', 'well rated']),
    new DogsSpecs('Biting balls set', 5.75, './assets/img/dogsSpec_bite_balls.jpeg', ['amusing', 'pet therapy']),
];


$catsProducts = [
    new CatsSpecs('Cereal Biscuits', 3.21, './assets/img/dogsSpec_cereal_biscuits.jpeg', ['healty', 'tooths care']),
    new CatsSpecs('Cereal Biscuits', 3.21, './assets/img/dogsSpec_big_kennel.jpeg', ['healty', 'tooths care']),
    new CatsSpecs('Cereal Biscuits', 3.21, './assets/img/dogsSpec_bite_balls.jpeg', ['healty', 'tooths care']),
];
