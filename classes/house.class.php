<?php

class House
{
    private $street;
    private $number;
    private $postal_code;

    public function __construct(string $street, int $number, string $postal_code)
    {
        $this->street = $street;
        $this->number = $number;
        $this->postal_code = $postal_code;
    }

    public function setHouseData(string $street, int $number, string $postal_code)
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