<?php


class BusinessLogic {
    public static function check($i,$array)
    {
        $random=rand();
        if($i==0)
          return $random;
        else{
            $count=0;
            for($j=0; $j<$i;$j++){
                if($random==$array[$j])
                    $count++;
            }
            if($count==0)
                return $random;
            else
            BusinessLogic::check($i,$array);
        }
    }
    public static function SumZero($size)
    {
        $array=array();
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++){
                $array[$i][$j]=readline();
            }
        }
        return $array;
    }
    
}
?>