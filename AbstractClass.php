<?php


//Abstract class cannot be instantiated.It can o0nly be inherited
abstract class Database{
       public $var = 2;
       function __construct(){
        echo "constructor";
        echo "<br>";
       }

       abstract function show(); //abstract function doesnt have a body

}

class Product extends Database{  
      function show(){
        echo "some class";
      }
}
$obj = new Product();
$obj->show();
?>