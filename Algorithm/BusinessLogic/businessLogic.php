<?php
class BusinessLogic{
    public static function anagram($str1,$str2)
    {
        $str1=strtolower($str1);
        $str2=strtolower($str2);
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
        for($i=0;$i<strlen($str1);$i++){
            for($j=$i+1;$j<strlen($str1);$j++){
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
            case 0: echo "MONDAY\n";
                break;
            case 1: echo "TUESDAY\n";
                break;
            case 2: echo "WENDSDAY\n";
                break;
            case 3: echo "THURSDAY\n";
                break;
            case 4: echo "FRIDAY\n";
                break;
            case 5: echo "SATURDAY\n";
                break;
            case 6: echo "SUNDAY\n";
                break;
        }
    }
}
?>