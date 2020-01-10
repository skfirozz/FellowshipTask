<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php';
function addNewData($number)
{
    global $array;
    for($i=0;$i<$number;$i++){
        $tempArray=array();
        echo "enter F:";
        $tempArray['firstName']=Utility::nameValidation();
        echo "enter L:";
        $tempArray['lastName']=Utility::nameValidation();
        echo "enter address: ";
        $tempArray['address']=readline();
        echo "enter city: ";
        $tempArrayp['city']=Utility::nameValidation();
        echo "enter state: ";
        $tempArray['state']=Utility::nameValidation();
        echo "enter zipcode: ";
        $tempArray['zipCode']=Utility::getInt();
        echo "enter phonenumber: ";
        $tempArray['phoneNumber']=Utility::getInt();
        array_push($array,$tempArray);
    }
    return $array;
}
$array=array();
function run()
{
    echo "enter how many users data you want to add: ";
    $number=Utility::getInt();
    $arr=addNewData($number);
    
}
run();
echo "\n\n";
?>