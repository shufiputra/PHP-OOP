<?php

require_once "Data/Person.php";

$person = new Person("Muhammad", "Jakarta");
$person->name = "Muhammad";
$person->address = "Jakarta";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "address : $person->address" . PHP_EOL;
echo "country : $person->country" . PHP_EOL;

$person2 = new Person("Budi", "Tangerang");
$person2->name = "Budi";
$person2->address = "Tangerang";


var_dump($person2);