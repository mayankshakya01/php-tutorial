<?php
class Docter
{
    public $name;
    public $catagory;
    function __construct($name, $catagory)
    {
        $this->name = $name;
        $this->catagory = $catagory;
        echo "hi this is a constructor<br>";
    }
}

$d1 = new Docter("mayank", "pharmasist");
echo "hi this is $d1->name and this is a $d1->catagory";
