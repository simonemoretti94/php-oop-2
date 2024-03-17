<?php
class Games
{
    function __construct(public string $imgpath, public string $title, public float $price, public string $type)
    {
        $this->imgpath = $imgpath;
        $this->title = $title;
        $this->price = $price;
        $this->type = $type;
    }
}
