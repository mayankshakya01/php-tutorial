<?php
class empployes
{
    public $name = "mayank";

    function get_name()
    {
        echo "$this->name <br>";
    }

    private $age = 20;
    function get_age()
    {
        echo "$this->age";
    }
}

$emp1 = new empployes();
echo "$emp1->name<br>";

$emp2 = new empployes();
// echo "$emp2->age";
$emp2->get_age();
