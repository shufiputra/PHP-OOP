<?php

// 01 - Membuat Class
class Person 
{
    const AUTHOR = "PHP OOP";

    var string $name;
    var ?string $adress = null; //Nullable Properties
    var string $country = "Indonesia"; //memakai default value

    function __construct(string $name, ?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL; // this keyword
        }
    }

        function info()
        {
            echo "Author : " . self::AUTHOR . PHP_EOL; // self keyword
        }

        function __destruct()
        {
            echo "Object person $this->name is destroyed" . PHP_EOL;
        }
    }