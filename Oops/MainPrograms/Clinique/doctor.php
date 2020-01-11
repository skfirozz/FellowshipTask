<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/Utility/utility.php';
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Clinique/SwitchCases.php';
function addDoctorData()
{
    $array=array();
    echo "enter the nuumber of doctors you want to add: ";
    $number=utility::getInt();
    for($i=0;$i<$number;$i++){
        $tempArray=array();
        echo "enter name of doctor: ";
        $tempArray['Name']=Utility::nameValidation();
        echo "enter ID : ";
        $tempArray['Id']=Utility::getInt();
        echo "enter Specialization : ";
        $tempArray['Specialization']=Utility::nameValidation();
        echo "enter Availability: ";
        $tempArray['Availability']=Utility::nameValidation();
        array_push($array,$tempArray);
    }
    return $array;
}
function addPatients()
{
    $array=array();
    echo "enter the nuumber of patients you want to add: ";
    $number=utility::getInt();
    for($i=0;$i<$number;$i++){
        $tempArray=array();
        echo "enter name of patient: ";
        $tempArray['Name']=Utility::nameValidation();
        echo "enter ID : ";
        $tempArray['Id']=Utility::getInt();
        echo "enter mobileNumber : ";
        $tempArray['mobileNumber']=Utility::getInt();
        echo "enter Age: ";
        $tempArray['Age']=Utility::getInt();
        array_push($array,$tempArray);
    }
    return $array;
}
function searchPatient($search)
{
    $bool=true;
    $array=json_decode(file_get_contents('patient.json'));
    for($i=0;$i<count($array);$i++){
        if($array[$i]->Name==$search||$array[$i]->Id==$search||$array[$i]->mobileNumber==$search||$array[$i]->Age==$search){
            echo "Name--",$array[$i]->Name,"\n";
            echo "ID--",$array[$i]->Id,"\n";
            echo "Number--",$array[$i]->mobileNumber,"\n";
            echo "Age--",$array[$i]->Age,"\n";
            $bool=false;;
        break;
        }
    }
    if($bool){
        echo "\nno data found...\n";
    }
}
function searchDoctor($search)
{
    $bool=true;
    $array=json_decode(file_get_contents('doctor.json'));
    for($i=0;$i<count($array);$i++){
        if($array[$i]->Name==$search||$array[$i]->Id==$search||$array[$i]->Specialization==$search||$array[$i]->Availability==$search){
            echo "Name--",$array[$i]->Name,"\n";
            echo "ID--",$array[$i]->Id,"\n";
            echo "Special--",$array[$i]->Specialization,"\n";
            echo "Available--",$array[$i]->Availability,"\n";
            $bool=false;;
        break;
        }
    }
    if($bool){
        echo "\nno data found...\n";
    }
}
function run()
{
    $obj=new cases();
    echo "enter\n1.Add Doctor Data\n2.Add Patient Data\n3.Search Patient\n4.Search Doctor\n";
    $n=Utility::getInt();
    switch($n){
        case 1:
            $obj->addDoctor();
        break;
        case 2:
            $obj->addPatient();
        break;
        case 3:
            $obj->searchPatient();
        break;
        case 4:
            $obj->searchDoctor();
        break;
        case 5:
        break;
    }
}
$number=1;
while($number==1){
    run();
    echo "\nenter 1 to continue:  ";
    $number=Utility::getInt();
    if($number!=1)
break;
}
?>