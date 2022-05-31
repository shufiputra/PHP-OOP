<?php

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Uta";
$student1->value = 100;
$student1->setSample("SAMPLE");

var_dump($student1);