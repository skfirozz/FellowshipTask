<?php
class cases{
    function searchPatient()
    {
        echo "enter 1. with name\n2.ID\n3.mobileNumber\n4.Age :  ";
        $search=Utility::getInt();
        switch($search){
            case 1:
                echo "enter Name : ";
                $name=Utility::nameValidation();
                searchPatient($name);
        break;
            case 2:
                echo "enter ID : ";
                $name=Utility::getInt();
                searchPatient($name);
        break;
            case 3:
                echo "enter mobile Number : ";
                $name=Utility::getInt();
                searchPatient($name);
        break;
            case 4:
                echo "enter Age : ";
                $name=Utility::getInt();
                searchPatient($name);
        break;
            default :
                echo "\nEXIT........\n";
        }
    }

    function searchDoctor()
    {
        echo "\nenter 1. with name\n2.ID\n3.Specialization\n4.Availability :  ";
        $search=Utility::getInt();
        switch($search){     
            case 1:
                echo "enter name: ";
                $name=Utility::nameValidation();
                searchDoctor($name);
        break; 
            case 2:
                echo "enter name: ";
                $name=Utility::getInt();
                searchDoctor($name);
        break;
            case 3:
                echo "enter Specialization: ";
                $name=Utility::nameValidation();
                searchDoctor($name);
        break;
            case 4:
                echo "enter Availability : ";
                $name=Utility::nameValidation();
                searchDoctor($name);
        break;
            default :
                echo "\nEXIT........\n";
        }
    }
    function addDoctor()
    {
        $previosData=json_decode(file_get_contents('doctor.json'));
        $newData=addDoctorData();
        echo count($previosData);
        $data=array_merge($previosData,$newData);
        file_put_contents('doctor.json',json_encode($data));
    }
    function addPatient()
    {
        $previosData=json_decode(file_get_contents('patient.json'));
        $newData=addPatients();
        echo count($previosData);
        $data=array_merge($previosData,$newData);
        file_put_contents('patient.json',json_encode($data));
    }

}
?>