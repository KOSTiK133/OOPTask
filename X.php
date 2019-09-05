<?php

require_once "FixedPayWorker.php";
require_once "TimeWage.php";

$project = [];
$designer = new FixedPayWorker("Vasya", "Designer", 3000);
array_push($project, $designer);
$senior = new TimeWage("Petya", "Senior", 60, 10);
array_push($project, $senior);
$midel1 = new TimeWage("Ivan", "midel", 3, 1000);
array_push($project, $midel1);
$midel2 = new TimeWage("Alex", "midel", 3, 1000);
array_push($project, $midel2);
$frondEnd = new TimeWage("Vlad", "FrondEnd Developer", 120, 5);
$priceProject = 0;
for ($i = 0; $i < count($project); $i++) {
    $priceProject += $project[$i]->getMoney();
}

echo "price project = $priceProject";
