<?php
function brk()
{
    echo "<br>";
}
class Database 
{
    static public $var = 77;
    function __construct()
    {
        self::$var = 89;
        echo "Database constructor";
        brk();
    }
    public function db_connect()
    {
        echo "from connect fxn";
        brk();
   
    }
    public function db_read()
    {
        echo "from read fxn";
        brk();
   
    }
    public function db_write()
    {
        echo "from write fxn";
        brk();
       
    }
}
class Product extends Database
{
    function __construct()
    {
        self::$var = 54;
        echo "Product constructor";
        brk();
    }
    function myProduct(){
        $this->db_connect();
     }
}
class User extends Product
{

}
$objP = new Product();
echo $objP->myProduct();
brk();
echo $objP->db_read();
brk();
$objU = new User();
echo $objU->myProduct();
brk();
echo  User::$var;
brk();
$objD = new Database();
echo $objD::$var;
brk();
echo Database::$var;
brk();
$objP1 = new Product();
brk();
echo Product::$var;
brk();
echo $objP1->myProduct();
brk();

