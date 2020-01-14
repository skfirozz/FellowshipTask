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
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Clinique/Utility.php';
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Clinique/BusinessLogic.php';

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
