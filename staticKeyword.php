<?php

class Product{
    static public $price = 2;
    public $color = "green";
    static public $total = 0;

    static function calculate_total()
    {
        $total = 40;
        return $total;
    }
    static function generate_id()
    {
        return rand(0,9999);
    }
}
echo Product::generate_id();
echo "<br>";
echo Product::$price;
echo "<br>";
echo Product::$total;
echo "<br>";
echo Product::calculate_total();
