<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";


// Membuat object dari namespace
$conflict = new Data\One\Conflict();
$conflict = new Data\Two\Conflict();

echo Helper\APPLICATION . PHP_EOL;

Helper\helpMe();