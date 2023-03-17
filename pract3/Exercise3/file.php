<?php
require_once "interface.php";
class File implements computer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(): string
    {
        return "$this->name ";
    }

    public function counter(): int
    {
        return 4;
    }
}