<?php
class BusinessLogic{
    /*
     *@description : to storing the entered data in array and which array is again storing in main array
     *$parameter : parameter is main array in that data is storing 
     *@returns : return main array
     */
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

    /*
     *@description : this function is for updating the user data which is exist in file.
     *$parameter : parameter is filename this will update the existing data in file  
     *@returns : array which is updated array
     */
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

    /*
     *@description : this function is for sorting the content of array.
     *$parameter : parameter is array and name is which one is need to sort   
     *@returns : the return type is sorted array
     */
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

    /*
     *@description : this function is for printing the data which is exist in file .
     *$parameter : parameter is filename
     */
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

     /*
     *@description : this function is for deleting the person data which is exist in file, after deleting the persons data again remaining data is stored in file.
     *$parameter : no parameter
     */
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