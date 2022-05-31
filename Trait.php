<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Budi");
$person->hello("Udin");

$person->name = "Uta";
var_dump($person);

$person->run();