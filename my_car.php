<?php
class car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this-> color = $color;
        $this-> model = $model;
    }
    public function set($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function out ()
    {
        echo "Color of my car is $this->color and its model is $this->model.";
    }
}
$mycar = new car("gold", "BMW M5 E60 V10");
echo "<h2>";
$mycar->out();
echo "</h2>";
$mycar->set("black", "BMW M5 Competition");
echo "<br><h3>";
$mycar->out();
echo "</h3>";
?>
