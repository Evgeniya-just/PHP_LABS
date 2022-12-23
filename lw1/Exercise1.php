<?php

class Calculator
{
    private ?float $result;

    public function __construct(?float $result = null)
    {
        $this->result = $result;
    }

    public function sum(float $operand, ?float $result = null): Calculator
    {

        $this->result += $operand;
        return $this;
    }

    public function minus(float $operand, ?float $result = null): Calculator
    {


        $this->result =  $this->result - $operand;
        return $this;
    }

    public function division(float $operand, ?float $result = null): Calculator
    {
        if (!$operand) {
            $this->result = 0;
            return $this;
        }

        $this->result = $this->result / $operand;
        return $this;
    }
    public function  product(float $operand, ?float $result = null): Calculator
    {
        $this->result = $this->result * $operand;
        return $this;
    }
    public function clear(): Calculator
    {
        $this->result = 0;
        return $this;
    }

    public function getResult(): int
    {
        $p = $this->result;
        $this->result = 0;
        return  $p;
    }
}



$calculator = new Calculator();
echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult();
echo ("\n");
echo $calculator->sum(3)->sum(3)->minus(3)->division(3)->getResult();
echo ("\n");
echo $calculator->sum(1.4)->sum(2.6)->product(4)->getResult();
echo ("\n");
echo $calculator->sum(3)->sum(3)->product(3)->division(0)->getResult();
