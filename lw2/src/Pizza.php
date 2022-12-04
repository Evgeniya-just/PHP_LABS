<?php

abstract class Pizza
{
    public string $name;
    public string $sauce;
    /**
     * @var string[] $toppings
     */
    public array $toppings;

    function prepare(): void
    {
        echo 'Началась готовка пиццы:' . $this->name . PHP_EOL;
        echo 'Добавлен соус:' . $this->sauce . PHP_EOL;
        echo 'Добавлены топики:';
        foreach ($this->toppings as $value) {
            echo $value . ",";
        }
    }

    function cut(): void
    {
        echo 'Данную пиццу нарезают по диагонали' . PHP_EOL;
    }
}
