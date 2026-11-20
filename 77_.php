<?php
class player
{
    public $name;
    public $game;
    public $speed;

    function set_data($name, $game, $speed)
    {
        $this->name = $name;
        $this->game = $game;
        $this->speed = $speed;
    }
    function get_name()
    {
        return $this->name . $this->game . $this->speed;
    }
}

$p1 = new player();
$p1->set_data("shubham ", "cricket ", "100kmph");
echo $p1->get_name();
