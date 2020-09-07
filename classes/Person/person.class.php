<?php

namespace Person;

class Person
{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function setPersonData($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getPersonData()
    {
        return $this;
    }
}
