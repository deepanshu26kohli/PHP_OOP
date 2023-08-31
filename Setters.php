<?php
class a{
    public $a="ertgh";
    function __construct()
    {
        
    }
    public function __set($name,$value)
    {
echo "hi : " . $value;
    }
}
$obj = new a();
$obj->x = "rgt";



?>