<?php
class Showroom
{
    public $carname;
    public $type;
    private $buyrom = 100000;
    protected $sellrom = 150000;

    public function __construct($carname, $type)
    {
        $this->carname = $carname;
        $this->type = $type;
        $this->Orderprice(90000);
    }
    private  function Orderprice($buyrom)
    {
        $this->buyrom = $buyrom;
        echo "the orignal price of this car $this->buyrom";
    }
    private  function Profit($profit)
    {
        $this->$profit = $this->sellrom - $this->buyrom;
        echo "Profit price of this car $profit";
    }
    protected function sellprice()
    {
        echo "sell price of the car $this->sellrom";
    }
}
class cars extends Showroom
{
    public $carname = "rollces roy";
    public function __construct($carname, $type)
    {
        $this->carname = $carname;
        $this->type = $type;
        $this->sellprice(); // this will not give error because it is protected. and protected function is access its own class and child (inherited)class of that class where protected function is defined.
        // $this->profit(); // this give error because the profit funtion is private and it can't be access  by another class
    }
}

$cst1 = new Showroom("BMW", "petrol");
$car1 = new cars("", "");
