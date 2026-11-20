<?php
echo " this is the inheritance ........";
class Employes
{
    public $name = "mayank";
    private $salary = 12000;
    private $age;


    function get_age()
    {
        echo " salary of $this->name : $this->salary";
    }
}

class Engineer extends Employes
{
    private  $language = "php";
    function usedlanguage($lang)
    {
        $this->language = $lang;
        echo "$this->language";
    }
}

$nikhil = new Employes();
$nikhil->name = "nikhil";
$nikhil->get_age();
$kunal = new Employes();
$rohit = new Employes();


$arpit = new Engineer();

echo $arpit->usedlanguage("python");
