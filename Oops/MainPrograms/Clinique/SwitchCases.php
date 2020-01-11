<?php
class cases
{

    public function searchPatient($search)
    {
        $bool = true;
        $array = json_decode(file_get_contents('patient.json'));
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i]->Name == $search || $array[$i]->Id == $search || $array[$i]->mobileNumber == $search || $array[$i]->Age == $search) {
                echo "Name--", $array[$i]->Name, "\n";
                echo "ID--", $array[$i]->Id, "\n";
                echo "Number--", $array[$i]->mobileNumber, "\n";
                echo "Age--", $array[$i]->Age, "\n";
                $bool = false;
                break;
            }
        }
        if ($bool) {
            echo "\nno data found...\n";
        }
    }
    public function searchDoctor($search)
    {
        $bool = true;
        $array = json_decode(file_get_contents('doctor.json'));
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i]->Name == $search || $array[$i]->Id == $search || $array[$i]->Specialization == $search || $array[$i]->Availability == $search) {
                echo "\nName--", $array[$i]->Name, "\n";
                echo "ID--", $array[$i]->Id, "\n";
                echo "Special--", $array[$i]->Specialization, "\n";
                echo "Available--", $array[$i]->Availability, "\n";
                $bool = false;
                break;
            }
        }
        if ($bool) {
            echo "\nno data found...\n";
        }
    }

    public function searchPatientCase()
    {
        echo "enter 1. with name\n2.ID\n3.mobileNumber\n4.Age :  ";
        $search = Utility::getInt();
        switch ($search) {
            case 1:
                echo "enter Name : ";
                $name = Utility::nameValidation();
                cases::searchPatient($name);
                break;
            case 2:
                echo "enter ID : ";
                $name = Utility::getInt();
                cases::searchPatient($name);
                break;
            case 3:
                echo "enter mobile Number : ";
                $name = Utility::getInt();
                cases::searchPatient($name);
                break;
            case 4:
                echo "enter Age : ";
                $name = Utility::getInt();
                cases::searchPatient($name);
                break;
            default:
                echo "\nEXIT........\n";
        }
    }

    public function searchDoctorCase()
    {
        echo "\nenter 1. with name\n2.ID\n3.Specialization\n4.Availability :  ";
        $search = Utility::getInt();
        switch ($search) {
            case 1:
                echo "enter name: ";
                $name = Utility::nameValidation();
                cases::searchDoctor($name);
                break;
            case 2:
                echo "enter name: ";
                $name = Utility::getInt();
                cases::searchDoctor($name);
                break;
            case 3:
                echo "enter Specialization: ";
                $name = Utility::nameValidation();
                cases::searchDoctor($name);
                break;
            case 4:
                echo "enter Availability : ";
                $name = Utility::nameValidation();
                cases::searchDoctor($name);
                break;
            default:
                echo "\nEXIT........\n";
        }
    }
    public function addDoctor()
    {
        $previosData = json_decode(file_get_contents('doctor.json'));
        $newData = addDoctorData();
        echo count($previosData);
        $data = array_merge($previosData, $newData);
        file_put_contents('doctor.json', json_encode($data));
    }
    public function addPatient()
    {
        $previosData = json_decode(file_get_contents('patient.json'));
        $newData = addPatients();
        echo count($previosData);
        $data = array_merge($previosData, $newData);
        file_put_contents('patient.json', json_encode($data));
    }
}
