<?
  include "/home/admin1/Documents/Fellowship/Algorithms/BusinessLogic/businessLogic.php";
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
              echo $i," ";
              $count++;
            }
        }
        return $array;
    }
}
?>