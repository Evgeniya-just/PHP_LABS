predatory.ph<?php
require_once "animals.php";

class Predatory extends Animals {
    public function __construct(string $food,string $name)
    {
        parent::__construct ($food,$name);
    }

    public function diet(int $weight):string
    {
        $foodWeight = $weight / 10;
        return "$this->name еды $foodWeight";
    }
}