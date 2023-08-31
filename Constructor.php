<?php

class Product{
     public $t ;

      function __construct()
      {
        $this->t = rand(0,65);
        echo $this->t;
         echo "instance created"."<br>";
         
      }
}
$book = new Product();
?>