<?php

class Calculator
{
    private $result;

    public function sum($operand)
    {
        $this->result += $operand;
        return $this;
    }

    public function minus($operand)
    {
        $this->result =  $this->result - $operand;
        return $this;
    }

    public function division($operand)
    {
        if ($operand == 0) {
            $this->result = 0;
            return $this;
        }

        $this->result = $this->result / $operand;
        return $this;
    }
    public function  product($operand)
    {
        $this->result = $this->result * $operand;
        return $this;
    }
    public function clear()
    {
        $this->result = 0;
        return $this;
    }

    public function getResult()
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
echo $calculator->sum(1)->sum(2)->product(3)->division(0)->getResult();
