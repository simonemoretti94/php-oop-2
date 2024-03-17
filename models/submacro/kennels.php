<?php
class Kennels
{
    function __construct(public array $kennels)
    {
        $this->kennels = $kennels;
    }
}
