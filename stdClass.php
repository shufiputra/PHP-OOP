<?php

$array = [
     "firstName" => "Muh",
     "middleName" => "Shufi",
     "lastName" => "Putra"
];

$object = (object) $array;

var_dump($object);

echo "First  : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);