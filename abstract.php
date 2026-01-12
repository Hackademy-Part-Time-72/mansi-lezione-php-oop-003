<?php

abstract class Person
{
    public $firstname;

    public function __construct($firstname)
    {
        $this->firstname = $firstname;
    }

    abstract public function sayHello();
    abstract public function connection();
}

class Student extends Person
{
    public $lastname;

    public function __construct($firstname, $lastname)
    {
        parent::__construct($firstname);
        $this->lastname = $lastname;
    }

    public function sayHello()
    {
        //
    }

    public function connection()
    {
        //mi collego al
    }
}

$francesco = new Person('Francesco', 'Mansi');

var_dump($francesco->firstname);
//$francesco->sayHello();
