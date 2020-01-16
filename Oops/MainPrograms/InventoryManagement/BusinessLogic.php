<?php
class BusinessLogic{
    public $name;
    public $quantity;
    public $price;
    public function __construct($name,$price,$quantity)
    {
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }
function portfolio($portfolio)
{
    echo "enter number of stocks you want to add: ";
    $stocks=Utility::getInt();
    for($i=0;$i<$stocks;$i++){
        echo "Enter stock name: ";
        $name=Utility::nameValidation();
        echo "enter quantity of stock: ";
        $quantity=Utility::getInt();
        echo "enter price of each share: ";
        $price=Utility::getInt();
        $portfolio[] = new BusinessLogic($name, $price, $quantity);
    }
    echo "\n\n";
    $encode['stock']=json_encode($portfolio);
    file_put_contents('stock.json',$encode);
}

function printReport($portfolio)
{
    $total=0;
    $i=0;
    foreach($portfolio as $key){
        echo $portfolio[$i]->name,"   ",$portfolio[$i]->quantity,"   ",$portfolio[$i]->price,"    ",$key->quantity*$key->price,"\n";
        $total +=$key->quantity*$key->price;
        $i++;
    }
    echo "total value of stock : $total";
}
function newPort()
{
    $portfolio=array();
    BusinessLogic::portfolio($portfolio);
}
function add()
{
    echo "adding new elements: \n";
    $portfolio=json_decode(file_get_contents('stock.json'));
    BusinessLogic::portfolio($portfolio);
}
}
?>