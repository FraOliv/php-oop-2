<?php

include_once __DIR__ . '/User.php';

class Person extends User{
    public $name;
    public $last_name;
    public $age;


    public function __construct(string string $user_name, string $psw, string $mail)
    {
        parent::__construct($user_name, $psw,$mail);

    }
}