<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "uta";
$request->password = "rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
     public ?string $name;
     public ?string $address;
     public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Uta";
$register->address = "Tangerang";
$register->email = "uta@gmail.com";

ValidationUtil::validateReflection($register);

ValidationUtil::validate($register);