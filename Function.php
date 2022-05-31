<?php

// Membuat object
require_once "Data/Person.php";

$uta = new Person("Uta", "Tangsel");
$uta->name = "Uta";
$uta->sayHello("Budi");

$ubed = new Person("Ubed", "Tasik");
$ubed->name = "Ubed";
$ubed->sayHello(null);

$uta->info();
$ubed->info();