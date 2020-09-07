<?php
class Person
{
    protected $first_name = 'A';
    protected $last_name = 'V';
    private $age = '';

    public $public = 'public</br>';
    protected $protected = 'protected</br>';
    private $private = 'private</br>';

    public function echoProps()
    {
        echo "$this->public</br>";
        echo "$this->protected</br>";
        echo "$this->private</br>";
    }

    public function fn_public()
    {
        echo "public method</br>";
    }

    protected function fn_protected()
    {
        echo "public method</br>";
    }

    private function fn_private()
    {
        echo "public method</br>";
    }
}

class Dog extends Person
{
    public function echoOwner()
    {
        $var = "Owner: $this->first_name $this->last_name</br>";
        return $var;
    }

    public function echoProps2()
    {
        echo "$this->public</br>";
        echo "$this->protected</br>";
        //secho "$this->private</br>";
    }

    public function fn_public_ex()
    {
        $this->fn_public();
    }

    protected function fn_protected_ex()
    {
        $this->fn_protected();
    }

    private function fn_private_ex()
    {
        $this->fn_private();
    }
}

class Food
{
    private $name = '';
    private $recipe = '';

    public function __construct($name, $recipe)
    {
        $this->name = $name;
        $this->recipe = $recipe;
    }

    public function setFoodData()
    {
        $this->name = $name;
        $this->recipe = $recipe;
    }

    public function getFoodData()
    {
        echo "Name: $this->name</br>";
        echo "Recipe: $this->recipe</br>";
    }

    public function __destruct()
    {
        echo 'destruct';
    }
}

class ScareJump
{
    public static $shout = "BOOOOOOO!";

    public static function setShout($shout)
    {
        self::$shout = $shout;
    }
}
