<?php 
require_once "interface.php";
class Directorya implements computer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(): string
    {
        $directory = $this->name . ":(";
        foreach($this->arr as $value){
            $directory .= $value->render();
        }
        $directory .= ")";
        return $directory;
    }

    public function counter(): int
    {
        $counter = 0;
        foreach ($this->arr as $value){
            $counter = $value->counter()+$counter;
        }
        return $counter;
    }

    public $arr = [];
    public function add (computer $element){
        $this->arr[] = $element;
    }


}