<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms/Clinique $ php doctor.php
* @description :Clinique Management operations
* @Purpose : storing all in  JSON File
* @function : Utility/utility
* @file : doctor.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
include '/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php';
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Clinique/SwitchCases.php';
function addDoctorData()
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
function addPatients()
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

function run()
{
    $obj = new cases();
    echo "enter\n1.Add Doctor Data\n2.Add Patient Data\n3.Search Patient\n4.Search Doctor\n";
    $n = Utility::getInt();
    switch ($n) {
        case 1:
            $obj->addDoctor();
            break;
        case 2:
            $obj->addPatient();
            break;
        case 3:
            $obj->searchPatientCase();
            break;
        case 4:
            $obj->searchDoctorCase();
            break;
        case 5:
            break;
    }
}
$number = 1;
while ($number == 1) {
    run();
    echo "\nenter 1 to continue:  ";
    $number = Utility::getInt();
    if ($number != 1) {
        break;
    }

}
