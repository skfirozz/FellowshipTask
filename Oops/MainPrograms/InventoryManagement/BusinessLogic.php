<?php
class BusinessLogic
{
    public function portfolio()
    {
        $arr = array();
        echo "enter number of stocks you want to add: ";
        $stocks = Utility::getInt();
        for ($i = 0; $i < $stocks; $i++) {
            $portfolio1 = array();
            echo "Enter stock name: ";
            $portfolio1['name'] = Utility::nameValidation();
            echo "enter quantity of stock: ";
            $portfolio1['quantity'] = Utility::getInt();
            echo "enter price of each share: ";
            $portfolio1['price'] = Utility::getInt();
            // $portfolio[] = new BusinessLogic($name, $price, $quantity);
            array_push($arr, $portfolio1);
        }
        echo "\n\n";
        return $arr;
    }

    public function printReport($portfolio)
    {
        $total = 0;
        $i = 0;
        foreach ($portfolio as $key) {
            echo $portfolio[$i]->name, "   ", $portfolio[$i]->quantity, "   ", $portfolio[$i]->price, "    ", $key->quantity * $key->price, "\n";
            $total += $key->quantity * $key->price;
            $i++;
        }
        echo "total value of stock : $total";
    }
    public function newPort()
    {
        $data = BusinessLogic::portfolio();
        file_put_contents('stock.json', json_encode($data));
    }
    public function add()
    {
        echo "adding new elements: \n";
        $portfolio = json_decode(file_get_contents('stock.json'));
        $newdata = BusinessLogic::portfolio();
        $D = array_merge($portfolio, $newdata);
        file_put_contents('stock.json', json_encode($D));
    }
}
