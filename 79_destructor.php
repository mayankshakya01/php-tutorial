<!-- destructor is used for destroy the object after  -->
<?php
class car
{
    public $modal;
    public $launched;
    function __construct($type, $releasetime)
    {
        $this->modal = $type;
        $this->launched = $releasetime;
        echo "this is constructor<br>";
    }

    function __destruct()
    {
        echo "destroy the object $this->modal";
    }
}
$BMW = new car("racing car", "old but aura++");
echo "$BMW->launched";
