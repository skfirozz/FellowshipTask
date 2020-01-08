<?php
class BusinessLogic{
    /*
    *@description : checking two strings are anagram or not   
    *$parameter : parameters are strings
    */
    public static function anagram($str1,$str2)
    {
        $str1=strtolower($str1);
        $str2=strtolower($str2);
        $str1=str_split($str1);
        $str2=str_split($str2);
        $str1=BusinessLogic::bubbleSort($str1);
        $str2=BusinessLogic::bubbleSort($str2);
        if($str1==$str2)
        echo "anagram\n";
        else
        echo "not a anagram\n";

    }
    
     /*
    *@description : sort the list of words or numbers using bubble sort   
    *$parameter : parameter is list of unsorted words 
    */
    public static function bubbleSort($str1)
    {
        for($i=0;$i<count($str1);$i++){
            for($j=$i+1;$j<count($str1);$j++){
               if($str1[$i] > $str1[$j]){
                   $temp=$str1[$i];
                   $str1[$i]=$str1[$j];
                   $str1[$j]=$temp;
               } 
            }
        }
        return $str1;
    }

     /*
    *@description : finding the day of the week   
    *$parameter : reads the day from the dayOfWeek($year,$month,$date) function  
    */
    public static function day($day)
    {
        switch($day)
        {
            case 1: echo "MONDAY\n";
                break;
            case 2: echo "TUESDAY\n";
                break;
            case 3: echo "WENDSDAY\n";
                break;
            case 4: echo "THURSDAY\n";
                break;
            case 5: echo "FRIDAY\n";
                break;
            case 6: echo "SATURDAY\n";
                break;
            case 0: echo "SUNDAY\n";
                break;
        }
    }

    /*
    *@description : this function purpose is only for integer values   
    */
    public static function intArray()
    {
        echo "enter the int array size: ";
        $intSize=readline();
        $intArray=array();
        for($i=0;$i<$intSize;$i++)
        $intArray[$i]=readline();
        return $intArray;
    }
    /*
    *@description : this function purpose is only for string values   
    */
    public static function stringArray()
    {
        echo "enter the size of string array: ";
        $stringSize=readline();
        $stringArray=array();
        for($i=0;$i<$stringSize;$i++)
        $stringArray[$i]=readline();
    return $stringArray;
    }
}
?>