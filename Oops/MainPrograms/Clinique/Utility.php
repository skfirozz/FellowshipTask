<?php
class Utility
{
    /*
    *@description : this function offers to save the data or not
    *$parameter : parameter is array and the function is storing the array in file
    *@return :  returns the entered data as array 
    */
    public function addDoctorData()
    {
        $array = array();
        echo "enter the nuumber of doctors you want to add: ";
        $number = utility::getInt();
        for ($i = 0; $i < $number; $i++) {
            $tempArray = array();
            echo "enter name of doctor: ";
            $tempArray['Name'] = Utility::nameValidation();
            echo "enter ID : ";
            $tempArray['Id'] = Utility::getInt();
            echo "enter Specialization : ";
            $tempArray['Specialization'] = Utility::nameValidation();
            echo "enter Availability: ";
            $tempArray['Availability'] = Utility::nameValidation();
            array_push($array, $tempArray);
        }
        return $array;
    }

    /*
     *@description : this function is for adding the patient data
     *$parameter : no parameters
     *@return :  returns the entered data as array 
     */
    public function addPatients()
    {
        $array = array();
        echo "enter the nuumber of patients you want to add: ";
        $number = utility::getInt();
        for ($i = 0; $i < $number; $i++) {
            $tempArray = array();
            echo "enter name of patient: ";
            $tempArray['Name'] = Utility::nameValidation();
            echo "enter ID : ";
            $tempArray['Id'] = Utility::getInt();
            echo "enter mobileNumber : ";
            $tempArray['mobileNumber'] = Utility::getInt();
            echo "enter Age: ";
            $tempArray['Age'] = Utility::getInt();
            array_push($array, $tempArray);
        }
        return $array;
    }

    /*
    *@description : validating the word is string with out numbers without spaces
    *$parameter : no parameters
    *$return : returns the word if it is valid
    */
    public static function nameValidation()
    {
       
        $name = readline();
        if (preg_match("/^[a-zA-Z\-\']+$/", $name))
            return $name;
        else 
            Utility::nameValidation();
    }

    /*
    *@description : validating the input is only characters
    *$parameter : no parameters
    *$return : returns the input if it valid
    */
    public static function fullNameValidation()
    {
      
        $fName = readline();
        if (preg_match("/^[a-zA-Z\- \']+$/", $fName))
            return $fName;
        else 
            Utility::fullNameValidation();
    }

    /*
    *@description : validating the input is integer or not
    *$parameter : no parameter
    *$return : returns the integer value
    */
    public static function numberValidation()
    {
  
       fscanf(STDIN,"%d\n",$n);
       while(!is_numeric($n)){
           fscanf(STDIN,"%d\n",$n);
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
