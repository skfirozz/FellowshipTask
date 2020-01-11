<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php';
class Address{
    function addNewData($array)
    {
        echo "enter how many members data you want to add: ";
        $number=Utility::getInt();
        for($i=0;$i<$number;$i++){
            $tempArray=array();
            echo "enter F:";
            $tempArray['firstName']=Utility::nameValidation();
            echo "enter L:";
            $tempArray['lastName']=Utility::nameValidation();
            echo "enter address: ";
            $tempArray['address']=readline();
            echo "enter city: ";
            $tempArray['city']=Utility::nameValidation();
            echo "enter state: ";
            $tempArray['state']=Utility::nameValidation();
            echo "enter zipcode: ";
            $tempArray['zipcode']=Utility::getInt();
            echo "enter phonenumber: ";
            $tempArray['phoneNumber']=Utility::getInt();
            array_push($array,$tempArray);
        }
    return $array;
    }

    function updateData($filename)
    {
        echo "enter the user name: ";
        $username=Utility::nameValidation();
        $userData=json_decode(file_get_contents($filename));
        for($i=0;$i<count($userData);$i++){
            if($userData[$i]->firstName==$username ||$userData[$i]->firstName==$username){
                $tempArray=array();
                $tempArray['firstName']=$userData[$i]->firstName;
                $tempArray['lastName']=$userData[$i]->lastName;
                echo "enter address: ";
                $tempArray['address']=readline();
                echo "enter city: ";
                $tempArray['city']=Utility::nameValidation();
                echo "enter state: ";
                $tempArray['state']=Utility::nameValidation();
                echo "enter zipcode: ";
                $tempArray['zipcode']=Utility::getInt();
                echo "enter phonenumber: ";
                $tempArray['phoneNumber']=Utility::getInt();
                $userData[$i]=$tempArray;
            }
        }
    return $userData;
    }

    function sortData($array,$name)
    {
        for($i=0;$i<count($array);$i++){
            for($j=0;$j<count($array)-$i-1;$j++){
                if ($array[$j]->$name > $array[$j+1]->$name){ 
                    $t = $array[$j]; 
                    $array[$j] = $array[$j+1]; 
                    $array[$j+1] = $t; 
                } 
            }
        }
    return $array;
    }

    function printEntities($filename)
    {
        $array=json_decode(file_get_contents($filename));
        for($i=0;$i<count($array);$i++){
            echo $array[$i]->firstName,"  ";
            echo $array[$i]->lastName,"  ";
            echo $array[$i]->address,"  ";
            echo $array[$i]->city,"  ";
            echo  $array[$i]->state,"   ";
            echo  $array[$i]->zipcode,"   ";
            echo  $array[$i]->phoneNumber,"   \n";
        }
    }

    function deletePersonData()
    {
        echo "enter the person name you want to delete: ";
        $name=Utility::nameValidation();
        echo "enter file name : ";
        $filename=readline();
        $userData=json_decode(file_get_contents($filename));
        for($i=0;$i<count($userData);$i++){
            if($userData[$i]->firstName == $name){
                array_splice($userData,$i,1);//this will delete the index position..
                echo "deleted $name data:\n\n";
            break;
        }
    }
    file_put_contents($filename,json_encode($userData));
    }
}
?>