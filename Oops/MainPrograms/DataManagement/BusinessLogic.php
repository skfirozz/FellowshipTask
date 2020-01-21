<?php
class BusinessLogic
{
    public function Data($select)
    {
        $item=array();
        switch ($select) {
            case 1:
                $priceOfRice = 100;
                $item["name"] = "rice";
                echo "enter weight: ";
                $weight = Utility::getInt();
                $item["weight"] = $weight;
                $item["priceOfWeight"] = $weight * $priceOfRice;
            return $item;    
            break;
            case 2:
                $priceOfpaulse = 100;
                $item["name"] = "paulse";
                echo "enter weight: ";
                $weight =Utility::getInt();
                $item["weight"] = $weight;
                $item["priceOfWeight"] = $weight * $priceOfpaulse;
                return $item;
            break;
            case 3:
                $priceOfRice = 100;
                $item["name"] = "wheat";
                echo "enter weight: ";
                $weight = Utility::getInt();
                $item["weight"] = $weight;
                $item["priceOfWeight"] = $weight * $priceOfRice;    
                return $item;
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