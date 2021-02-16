<?php

class User
{
    public $user_name;
    public $psw;
    public $mail;
    public $date_of_birth;

    public function __construct(string $user_name, string $psw, string $mail)
    {
        $this->user_name = $user_name;
        $this->psw = $psw;
        $this->mail = $mail;
    }
}
