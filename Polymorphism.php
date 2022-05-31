<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("uta");
var_dump($company);

$company->programmer = new BackendProgrammer("uta");
var_dump($company);

$company->programmer = new FrontendProgrammer("uta");
var_dump($company);

sayHelloProgrammer(new Programmer("uta"));
sayHelloProgrammer(new BackendProgrammer("uta"));
sayHelloProgrammer(new FrontendProgrammer("uta"));