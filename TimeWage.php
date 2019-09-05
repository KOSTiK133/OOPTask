<?php

require_once "People.php";

class TimeWage extends People
{
    function __construct(string $name, string $employeesPosition,int $time, int $money)
    {
        $this->name = $name;
        $this->employeesPosition = $employeesPosition;
        $this->money = $money;
        $this->time = $time;
    }

    public $employeesPosition = null;
    private $money = 0;
    private $time = 0;
    public function getMoney():int
    {
        return $this->time*$this->money;
    }
}