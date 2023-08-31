<?php

class Product{
    private $price = 20;
    private $total = 3;
    function calculate(){
        return $this-> price * $this-> total;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price=$price;
    }
}
$p1 = new Product();
echo $p1->calculate()."<br>";
$p1->setPrice(15);
echo $p1->calculate();
echo $p1->getPrice();
?>
