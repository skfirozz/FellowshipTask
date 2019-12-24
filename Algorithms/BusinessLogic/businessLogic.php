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
}
?>