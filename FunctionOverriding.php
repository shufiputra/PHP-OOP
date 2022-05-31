<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Udin");

$vp = new VicePresident();
$vp->name = "Uta";
$vp->sayHello("Udin");