<?php
function brk(){
    echo "<br>";
}
interface Fruit{
    public function color();
    public function type();
} 
class Apple implements Fruit{
    function color(){
        echo "red";
    }
    function type()
    {
        
    }
}
class Banana implements Fruit{
    function color(){
        echo "yellow";
    }
    function type()
    {
          
    }
}
class Orange implements Fruit{
    function color(){
        echo "orange";
    }
    function type(){
        echo "citrus";
    }
}
$objB = new Banana();
$objB -> color();
brk();
$objA = new Apple();
$objA -> color();
brk();
$objO = new Orange();
$objO -> color();
brk();
$objO -> type();
?>