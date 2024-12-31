<?php

require 'functions.php';
//require 'router.php';

//connect to our MySql database

class Person {
    public $name;
    public $age;

    public function breathe ()
    {
//        echo "breathing";
          echo $this->name . ' ' . "breathing";
    }
}

$person = new Person();

$person ->name = 'John Doe';
$person ->age = 25;

//dd($person);
//dd($person->name);
//dd($person->age);
//dd($person->breathe());


