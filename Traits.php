<?php
trait A {
    public function sayHello() {
        echo 'Hello from Trait A';
    }
}

trait B {
    public function sayHello() {
        echo 'Hello from Trait B';
    }
}

class MyClass {
    use A,B{
        A::sayHello insteadOf B ;
        B::sayHello as sayHelloB;
    }
}
$obj = new MyClass();
$obj->sayHello();  
$obj->sayHelloB();
?>