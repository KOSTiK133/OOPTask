<?php

require_once "People.php";

class FixedPayWorker extends People
{
    function __construct(string $name, string $employeesPosition, int $money)
    {
        $this->name = $name;
        $this->employeesPosition = $employeesPosition;
        $this->money = $money;
    }

    public $employeesPosition = null;
    private $money = 0;

    public function getMoney():int
    {
        return $this->money;
    }
}