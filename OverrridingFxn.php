<?php



function brk()
{
    echo "<br>";
}
class Database{
  public function show(){
    echo "from database class";
    brk();
  }
}
class Product extends  Database{
    public function show(){
        parent::show();
        echo "from product class";
        brk();
      }
}
$objP = new Product();
echo $objP->show();
?>