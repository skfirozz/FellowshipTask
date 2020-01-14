<?php
class Utility
{

    /*
     *@description : this function offers to save the data or not
     *$parameter : parameter is array and the function is storing the array in file
     */
    public function OfferToSave($array)
    {
        echo "enter new AddessBook file name:  ";
        $filename = readline() . ".json";
        file_put_contents($filename, json_encode($array));
    }

    /*
     *@description : switch cases to select an option
     *$parameter : based on option the action will done
     */
    public function run($obj)
    {
        echo "enter 1.add new person data\n 2.edit data\n 3.delete a person data\n4.sort by name\n5.sort by zipcode\n6.print all data\n7.create new address book\n8.Open to address Book\n9.change the file name :  ";
        $option = Utility::getInt();
        switch ($option) {
            case 1:
                $array = array();
                $newData = $obj->addNewData($array);
                echo "enter the file name: ";
                $filename = readline() . ".json";
                $previousData = json_decode(file_get_contents(($filename)));
                $currentData = array_merge($previousData, $newData);
                file_put_contents($filename, json_encode($currentData));
                break;
            case 2:
                echo "enter the file name: ";
                $filename = readline() . ".json";
                $updatedData = $obj->updateData($filename);
                file_put_contents($filename, json_encode($updatedData));

                break;
            case 3:
                $obj->deletePersonData();
                break;
            case 4:
                echo "enter the file name to sort: ";
                $filename = $filename . ".json";
                $array = json_decode(file_get_contents($filename));
                $sortBy = 'zipCode';
                $sortedArray = $obj->sortData($array, $sortBy);
                file_put_contents($filename, json_encode($sortedArray));
                break;
            case 5:
                echo "enter the file name to sort: ";
                $filename = $filename . ".json";
                $array = json_decode(file_get_contents($filename));
                $sortBy = 'firstName';
                $sortedArray = $obj->sortData($array, $sortBy);
                file_put_contents($filename, json_encode($sortedArray));
                break;
            case 6:
                echo "enter file name to print data: ";
                $filename = readline() . ".json";
                $obj->printEntities($filename);
                break;
            case 7:
                echo "enter new AddessBook file name:  ";
                $filename = readline();
                $array = array();
                $filename = $filename . ".json";
                $newData = $obj->addNewData($array);
                echo "do you want to save the file \n\t1.to save \t2.not to save: ";
                $s = Utility::numberValidation();
                if ($s == 1) {
                    Utility::OfferToSave($newData);
                }
                break;
            case 8:
                echo "enter fila name to open address book: ";
                $filename = readline() . ".json";
                $data = json_decode(file_get_contents($filename));
                $obj->printEntities($filename);
                break;
            case 9:
                echo "enter the file name to chane file name:  ";
                $filename = readline() . ".json";
                echo "enter new file name: ";
                $newFilename = readline() . ".json";
                rename($filename, $newFilename);
                break;

                break;
            default:
                echo "....EXIT....\n\n";
                break;
        }
    }

    /*
     *@description : validating the word is string with out numbers without spaces
     *$parameter : no parameters
     *$return : returns the word if it is valid
     */
    public static function nameValidation()
    {

        $name = readline();
        if (preg_match("/^[a-zA-Z\-\']+$/", $name)) {
            return $name;
        } else {
            Utility::nameValidation();
        }

    }

    /*
     *@description : validating the input is only characters
     *$parameter : no parameters
     *$return : returns the input if it valid
     */
    public static function fullNameValidation()
    {

        $fName = readline();
        if (preg_match("/^[a-zA-Z\- \']+$/", $fName)) {
            return $fName;
        } else {
            Utility::fullNameValidation();
        }

    }

    /*
     *@description : validating the input is integer or not
     *$parameter : no parameter
     *$return : returns the integer value
     */
    public static function numberValidation()
    {

        fscanf(STDIN, "%d\n", $n);
        while (!is_numeric($n)) {
            fscanf(STDIN, "%d\n", $n);
        }
        return $n;
    }

    /*
     *@description : validating the input is integer or not
     *$parameter : no parameter
     *$return : returns the integer value
     */
    public static function getInt()
    {
        fscanf(STDIN, "%d\n", $n);
        while (!is_numeric($n)) {
            echo "enter numeric value" . "\n";
            fscanf(STDIN, "%d\n", $n);
        }
        return $n;
    }
}
