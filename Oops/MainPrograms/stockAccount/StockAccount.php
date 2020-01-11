<?php
include "/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php";
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/stockAccount/StockAccountLink.php';
function account()
{
    $stockObject=new StockAccount();
    echo "enter \n1.add users data\n2.add shares data\n3.buy or sell shares \n4.EXIT\nenter a option:  ";
    $option=Utility::getInt();
    switch($option){
        case 1:
            echo "enter file name what you want: ";
            $filename=readline();
            $array=$stockObject->addUsersData();
            $stockObject->saveFile($filename,$array);
        break;
        case 2: 
            ECHO "enter a file name what you want to create for shares";
            $filename=readline();
            $array=$stockObject->addShares($filename);
            $stockObject->saveFile($filename,$array);
        break;
        case 3:
            echo "enter 1. to BUY \t 2. to SELL: ";
            $option1=Utility::getInt();
            switch($option1){
                case 1:
                echo "enter the symbol you want to buy: ";
                $symbol=Utility::nameValidation();
                echo "enter the amount: ";
                $amount=Utility::getInt();
                $resu= $stockObject->buy($amount,$symbol);
                break;
                case 2:
                    echo "enter the symbol you want to sell: ";
                    $symbol=Utility::nameValidation();
                    echo "enter the amount: ";
                    $amount=Utility::getInt();
                    $stockObject->sell($amount,$symbol);
                break;
            }
        break;
        default: echo "EXIT:\n\n";
        break;
    }
}
$n=1;
while($n==1){
    account();
    echo "enter 1 for more operations:  ";
    $n=readline();
    if($n!=1)
break;
}
?>