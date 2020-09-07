<?php

class House
{
    private $street;
    private $number;
    private $postal_code;

    public function __construct($street, $number, $postal_code)
    {
        $this->street = $street;
        $this->number = $number;
        $this->postal_code = $postal_code;
    }

    public function setHouseData($street, $number, $postal_code)
    {
        $this->street = $street;
        $this->number = $number;
        $this->postal_code = $postal_code;
    }

    public function getHouseData()
    {
        return $this;
    }
}