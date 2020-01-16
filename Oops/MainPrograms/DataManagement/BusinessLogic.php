<?php
class BusinessLogic
{
    public function Data($select)
    {
        $item=array();
        global $item;
        $array = array();
        switch ($select) {
            case 1:
                $priceOfRice = 100;
                $array["name"] = "rice";
                echo "enter weight: ";
                $weight = Utility::getInt();
                $array["weight"] = $weight;
                $array["priceOfWeight"] = $weight * $priceOfRice;
                array_push($item, $array);
                break;
            case 2:
                $priceOfpaulse = 100;
                $array["name"] = "paulse";
                echo "enter weight: ";
                $weight =Utility::getInt();
                $array["weight"] = $weight;
                $array["priceOfWeight"] = $weight * $priceOfpaulse;
                array_push($item, $array);
                break;
            case 3:
                $priceOfRice = 100;
                $array["name"] = "wheat";
                echo "enter weight: ";
                $weight = Utility::getInt();
                $array["weight"] = $weight;
                $array["priceOfWeight"] = $weight * $priceOfRice;
                array_push($item, $array);
                break;
            default:
                echo "EXIT";
                break;
        }
    }

    public function saveData($item)
    {
        $json1['inventory'] = $item;
        $fp = fopen('dataManagement.json', 'w');
        fwrite($fp, json_encode($json1));
        fclose($fp);
    }
    public function getJson()
    {
        $fp = fopen('dataManagement.json', 'r');
        $str = fread($fp, filesize('dataManagement.json'));
        fclose($fp);
        echo $str, "\n\n";
    }
}
