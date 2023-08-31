<?php
  class Product{
    private $a = 7;
    function xyz(){
        return $this->a;
    }
  }

$obj1 = new Product();
echo $obj1->xyz();  
?>