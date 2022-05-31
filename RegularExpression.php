<?php

$matches = [];
$result = preg_match_all("/muh|shuf|tra/i", "Muhammad ShufiPutra", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Muhammad ShufiPutra,Belajar,Ngoding,dari,Programmer,Zaman-Now");

var_dump($result);