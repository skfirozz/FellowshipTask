<?php
include "/home/admin1/Documents/Fellowship/Algorithm/BusinessLogic/businessLogic.php";
class Utility{
    public static function AnagramOrNot($str1,$str2)
    {
        if(strlen($str1)==strlen($str2))
            BusinessLogic::anagram($str1,$str2);
        else 
            echo "not anagram";
    }

    public static function primeRange($range)
    {
        $array=array();
        $count=0;
        for($i=2;$i<=$range;$i++){
            $c=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0)
                    $c++;
            }
            if($c==2){
              $array[$count]=$i;
              $count++;
            }
        }
        return $array;
    }

    public static function primePalindrome($array)
    {
        $c=0;
        $primePal=array();
        for($i=0;$i<count($array);$i++)
		{
			$temp=$array[$i];
			$finValue=0;
			while(floor($temp !=0))
			{
				$t=floor($temp%10);
				$temp=floor($temp/10);
                $finValue=$finValue*10+$t;
            }
			for($j=0;$j<count($array);$j++)
			{
				if( $finValue==$array[$j]&& $finValue >9)
				{
                    $primePal[$c]=$array[$j];
					$c++;
				}
			}
        }
        return $primePal;
    }

    public static function primeAnagram($array)
    {
        for($i=0;$i<count($array);$i++){
            if($array[$i]>9){
                $val=BusinessLogic::bubbleSort($array[$i]);
                for($j=0;$j<count($array);$j++){
                    if($val==$array[$j] && $i != $j)
                        echo $val," ";
                }
            }
        }
    }
}
?>