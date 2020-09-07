<?php

namespace Person;

class Person
{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct(string $first_name, string $last_name, int $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function setPersonData(string $first_name, string $last_name, int $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getPersonData()
    {
        return $this;
    }

    // protected function getAllUsers()
    // {
    //     $sql = "SELECT * FROM users";
    //     $result = $this->connect()->query($sql);
    // }
}
