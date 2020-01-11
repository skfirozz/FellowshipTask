<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/AddressBook/Address.php';
$obj=new Address();
function OfferToSave($array)
{
    echo "enter new AddessBook file name:  ";
    $filename=readline().".json";
    file_put_contents($filename,json_encode($array));
}
function run($obj)
{
    echo "enter 1.add new person data\n 2.edit data\n 3.delete a person data\n4.sort by name\n5.sort by zipcode\n6.print all data\n7.create new address book\n8.Open to address Book\n9.change the file name :  ";
    $option=Utility::getInt();
    switch($option){
        case 1:
            $array=array();
            $newData=$obj->addNewData($array);
            echo "enter the file name: ";
            $filename=readline().".json";
            $previousData=json_decode(file_get_contents(($filename)));
            $currentData=array_merge($previousData,$newData);
            file_put_contents($filename,json_encode($currentData));
        break;
        case 2:
            echo "enter the file name: ";
            $filename=readline().".json";
            $updatedData=$obj->updateData($filename);
            file_put_contents($filename,json_encode($updatedData));
            
        break;
        case 3:
            $obj->deletePersonData();
        break;
        case 4:
            echo "enter the file name to sort: ";
            $filename=$filename.".json";;
            $array=json_decode(file_get_contents($filename));
            $sortBy='zipCode';
            $sortedArray=$obj->sortData($array,$sortBy);
            file_put_contents($filename,json_encode($sortedArray));
        break;
        case 5:
            echo "enter the file name to sort: ";
            $filename=$filename.".json";
            $array=json_decode(file_get_contents($filename));
            $sortBy='firstName';
            $sortedArray=$obj->sortData($array,$sortBy);
            file_put_contents($filename,json_encode($sortedArray));
        break;
        case 6:
            echo "enter file name to print data: ";
            $filename=readline().".json";
            $obj->printEntities($filename);
        break;
        case 7:
            echo "enter new AddessBook file name:  ";
            $filename=readline();
            $array=array();
            $filename=$filename.".json";
            $newData=$obj->addNewData($array);
            echo "do you want to save the file \n\t1.to save \t2.not to save: ";
            $s=Utility::numberValidation();
            if($s==1)
            {
                OfferToSave($newData);
            }
        break;
        case 8:
            echo "enter fila name to open address book: ";
            $filename=readline().".json";
            $data=json_decode(file_get_contents($filename));
            $obj->printEntities($filename);
        break;
        case 9:
            echo "enter the file name to chane file name:  ";
            $filename=readline().".json";
            echo "enter new file name: ";
            $newFilename=readline().".json";
            rename($filename,$newFilename);
            break;

        break;
        default:
        echo "....EXIT....\n\n";
    break;
    }
}
$n=1;
while($n==1){
run($obj);
echo "\nenter 1 to continue: ";
$n=readline();
if($n != 1)
break;
}
echo "\n\n";
?>