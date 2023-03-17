<?php
require_once "animals.php";

class Herbivore extends Animals {
    public function __construct(string $food,string $name)
    {
        parent::__construct ($food,$name);
    }

    public function diet(int $weight):string
    {
        $foodWeight = $weight / 2;
        return "$this->name еды $foodWeight";
    }
}