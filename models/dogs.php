<?php

require_once __DIR__ . '/submacro/foods.php';
require_once __DIR__ . '/submacro/games.php';
require_once __DIR__ . '/submacro/kennels.php';

class Dogs
{
    function __construct(public Foods $foods, public Games $games, public Kennels $kennels)
    {
        $this->foods = $foods;
        $this->games = $games;
        $this->kennels = $kennels;
    }
}

class DogsSpecs extends Dogs
{
    function __construct($foods, $games, $kennels, public bool $biters)
    {
        parent::__construct($foods, $games, $kennels);
        $this->biters = $biters;
    }
}
