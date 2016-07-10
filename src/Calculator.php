<?php
namespace Ocp;

class Calculator
{
    private $numbers;

    function __construct()
    {
        $this->numbers = [];
    }

    public function addNumber($number)
    {
        array_push($this->numbers, $number);
    }
}
