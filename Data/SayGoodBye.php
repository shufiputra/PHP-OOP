<?php

namespace Data\Traits;

trait SayGoodBye
{
     public function goodBye(?string $name): void
     {
          if (is_null($name)) {
               echo "Good bye" . PHP_EOL;
          } else {
               echo "Good bye $name" . PHP_EOL; 
          }
     }
}

trait SayHello
{
     public function hello(?string $name): void
     {
          if (is_null($name)) {
               echo "Hello" . PHP_EOL;
          } else {
               echo "Hello $name" . PHP_EOL; 
          }
     }
}

trait HasName
{
     public string $name;
}

trait CanRun
{
     public abstract function run(): void;
}

class ParentPerson{
     public function goodBye(?string $name): void
     {
          echo "Good bye in Person" . PHP_EOL;
     }

     public function hello(?string $name): void
     {
          echo "Hello in Person" . PHP_EOL;
     }
}

trait ALL {
     use SayGoodBye, SayHello, HasName, CanRun{
          // bisa di override
          // hello as private;
          // goodbye as private;
     }
}

class Person extends ParentPerson
{
     use ALL;

     public function run(): void
     {
          echo "Person $this->name is Running" . PHP_EOL;
     }
}