<?php
class Employeer {
    private $name;
    private $age;
    public $salary;
}

$emp = new Employeer;
$emp->name = 'Andrey';
$emp->age = 46;
$emp->salary = 41000;

$emp1 = new Employeer;
$emp1->name = 'Ivan';
$emp1->age = 40;
$emp1->salary = 11000;

echo ($emp->salary + $emp1->salary).PHP_EOL;
