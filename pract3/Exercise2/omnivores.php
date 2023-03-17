<?php
require_once "animals.php";

class Omnivores extends Animals {
    public function __construct(string $food,string $name)
    {
        parent::__construct ($food,$name);
    }

    public function diet(int $weight):string
    {
        $foodWeight = $weight / 5;
        return "$this->name еды $foodWeight";
    }
}