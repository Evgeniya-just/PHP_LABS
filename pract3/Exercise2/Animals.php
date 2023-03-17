<?php
abstract class Animals{
    public string $food;
    public string $name;

    public function __construct(string $food,string $name)
    {
        $this->food=$food;
        $this->name=$name;
    }

    abstract function diet(int $weight);
}